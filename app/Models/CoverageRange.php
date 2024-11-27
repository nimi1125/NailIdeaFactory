<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoverageRange extends Model
{
    protected $table = 'coverage_ranges';
    protected $fillable = ['id','status']; 

    public function idea()
    {
        return $this->belongsTo(Idea::class, 'coverage_range_id');
    }
}
