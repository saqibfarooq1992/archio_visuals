<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'slider_title',
        'slogan',
        'title',
        'client',
        'location',
        'project_name',
        'surface_area',
        'year_completed',
        'gallery',
        'value',
        'architect',
        'short_description',
        'detail_description',
        'banner_image',
        'picture_1',
        'picture_2',
        'picture_3',
        'gallery',
    ];
}
