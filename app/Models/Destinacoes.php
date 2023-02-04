<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destinacoes extends Model
{
    protected $table = 'destinouso';

    protected $fillable = [
        'descricao',
        'created_at',
        'updated_at',
    ];
}
