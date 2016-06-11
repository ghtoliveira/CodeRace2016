<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public function tag(){
        return $this->hasOne('App\Tag');
    }

    public function categoria(){
        return $this->hasOne('App\Categoria');
    }

    public function condicao(){
        return $this->hasOne('App\Condicao');
    }
}
