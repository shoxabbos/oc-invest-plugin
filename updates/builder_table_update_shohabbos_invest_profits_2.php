<?php namespace Shohabbos\Invest\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShohabbosInvestProfits2 extends Migration
{
    public function up()
    {
        Schema::table('shohabbos_invest_profits', function($table)
        {
            $table->string('type');
            $table->integer('percent');
        });
    }
    
    public function down()
    {
        Schema::table('shohabbos_invest_profits', function($table)
        {
            $table->dropColumn('type');
            $table->dropColumn('percent');
        });
    }
}
