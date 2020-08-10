<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{

    protected $fillable = [
        'cnpj',
        'id_user',
        'razao_social',
        'nome_fantasia',
        'email',
        'logomarca',
        'status'
    ];
}
