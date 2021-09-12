<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $faker = \Faker\Factory::create();

        //crear password
        $password=Hash::make('123456');

        User::create([
            'name'=>'Administrador',
            'email'=>'admin@prueba.com',
            'password'=>$password,
        ]);

        for ($i=0; $i <10 ; $i++) {
             
            User::create([
                'name'=>$faker->name,
                'email'=>$faker->email,
                'password'=>$password,
            ]);
        }
    }
}
