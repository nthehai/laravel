<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTongTieuChiColumnToTieuChiTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tieu_chi', function (Blueprint $table) {
            $table->integer('Standard_1');
            $table->integer('Standard_2');
            $table->integer('Standard_3');
            $table->integer('Standard_4');
            $table->integer('Standard_5');
            $table->integer('Standard_6');
            $table->integer('Standard_7');
            $table->integer('Tong_Diem');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tieu_chi', function (Blueprint $table) {
            $table->dropColumn('Standard_1');
            $table->dropColumn('Standard_2');
            $table->dropColumn('Standard_3');
            $table->dropColumn('Standard_4');
            $table->dropColumn('Standard_5');
            $table->dropColumn('Standard_6');
            $table->dropColumn('Standard_7');
            $table->dropColumn('Tong_Diem');
        });
    }
}
