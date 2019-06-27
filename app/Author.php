<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = "author";

    protected $primaryKey = "author_id";

    protected $fillable = ["author_name","active"];


    public function getBooks(){
        return $this->hasMany("App\Book","author_id","author_id");
    }

    public function getOneBook(){
        return $this->hasOne("App\Book","author_id","author_id");
    }

    public function getChaps(){
        return $this->hasManyThrough("App\Chap","App\Book","author_id","book_id","author_id","book_id");
    }
}
