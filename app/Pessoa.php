<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable=[


        'nome',
        'cpf',
        'telefone',
        'cep',
        'uf',
        'cidade',
        'bairro',
        'logradouro',
        'created_at',


    ];
}
