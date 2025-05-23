<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_name',
        'comment_text',
    ];

    public function commentable()
    {
        return $this->morphTo();
    }
}
