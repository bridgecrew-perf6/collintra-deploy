<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Article;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LearnTest extends TestCase
{
    public function test_learn_page_returns_200()
    {
        $response = $this->get('/learn');
        $response->assertStatus(302);
    }

    public function test_redirection_to_first_article()
    {
        $firstArticle = Article::all()->first();

        $this->get("/learn")->assertRedirect($firstArticle->path());
    }
}