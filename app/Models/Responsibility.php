<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsibility extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_id',
        'description',
        'sort_order',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
