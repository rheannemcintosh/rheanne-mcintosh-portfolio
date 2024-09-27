<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'institution',
        'description',
        'start_date',
        'end_date',
        'is_current_education',
        'is_remote_education',
        'my_location',
        'education_location',
        'sort_order',
        'show_on_cv',
    ];

    public function degrees()
    {
        return $this->hasOne(Degree::class);
    }
}
