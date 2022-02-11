<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    use WithFaker;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => Str::ucfirst($this->faker->word()),
            'body' => "<p>" . implode("</p>
            <p>", $this->faker->paragraphs(15)) . "</p>",
            'article_id' => null
        ];
    }
}