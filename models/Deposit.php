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

    public $guarded = ['id'];

    public $hasMany = [
        'profits' => 'Shohabbos\Invest\Models\Profit'
    ];

    public $belongsTo = [
        'user' => 'RainLab\User\Models\User',
        'plan' => 'Shohabbos\Invest\Models\Plan'
    ];

}
