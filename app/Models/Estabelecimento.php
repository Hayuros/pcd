<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estabelecimento extends Model
{
    use HasFactory;

    public function postagem()
    {
        return $this->belongsTo('App\Models\Postagen');
    }
}
