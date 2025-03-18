<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
   protected $fillable = ['title', 'description', 'imageSrc', 'text'];

   public function getImageUrlAttribute()
    {
        return asset($this->imageSrc);
    }
}
