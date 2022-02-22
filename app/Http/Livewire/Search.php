<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class Search extends Component
{
    public $search = "";

    protected $articles;

    public function render()
    {
        $this->articles = Article::search($this->search);
        return view('livewire.search', ['articles' => $this->articles]);
    }
}
