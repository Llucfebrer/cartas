<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlergicoProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alergico_producto', function (Blueprint $table) {
            $table->increments('id');

            $table->foreignId('alergico_id');
            $table->foreign('alergico_id')->references('id')->on('alergicos');

            $table->foreignId('producto_id');
            $table->foreign('producto_id')->references('id')->on('productos');

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
        Schema::dropIfExists('alergico_producto');

    }
}
