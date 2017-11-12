<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductosSetupTables extends Migration
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
        Schema::create('categorias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('imagen');
            $table->timestamps();
        });

        // Create table for storing marcas
        Schema::create('marcas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('imagen');
            $table->timestamps();
        });

        // Create table for storing productos
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categoria_id')->unsigned();
            $table->integer('marca_id')->unsigned();
            $table->string('nombre');
            $table->string('imagen');
            $table->string('cod_premium')->nullable();
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categorias')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('marca_id')->references('id')->on('marcas')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        DB::commit();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
        Schema::dropIfExists('categorias');
        Schema::dropIfExists('marcas');
    }
}
