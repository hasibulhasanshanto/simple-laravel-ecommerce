<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function parent(){
        return $this->belongsTo(Category::class, 'parent_id');
    }
}