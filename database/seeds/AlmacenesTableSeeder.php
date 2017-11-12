<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AlmacenesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('almacenes')->insert([
            [
                'tipo_almacen_id' => 1,
                'nombre' => 'Depósito',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'tipo_almacen_id' => 2,
                'nombre' => 'Tienda',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'tipo_almacen_id' => 2,
                'nombre' => 'Charcuteria',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
