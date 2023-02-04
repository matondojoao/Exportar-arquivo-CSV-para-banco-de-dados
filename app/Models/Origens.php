<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Origens extends Model
{
    protected $table = 'origemconsig';

    protected $fillable = [
        'descricao',
        'created_at',
        'updated_at',
    ];
}
