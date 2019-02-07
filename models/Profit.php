<?php namespace Shohabbos\Invest\Models;

use Model;

/**
 * Model
 */
class Profit extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'shohabbos_invest_profits';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
