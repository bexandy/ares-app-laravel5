<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            [
                'categoria_id' => 1,
                'marca_id' => 2,
                'nombre' => 'Queso Blanco OM',
                'imagen' => 'img/default.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 2,
                'marca_id' => 2,
                'nombre' => 'Jamon Ahumado OM',
                'imagen' => 'img/default.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 3,
                'marca_id' => 3,
                'nombre' => 'Producto de Prueba',
                'imagen' => 'img/marca/thumb_tachira.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
