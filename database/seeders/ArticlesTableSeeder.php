<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\User;
use Tymon\JWTAuth\Facades\JWTAuth;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::truncate();

        $faker = \Faker\Factory::create();

        $users =User::all();

        foreach ($users as $user) {
            // iniciamos sesión con este usuario
            JWTAuth::attempt(['email' => $user->email, 'password' => '123456']);

            
            for ($i=0; $i <5 ; $i++) {
                Article::create([
                    'title'=>$faker->sentence,
                    'body'=>$faker->paragraph,
                ]);
            }
        }
     
    }
}
