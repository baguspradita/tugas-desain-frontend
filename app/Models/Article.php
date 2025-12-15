<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'image_path',
        'is_active',
        'published_at',
        'display_order',
    ];

    protected $casts = [
        'is_active' => 'bool',
        'published_at' => 'datetime',
    ];
}
