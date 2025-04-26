<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Video;

class VideoCategory extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'thumbnail', 'slug'];

    public function videos(){
        return $this->hasMany(Video::class, 'module_id');
    }

    protected static function boot() {
        parent::boot();

        static::deleting(function($category) {
            $category->videos()->delete();
        });
    }
}
