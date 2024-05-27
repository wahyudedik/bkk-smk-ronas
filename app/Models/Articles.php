<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Articles extends Model
{
    use HasFactory; 


    protected $fillable = [
        'title', 'body', 'slug', 'image', 'user_id', 'category_id', 'tag_id', 'is_published'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tags::class);
    }
}
