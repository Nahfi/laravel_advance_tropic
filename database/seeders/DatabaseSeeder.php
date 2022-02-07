<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\User_seeder;
use Database\Seeders\Post_Seeder;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Role::factory(10)->create();


        $this->call([
            User_seeder::class,
            Post_Seeder::class
        ]);


       
    }
}
