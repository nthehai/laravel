<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGanSaoColumnToTieuChiTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tieu_chi', function (Blueprint $table) {
            $table->string('gan_sao');
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
            $table->dropColumn('gan_sao');
        });
    }
}
