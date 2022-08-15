<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pessoa extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ["nascimento"];
    public $fillable = [
        "nome_completo",
        "sexo",
        "nascimento",
        "cpf",
        "identidade",
        "nacionalidade",
        "estado_civil",
        "nome_mae",
        "nome_pai",
        "id_usuario",
    ];
}
