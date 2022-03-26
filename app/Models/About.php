<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading',
        'slogan',
        'short_description',
        'detail_description',
        'background_image',
        'banner_image',
        'banner_image',
        'picture_1',
        'picture_2',
    ];
}
