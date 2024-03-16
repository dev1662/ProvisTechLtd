<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $table = 'tags';
    protected $fillable =[
        'id',
        'name',
        'url',
        'blog_id'
    ];
    public function blog_tag()
    {
        return $this->belongsToMany(Blog::class, BlogTag::class, 'tag_id', 'blog_id');
    }
  
}
