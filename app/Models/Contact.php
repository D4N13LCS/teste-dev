<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    # Permite atribuição em massa no banco
    protected $fillable = [
        'nome',
        'telefone',
        'idade',
        'cep',
        'rua',
        'numero',
        'complemento',
        'cidade',
        'estado',
    ];
}
