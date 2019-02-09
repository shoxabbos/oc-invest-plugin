<?php namespace Shohabbos\Invest\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Migration109 extends Migration
{
    public function up()
    {
        Schema::table('users', function($table) {
            $table->decimal('dividend', 10, 2)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }

    public function down()
    {
        Schema::table('users', function($table) {
            $table->integer('dividend')->nullable(false)->unsigned()->default(null)->change();
        });
    }
}