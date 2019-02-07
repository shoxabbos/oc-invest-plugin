<?php namespace Shohabbos\Invest\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateShohabbosInvestPlans extends Migration
{
    public function up()
    {
        Schema::create('shohabbos_invest_plans', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->text('description');
            $table->integer('days')->unsigned();
            $table->integer('min')->unsigned();
            $table->integer('max')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('shohabbos_invest_plans');
    }
}
