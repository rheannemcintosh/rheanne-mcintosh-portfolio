<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningPlatform extends Model
{
    protected $fillable = [
        'name',
        'url',
    ];
}
