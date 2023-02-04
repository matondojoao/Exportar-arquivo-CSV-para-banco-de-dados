<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projetos extends Model
{
    protected $table = 'projetos';

    protected $fillable = [
        'descricao',
        'created_at',
        'updated_at',
    ];
}
