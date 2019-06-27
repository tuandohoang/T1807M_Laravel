<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = "book";

    protected $primaryKey = "book_id";

    protected $fillable = ["book_name","author_id","nxb_id","qty","active"];

   // public $timestamps = false;

    public function getAuthor(){
        return $this->belongsTo("App\Author","author_id","author_id");
    }

    public function getNxb(){
        return $this->belongsTo("App\Nxb","nxb_id","nxb_id");
    }

    public function getUsers(){
        return $this->belongsToMany("App\User","user_book","book_id","user_id");
    }
}
