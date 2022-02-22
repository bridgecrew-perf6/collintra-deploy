<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function path()
    {
        return "/learn/" . $this->id;
    }

    public static function search($search)
    {
        return Article::where('title', "like", "%" . $search . "%")->orWhere('body', "like", "%" . $search . "%")->limit(5)->get();
    }

    public function pieceOf($search)
    {
        if (strpos($this->title, $search) != false) {
            return "";
        }

        $body = strip_tags($this->body);
        $searchPos = strlen($search);
        $searchLength = strlen($search);

        return ($searchPos - 4 < 0 ? '' : '...') .
            substr($body, $searchPos - 4, $searchLength + 4 + 8)
            . ($searchPos + $searchLength + 8 > strlen($body) ? '' : '...');
    }
}
