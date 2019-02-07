<?php namespace Shohabbos\Invest\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Deposits extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'manage_deposits' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Shohabbos.Invest', 'invest', 'invest-deposit');
    }
}
