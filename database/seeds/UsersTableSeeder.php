<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin Ares',
                'username' => 'admin',
                'email' => 'admin@example.com',
                'imagen' => 'img/usuario/admin.png',
                'password' => bcrypt('admin'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Bexandy Rodriguez',
                'username' => 'brodriguez',
                'email' => 'bexandy@gmail.com',
                'imagen' => 'img/usuario/brodriguez.png',
                'password' => bcrypt('p3lk4x'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Jhon Doe',
                'username' => 'jhondoe',
                'email' => 'jhon@example.com',
                'imagen' => 'img/usuario/default.png',
                'password' => bcrypt('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
