<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlmacenesSetupTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::beginTransaction();
        // Create table for storing categorias
        Schema::create('tipos_almacen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('almacenes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_almacen_id')->unsigned();
            $table->string('nombre');
            $table->timestamps();

            $table->foreign('tipo_almacen_id')->references('id')->on('tipos_almacen')
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
        Schema::dropIfExists('almacenes');
        Schema::dropIfExists('tipos_almacen');
    }
}
