<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Post;
use Faker\Factory as faker;
use Illuminate\Support\Str;


class Post_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();
        //
        for($i=0;$i<11;$i++){
            Post::create([
             
    "title"=> $faker->sentence($nbWords = 6, $variableNbWords = true) ,
    'slug'=>Str::slug($faker->sentence($nbWords = 6, $variableNbWords = true)),
    "content"=> $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
    'photo'=> $faker->imageUrl($width = 640, $height = 480)

]);
        }

    }
}
// Post::create([
             
//     "title"=> $faker->sentence($nbWords = 6, $variableNbWords = true) ,
//     'slug'=>Str::slug($faker->sentence($nbWords = 6, $variableNbWords = true)),
//     "content"=> $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
//     'photo'=> $faker->imageUrl($width = 640, $height = 480)

// ]);