<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    public function produtos(){
        return $this->belongsToMany('App\Produto', 'ofertaProduto', 'ofertaId', 'produtoId');
    }

    public function usuario(){
        return $this->belongsTo('App\User');
    }
}
