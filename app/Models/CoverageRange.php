<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoverageRange extends Model
{
    public function ideas()
    {
        return $this->hasMany(Idea::class, 'coverage_range_id');
    }
}
