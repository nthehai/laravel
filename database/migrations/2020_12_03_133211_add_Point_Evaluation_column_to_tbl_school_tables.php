<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPointEvaluationColumnToTblSchoolTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_school', function (Blueprint $table) {
            $table->integer('Point_Evaluation');
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
            $table->dropColumn('Point_Evaluation');
        });
    }
}
