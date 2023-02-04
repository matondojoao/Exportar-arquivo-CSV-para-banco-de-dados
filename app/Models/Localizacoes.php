<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Localizacoes extends Model
{
    protected $table = 'localizacoes';

    protected $fillable = [
        'descricao',
        'created_at',
        'updated_at',
    ];
}
