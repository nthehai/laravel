<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTieuChiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tieu_chi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tc_1_1');
            $table->integer('tc_1_2');
            $table->integer('tc_1_3');
            $table->integer('tc_2_1');
            $table->integer('tc_2_2');
            $table->integer('tc_2_3');
            $table->integer('tc_2_4');
            $table->integer('tc_2_5');
            $table->integer('tc_2_6');
            $table->integer('tc_2_7');
            $table->integer('tc_2_8');
            $table->integer('tc_2_9');
            $table->integer('tc_2_10');
            $table->integer('tc_2_11');
            $table->integer('tc_3_1');
            $table->integer('tc_3_2');
            $table->integer('tc_3_3');
            $table->integer('tc_3_4');
            $table->integer('tc_3_5');
            $table->integer('tc_4_1');
            $table->integer('tc_4_2');
            $table->integer('tc_4_3');
            $table->integer('tc_4_4');
            $table->integer('tc_4_5');
            $table->integer('tc_4_6');
            $table->integer('tc_5_1');
            $table->integer('tc_5_2');
            $table->integer('tc_5_3');
            $table->integer('tc_5_4');
            $table->integer('tc_5_5');
            $table->integer('tc_5_6');
            $table->integer('tc_5_7');
            $table->integer('tc_5_8');
            $table->integer('tc_5_9');
            $table->integer('tc_5_10');
            $table->integer('tc_6_1');
            $table->integer('tc_6_2');
            $table->integer('tc_6_3');
            $table->integer('tc_6_4');
            $table->integer('tc_6_5');
            $table->integer('tc_6_6');
            $table->integer('tc_6_7');
            $table->integer('tc_6_8');
            $table->integer('tc_6_9');
            $table->integer('tc_6_10');
            $table->integer('tc_7_1');
            $table->integer('tc_7_2');
            $table->integer('tc_7_3');
            $table->integer('tc_7_4');
            $table->integer('tc_7_5');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tieu_chi');
    }
}
