<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'image',
        'icon1',
        'icon2',
        'icon3',
        'intro',
        'reason',
        'tittle_icon1',
        'isi_icon1',
        'tittle_icon2',
        'isi_icon2',
        'tittle_icon3',
        'isi_icon3',
    ];
}
