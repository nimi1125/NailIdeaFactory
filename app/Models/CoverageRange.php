<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoverageRange extends Model
{
<<<<<<< HEAD
    public function ideas()
    {
        return $this->hasMany(Idea::class, 'coverage_range_id');
=======
    protected $table = 'coverage_ranges';
    protected $fillable = ['id','status']; 

    public function idea()
    {
        return $this->belongsTo(Idea::class, 'coverage_range_id');
>>>>>>> 1c01893cb6dd07d1cc7bea6d71d6fa9d07c21c4f
    }
}
