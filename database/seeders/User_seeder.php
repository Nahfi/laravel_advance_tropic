<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class User_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $x=new User();
        $x->name="munna";
        $x->email="nafiz0khan1@gmail.com";
        $x->password=Hash::make("1234");
        $x->save();
    }
}
