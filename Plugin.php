<?php namespace Shohabbos\Invest;

use Flash;
use ValidationException;
use System\Classes\PluginBase;
use RainLab\User\Models\User;
use RainLab\User\Controllers\Users;
use Shohabbos\Invest\Console\Dividend;

class Plugin extends PluginBase
{
	public $require = ['RainLab.User'];

	public function register()
    {
        $this->registerConsoleCommand('invest.dividend', Dividend::class);
    }

	public function boot() {

		User::extend(function($model) { 
			$model->hasMany['deposits'] = ['Shohabbos\Invest\Models\Deposit'];
		});

		Users::extendListColumns(function($list, $model) {
			if (!$model instanceof User) {
				return;
			}

			$list->addColumns([
				'dividend' => [
					'label' => 'Dividend balance',
				]
			]);
		});


		Users::extendFormFields(function($form, $model, $context) {

			if (!$model instanceof User) {
				return;
			}

			$form->addTabFields([
				'dividend' => [
					'label' => 'Dividend Balance',
					'tab' => 'Portal Fields',
					'type' => 'number',
					//'readOnly' => true,
					'span' => 'auto',
					'comment' => 'Dividend balance of user'
				],
			]);
		});
		
	}

    public function registerComponents()
    {
    }

    public function registerSettings()
    {
	    return [
	        'settings' => [
	        	'category'    => 'Portal Invest',
	            'label'       => 'Настройки',
	            'description' => 'Настройки',
	            'icon'        => 'icon-cog',
	            'class'       => 'Shohabbos\Invest\Models\Settings',
	            'order'       => 501,
	            'keywords'    => 'invest portal settings',
	        ]
	    ];
    }
}
