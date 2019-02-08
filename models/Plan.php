<?php namespace Shohabbos\Invest\Models;

use Model;

/**
 * Model
 */
class Plan extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'shohabbos_invest_plans';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'photo' => 'System\Models\File'
    ];
    
}
