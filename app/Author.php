<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function info(){
        return $this->hasOne('App\Author_info');
    }

    public function comic(){
        return $this->hasMany('App\Comic');
    }
}
