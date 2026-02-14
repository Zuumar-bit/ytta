<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'bio',
        'photo',
        'instagram',
        'linkedin',
        'sort_order',
    ];

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order');
    }
}
