<?php namespace Shohabbos\Invest\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteShohabbosInvestWithdraws extends Migration
{
    public function up()
    {
        Schema::dropIfExists('shohabbos_invest_withdraws');
    }
    
    public function down()
    {
        Schema::create('shohabbos_invest_withdraws', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('amount')->unsigned();
            $table->string('comment', 191);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
}
