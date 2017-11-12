<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MedidasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medidas')->insert([
            [
                'nombre' => 'Piezas',
                'abreviatura' => 'Pza',
                'simbolo' => 'Pza',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'Unidades',
                'abreviatura' => 'Und',
                'simbolo' => 'Und',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'Bultos',
                'abreviatura' => 'Blt',
                'simbolo' => 'Blt',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
