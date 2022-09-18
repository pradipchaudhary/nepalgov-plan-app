<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFiscalYearIdToBudgetSourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('budget_sources', function (Blueprint $table) {
            $table->unsignedInteger('fiscal_year_id')->default(getCurrentFiscalYear(true)->id);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('budget_sources', function (Blueprint $table) {
            //
        });
    }
}
