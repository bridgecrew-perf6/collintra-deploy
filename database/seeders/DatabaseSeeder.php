<?php

namespace Database\Seeders;

use App\Models\Article;
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
        // \App\Models\User::factory(10)->create();
        $article1 = Article::factory()->create();
        Article::factory(8)->create(['article_id' => $article1->id]);

        $article2 = Article::factory()->create();
        Article::factory(15)->create(['article_id' => $article2->id]);

        $article3 = Article::factory()->create();
        Article::factory(4)->create(['article_id' => $article3->id]);
    }
}