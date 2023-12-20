<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this::with('subcategory')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function subcategory()
    {
       return $this->belongsTo(Subcategory::class);
    }
    
    protected $fillable = [
        'title',
        'body',
        'category_id'
    ];
    
}
