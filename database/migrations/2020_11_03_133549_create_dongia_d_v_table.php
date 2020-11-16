<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDongiaDVTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dongiaDV', function (Blueprint $table) {
           
            $table->bigInteger('ngay_ma')->unsigned();
            $table->bigInteger('dv_ma')->unsigned();
            $table->primary(['ngay_ma','dv_ma']);
            $table->Integer('gia_tien')->nullable();
            $table->foreign('ngay_ma')->references('ngay_ma')->on('ngay')->onDelete('cascade');
            $table->foreign('dv_ma')->references('dv_ma')->on('dichvu')->onDelete('cascade');
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
        Schema::dropIfExists('doniaDV');
    }
}
