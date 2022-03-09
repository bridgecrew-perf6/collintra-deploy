<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Article;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArticleTest extends TestCase
{
    use RefreshDatabase;
    public function test_article_edit_page_works()
    {
        Article::factory(5)->create();
        $article = Article::first();

        $response = $this->get('/learn/' . $article->id . "/edit");

        $response->assertStatus(200);
    }
}