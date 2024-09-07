<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'employer_id',
        'start_date',
        'end_date',
        'is_current_role',
    ];
    
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
