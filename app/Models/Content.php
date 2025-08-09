<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    //
    protected $fillable = [
        'title', 'type', 'views', 'likes', 'duration', 'score', 'published_at', 'tags'
        
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'tags' => 'array'
    ];


    
}
