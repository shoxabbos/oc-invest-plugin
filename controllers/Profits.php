<?php namespace Shohabbos\Invest\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Profits extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'manage_profits' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Shohabbos.Invest', 'invest', 'invest-profit');
    }
}
