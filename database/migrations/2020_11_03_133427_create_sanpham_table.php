<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->bigIncrements('sp_ma');
            $table->string('sp_ten',50);
            $table->bigInteger('th_ma')->unsigned();
            $table->string('sp_thongtin')->nullable();
            $table->string('sp_trangthai')->nullable();
            $table->foreign('th_ma')->references('th_ma')->on('thuonghieu')->onDelete('cascade');
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
        Schema::dropIfExists('sanpham');
    }
}
