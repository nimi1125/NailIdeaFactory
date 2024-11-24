<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public function ideas()
    {
        return $this->hasMany(Idea::class, 'category_id');
    }
}
