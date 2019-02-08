<?php namespace Shohabbos\Invest\Models;

use Model;
use Illuminate\Filesystem\Filesystem;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'shohabbos_invest_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';

}