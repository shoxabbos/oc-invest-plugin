<?php namespace Shohabbos\Invest\Console;

use Db;
use Carbon\Carbon;
use Illuminate\Console\Command;
use \RainLab\User\Models\User;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Shohabbos\Invest\Models\Deposit;
use Shohabbos\Invest\Models\Profit;
use Shohabbos\Invest\Models\Settings;


class Dividend extends Command
{
    /**
     * @var string The console command name.
     */
    protected $name = 'invest:dividend';

    /**
     * @var string The console command description.
     */
    protected $description = 'Make dividend.';

    /**
     * Execute the console command.
     * @return void
     */
    public function handle()
    {
        $deposits = Deposit::where('expired_at', '>', Carbon::now())->get();

        $bar = $this->output->createProgressBar(count($deposits));

        foreach ($deposits as $deposit)
        {
            $percent = Settings::get('percent', 0.5);

            try {
                Db::transaction(function() use ($deposit, $percent) {
                    $profitAmount = ($deposit->amount / 100) * $percent; 

                    $deposit->user->balance += $profitAmount;
                    if ($deposit->user->save()) {
                        $profit = new Profit([
                            'deposit_id' => $deposit->id,
                            'type' => 'Процент от депозита',
                            'percent' => $percent,
                            'amount' => $profitAmount
                        ]);
                        
                        $profit->save();
                    }

                });
            } catch (Exception $e) {
                $this->error($e->getMessage());
            }

            $bar->advance();
        }


        $bar->finish();
    }


    /**
     * Get the console command arguments.
     * @return array
     */
    protected function getArguments()
    {
        return [];
    }

    /**
     * Get the console command options.
     * @return array
     */
    protected function getOptions()
    {
        return [];
    }

}