<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;

class Acessibilidade extends Model
{
    use HasFactory;

    public function acessibilidadeDaPostagem()
    {
        return $this->hasMany(Postagen::class);
    }
}
