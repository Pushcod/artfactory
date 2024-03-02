<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profi extends Model
{
    use HasFactory;

    protected $table = 'profis';

    protected $fillable = [
        'title',
'description',
'image',
'isActive'
    ];
}
