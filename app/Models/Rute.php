<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rute extends Model
{
	protected $table = 'rutes';
    
    protected $casts = [
        'rute' => 'array',
        'pemberhentian' => 'array'
    ];
}
