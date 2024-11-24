<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoverageRange extends Model
{
    protected $table = 'coverage_ranges';
    protected $fillable = ['idea_id','status']; 

    public function idea()
    {
        return $this->belongsTo(Idea::class, 'idea_id');
    }
}
