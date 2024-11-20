<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IdeaReference extends Model
{
    protected $table = 'idea_reference';
    protected $fillable = ['idea_id',]; 

    public function idea()
    {
        return $this->belongsTo(Idea::class, 'idea_id');
    }
}
