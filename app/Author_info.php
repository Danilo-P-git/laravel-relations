<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author_info extends Model
{
    protected $table = "Authors_info";

    public function author(){
        return $this->belongTo('App\Author');
    }

}
