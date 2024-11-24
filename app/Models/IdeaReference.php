<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IdeaReference extends Model
{
    protected $table = 'idea_references';
    protected $fillable = ['idea_id','url','content']; 

    public function idea()
    {
        return $this->belongsTo(Idea::class, 'idea_id');
    }
}
