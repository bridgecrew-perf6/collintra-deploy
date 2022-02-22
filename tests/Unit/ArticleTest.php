<?php

namespace Tests\Unit;

use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
//use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    //Tests for the search
    public function test_articles_are_searcheable_by_title()
    {
        Article::factory(50)->create(['title' => $this->faker->text(5) . " Helloworld"]);

        $articles = Article::search("Helloworld");
        $this->assertStringContainsString("Helloworld", $articles->pluck('title'));
    }

    public function test_articles_are_searcheable_by_body()
    {
        Article::factory(50)->create(['body' => $this->faker->paragraphs(12, true) . " Helloworld"]);

        $articles = Article::search("Helloworld");
        $this->assertStringContainsString("Helloworld", $articles->pluck('body'));
    }

    //Tests for the pieceOf() returned string
    //No piece of when title contains the searched value
    public function test_piece_of_search_is_empty_when_search_is_found_in_title()
    {
        $article = Article::make([
            'title' => "Short-term strategy",
            'body' => "<h2>Introduction</h2>
                       Strategy is key. but it can be hard to define. that's a term."
        ]);
        $search = "term";

        $this->assertEquals("", $article->pieceOf($search));
    }

    public function test_piece_of_contains_search()
    {
        $article = Article::make([
            'title' => "Story short",
            'body' => "term"
        ]);
        $search = "term";

        $this->assertEquals("term", $article->pieceOf($search));
    }

    public function test_piece_of_contains_search_with_one_word_before()
    {
        $article = Article::make([
            'title' => "Story short",
            'body' => "we were friends in good term"
        ]);
        $search = "term";

        $this->assertEquals("... good term", $article->pieceOf($search));
    }

}
