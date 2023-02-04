<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Procedimentos extends Model
{
    protected $table = 'procedimentos';

    protected $fillable = [
        'descricao',
        'created_at',
        'updated_at',
    ];
}
