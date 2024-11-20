<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    protected $table = 'ideas';
    protected $fillable = ['user_id','category_id','coverage_range_id','title', 'content']; 

    public function category()
    {
        return $this->belongsTo(Category::class, 'idea_id');
    }
    
    public function IdeaImage()
    {
        return $this->belongsTo(IdeaImage::class, 'idea_id');
    }
    
    public function IdeaItem()
    {
        return $this->belongsTo(IdeaItem::class, 'idea_id');
    }
    
    public function IdeaReference()
    {
        return $this->belongsTo(IdeaReference::class, 'idea_id');
    }
    
    public function CoverageRange()
    {
        return $this->belongsTo(CoverageRange::class, 'idea_id');
    }

}
