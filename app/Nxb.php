<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nxb extends Model
{
    protected $table = "nxb";

    protected $primaryKey = "nxb_id";

    protected $fillable = ["nxb_name","active"];

    public function getBooks(){
        return $this->hasMany("App\Book","nxb_id","nxb_id");
    }
}
