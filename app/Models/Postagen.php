<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postagen extends Model
{
    use HasFactory;

    public function acessibilidades()
    {
        return $this->belongsTo(Acessibilidade::class);
    }

    public function estabelecimento()
    {
        return $this->belongsTo(Estabelecimento::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function comentarios()
    {
        return $this->belongsTo(Comentario::class);
    }
}
