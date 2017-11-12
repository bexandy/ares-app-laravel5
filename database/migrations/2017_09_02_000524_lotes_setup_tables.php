<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LotesSetupTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_lote', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('lotes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo')->unique();
            $table->integer('tipo_lote_id')->unsigned();
            $table->timestamps();

            $table->foreign('tipo_lote_id')->references('id')->on('tipos_lote')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('detalles_lote', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lote_id')->unsigned();
            $table->integer('producto_id')->unsigned();
            $table->double('costo');
            $table->date('vencimiento');
            $table->timestamps();

            $table->foreign('lote_id')->references('id')->on('lotes')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('producto_id')->references('id')->on('productos')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalles_lote');
        Schema::dropIfExists('lotes');
        Schema::dropIfExists('tipos_lote');
    }
}
