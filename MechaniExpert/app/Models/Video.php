<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\VideoCategory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category(){
        return $this->belongsTo(VideoCategory::class, 'module_id');
    }

    public function comments()
    {
        return $this->morphMany(\App\Models\Comment::class, 'commentable');
    }
}
