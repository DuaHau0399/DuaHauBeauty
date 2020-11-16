<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDongiaSPTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dongiaSP', function (Blueprint $table) {
            $table->bigInteger('ngay_ma')->unsigned();
            $table->bigInteger('sp_ma')->unsigned();
            $table->primary(['ngay_ma','sp_ma']);
            $table->Integer('gia_tien')->nullable();
            $table->foreign('ngay_ma')->references('ngay_ma')->on('ngay')->onDelete('cascade');
            $table->foreign('sp_ma')->references('sp_ma')->on('sanpham')->onDelete('cascade');
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
        Schema::dropIfExists('doniaSP');
    }
}
