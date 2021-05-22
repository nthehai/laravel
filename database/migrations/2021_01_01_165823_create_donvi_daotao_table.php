<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonviDaotaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donvi_daotao', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_dv');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('phone_number');
            $table->string('dia_chi');
            $table->string('thong_tin');
            $table->integer('Tong_Diem_Danh_Gia');
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
        Schema::dropIfExists('donvi_daotao');
    }
}
