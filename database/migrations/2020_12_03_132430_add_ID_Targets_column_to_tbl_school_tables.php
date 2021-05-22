<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIDTargetsColumnToTblSchoolTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_school', function (Blueprint $table) {
            $table->integer('ID_Targets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_school', function (Blueprint $table) {
            $table->dropColumn('ID_Targets');
        });
    }
}
