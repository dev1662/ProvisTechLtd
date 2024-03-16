<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Blogs extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'id',
        'image',
        'status',
        'title',
        'meta_desc',
        'meta_keyword',
        'description',
        'slug',
        'tag_id'
        // 'tag_id',
    ];

    public function blog_tags()
    {
        return $this->hasMany(BlogTag::class, 'blog_id');
    }
}
