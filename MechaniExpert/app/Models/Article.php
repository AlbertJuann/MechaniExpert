<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function comments()
    {
        return $this->morphMany(\App\Models\Comment::class, 'commentable');
    }
}
