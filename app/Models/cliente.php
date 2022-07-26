<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use HasFactory,SoftDeletes;
    
    protected $guarded=[];
//     protected $fillable = ['nome','Pessoa_contcto','morada','email','telefone','senha',
//     'nif','tipo','contrato','conta_corrente','limite_credito','gestor_cliente',
//     'tipo_manuntencao','estado','custo_manuntencao'

// ];

}
