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
        $body = "";
        $mass = rand(2, 5);
        for ($i = 0; $i < $mass; $i++) {
            //Texts
            $body .= "<p>" . $this->faker->text(rand(100, 700)) . "</p>";
            $body .= "<p>" . $this->faker->text(rand(300, 600)) . "</p>";

            //Heading and then texts
            $headingLevel = rand(2, 5);
            $body .= "<h" . $headingLevel . ">" . $this->removeEndingChar($this->faker->sentence(rand(5, 8))) . "</h" . $headingLevel . ">";
            $body .= "<p>" . $this->faker->text(rand(200, 800)) . "</p>";
            $body .= "<p>" . $this->faker->text(rand(300, 600)) . "</p>";

            //Heading and then texts
            $headingLevel = rand(2, 5);
            $body .= "<h" . $headingLevel . ">" . $this->removeEndingChar($this->faker->sentence(rand(2, 8))) . "</h" . $headingLevel . ">";
            $body .= "<p>" . $this->faker->text(rand(200, 1500)) . "</p>";
            $body .= "<p>" . $this->faker->text(rand(100, 200)) . "</p>";
        }

        $title = Str::ucfirst($this->faker->words(rand(1, 6), true));

        return [
            'title' => $title,
            'body' => $body,
            'article_id' => null
        ];
    }

    protected function removeEndingChar($string)
    {
        return substr($string, 0, strlen($string) - 1); //Remove the dot at the end

    }
}