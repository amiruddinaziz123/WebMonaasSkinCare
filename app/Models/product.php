<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'foto_product',
        'nama_product',
        'description_product',
        'harga_product',
        'created_at',
        'update_at',
        'slug_link',
        'status_aktif'
    ];
}
