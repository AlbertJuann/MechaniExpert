<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Videos;

class VideoCategory extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    public function videos(){
        return $this->hasMany(Videos::class);
    }
}
