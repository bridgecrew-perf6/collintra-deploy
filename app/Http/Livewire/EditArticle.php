<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EditArticle extends Component
{
    public $article;

    protected $rules = [
        'article.body' => 'required'
    ];

    public function render()
    {
        return view('livewire.edit-article');
    }

    public function updatedArticleBody($value)
    {
        $this->article->save();
    }
}