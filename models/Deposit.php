<?php namespace Shohabbos\Invest\Models;

use Model;

/**
 * Model
 */
class Deposit extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'shohabbos_invest_deposits';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
