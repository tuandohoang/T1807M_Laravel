<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    public function show($author_id){
        $author = Author::find($author_id);
        dd($author->getChaps);
        return view("author.detail",compact("author"));
    }
}
