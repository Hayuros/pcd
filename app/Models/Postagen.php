<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postagen extends Model
{
    use HasFactory;

    public function acessibilidades()
    {
        return $this->belongsToMany('App\Models\Acessibilidade');
    }

    public function estabelecimento()
    {
        return $this->hasMany('App\Models\Estabelecimento');
    }

    public function categoria()
    {
        return $this->hasMany('App\Models\Categoria');
    }
}
