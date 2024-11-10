<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contato extends Model
{
    public $timestamps = false;

    use HasFactory;
    
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
