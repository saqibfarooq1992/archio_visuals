<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'blog_heading',
        'blog_details_heading',
        'blog_slogan',
        'title',
        'tags',
        'slug',
        'user_id',
        'short_description',
        'details_description',
        'picture',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
