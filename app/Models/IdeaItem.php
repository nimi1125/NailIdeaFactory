<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IdeaItem extends Model
{
    protected $table = 'idea_items';
    protected $fillable = ['idea_id','url', 'content']; 

    public function idea()
    {
        return $this->belongsTo(Idea::class, 'idea_id');
    }
}
