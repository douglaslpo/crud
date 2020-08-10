<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Atestado extends Model
{
    protected $fillable = [
        'id_user',
        'id_contrato',
        'id_unidade',
        'id_usuario',
        'paciente',
        'acompanhante',
        'obito'
    ];
}
