<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'education_id',
        'grade',
        'start_date',
        'end_date',
        'is_current_degree',
        'show_on_cv',
    ];
}
