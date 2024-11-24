<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    protected $table = 'ideas';

    
    protected $fillable = ['user_id', 'category_id', 'coverage_range_id', 'title', 'content']; 

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    
    public function ideaImages()
    {
        return $this->hasMany(IdeaImage::class, 'idea_id', 'id');
    }

    
    public function ideaItems()
    {
        return $this->hasMany(IdeaItem::class, 'idea_id', 'id');
    }


    public function ideaReferences()
    {
        return $this->hasMany(IdeaReference::class, 'idea_id', 'id');
    }

    
    public function coverageRange()
    {
        return $this->belongsTo(CoverageRange::class, 'coverage_range_id', 'id');
    }

    public function firstImage()
    {
        return $this->hasOne(IdeaImage::class, 'idea_id')->oldestOfMany();
    }

}
