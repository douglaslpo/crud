<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    protected $fillable = [
        'id_contrato',
        'email',
        'municipio',
        'estado',
        'logomarca',
        'tipo',
        'status'
    ];
}
