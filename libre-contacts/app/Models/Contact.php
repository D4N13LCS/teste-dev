<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'Nome', 
        'Telefone', 
        'Idade',
        'CEP',
        'Rua',
        'Numero',
        'Complemento',
        'Cidade',
        'Estado'
    ];
}
