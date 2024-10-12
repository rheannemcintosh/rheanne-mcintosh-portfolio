<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfessionalSummary extends Model
{
    use HasFactory;

    protected $fillable = [
        'professional_summary_text'
    ];
}
