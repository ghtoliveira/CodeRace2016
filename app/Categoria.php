<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function ofertas(){
        return $this->belongsToMany('App\Oferta', 'ofertaCategoria', 'categoriaId', 'ofertaId');
    }
}
