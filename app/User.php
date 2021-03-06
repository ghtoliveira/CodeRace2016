<?php
//Teste commit 3
namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function produtos(){
        return $this->hasMany('App\Produto', 'userId');
    }

    public function endereco(){
        return $this->hasOne('App\Endereco');
    }

    public function ofertas(){
        return $this->hasMany('App\Oferta', 'userId');
    }
}
