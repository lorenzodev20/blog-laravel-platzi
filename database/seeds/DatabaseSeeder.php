<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        /* App\User::created([
            'name' => 'Lorenzo Rojo',
            'email' => 'lorenzodev2020@gmail.com',
            'password' => bcrypt('123456')
        ]); */

        factory(App\User::class,1)->create();
        factory(App\Post::class,24)->create();
    }
}