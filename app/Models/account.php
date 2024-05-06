<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'username_user',
        'email_user',
        'password_user',
        'no_telp_user',
        'slug_link',
        'created_at',
        'updated_at',
    ];
}
