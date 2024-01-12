<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    
    public function posts()   
    {
        return $this->hasMany(Post::class);  
    }
    
    public function getBySubCategory(int $limit_count = 5)
    {
         return $this->posts()->with('subcategory')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
