<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Treatment extends Model
{
    use HasFactory;

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',

    ];

    protected $fillable = [
        'foto_treatment',
        'nama_treatment',
        'description_treatment',
        'harga_treatment',
        'slug_link',
    ];

    use SoftDeletes;

    public function scopeSearch($query, $term)
    {
        return $query->where('nama_treatment', 'LIKE', "%{$term}%")
                     ->orWhere('description_treatment', 'LIKE', "%{$term}%");
    }
}
