<?php namespace Shohabbos\Invest\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShohabbosInvestProfits3 extends Migration
{
    public function up()
    {
        Schema::table('shohabbos_invest_profits', function($table)
        {
            $table->decimal('amount', 10, 2)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('shohabbos_invest_profits', function($table)
        {
            $table->integer('amount')->nullable(false)->unsigned()->default(null)->change();
        });
    }
}
