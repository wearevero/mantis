<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Morph extends Model
{
    use HasFactory;
    protected $table = 'morph';
    protected $guard = [
        'id'
    ];
}
