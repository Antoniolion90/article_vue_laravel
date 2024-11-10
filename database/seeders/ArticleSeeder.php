<?php

namespace Database\Seeders;

use App\Models\Article;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            Article::query()->create([
                'title' => $faker->words(5, true),
                'content' => $faker->sentence(45),
                'image' => 'storage/images/article.jpg',
                'likes' => $faker->randomNumber(3),
                'views' => $faker->randomNumber(3),
            ]);
        }
    }
}
