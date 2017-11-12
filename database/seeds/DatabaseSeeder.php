<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CategoriasTableSeeder::class);
        $this->call(MarcasTableSeeder::class);
        $this->call(MedidasTableSeeder::class);
        $this->call(ProductosTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(TiposAlmacenTableSeeder::class);
        $this->call(AlmacenesTableSeeder::class);
        $this->call(TiposLoteTableSeeder::class);
        $this->call(LotesTableSeeder::class);
    }
}
