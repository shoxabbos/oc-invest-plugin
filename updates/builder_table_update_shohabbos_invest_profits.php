<?php namespace Shohabbos\Invest\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShohabbosInvestProfits extends Migration
{
    public function up()
    {
        Schema::table('shohabbos_invest_profits', function($table)
        {
            $table->dropColumn('user_id');
        });
    }
    
    public function down()
    {
        Schema::table('shohabbos_invest_profits', function($table)
        {
            $table->integer('user_id')->unsigned();
        });
    }
}
