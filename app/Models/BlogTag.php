<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class BlogTag extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $fillable =[
        'id',
        // 'blog',
        'tag_id',
        'blog_id'
    ];
    public function blogs()
    {
        return $this->belongsToMany(Blogs::class);
    }
}
