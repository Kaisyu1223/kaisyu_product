<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subcategory;
use App\Models\Image;


class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'liquer',
        'body',
        'subcategory_id',
        'evaluation',
        'user_id'
    ];
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this::with('subcategory')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function subcategory()
    {
       return $this->belongsTo(Subcategory::class);
    }
    
    public function images()
    {
        return $this->hasMany(Image::class);
    }
    
}
