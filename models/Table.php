<?php namespace Shohabbos\Invest\Models;

use Model;

/**
 * Model
 */
class Table extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;
    
    const SORT_ORDER = 'sort';

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'shohabbos_invest_table';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
