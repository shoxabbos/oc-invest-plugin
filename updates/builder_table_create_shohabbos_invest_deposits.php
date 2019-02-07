<?php namespace Shohabbos\Invest\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateShohabbosInvestDeposits extends Migration
{
    public function up()
    {
        Schema::create('shohabbos_invest_deposits', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('plan_id')->unsigned();
            $table->integer('amount')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->dateTime('expired_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('shohabbos_invest_deposits');
    }
}
