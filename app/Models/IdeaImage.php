<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IdeaImage extends Model
{
    protected $table = 'idea_images';
    protected $fillable = ['idea_id','image_path']; 

    public function idea()
    {
        return $this->belongsTo(Idea::class, 'idea_id');
    }
}
