<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chap extends Model
{
    protected $table = "chap";
    protected $primaryKey = "chap_id";

    public $fillable = ["chap_title","book_id"];
}
