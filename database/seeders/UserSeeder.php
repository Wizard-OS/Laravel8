<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creando un User Admin
        User::create([
            'name' => 'Osva',
            'email' => 'osva@gmail.com',
            'password' => bcrypt('12345678'),
        ])->assignRole('Admin');

        //Generando 9 Users
        User::factory(9)->create();
    }
}
