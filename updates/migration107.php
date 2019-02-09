<?php namespace Shohabbos\Invest\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Migration107 extends Migration
{
    public function up()
    {
        Schema::table('users', function($table) {
            $table->integer('dividend')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function($table) {
            $table->dropDown(['dividend']);
        });
    }
}