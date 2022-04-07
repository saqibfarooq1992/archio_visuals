<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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
        'value',
        'architect',
        'short_description',
        'detail_description',
        'banner_image',
        'picture_1',
        'picture_2',
        'picture_3',
        'picture_slider_1',
        'picture_slider_2',
        'picture_slider_3',
        // 'slug',
    ];

    /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        static::created(function ($project) {
            $project->slug = $project->createSlug($project->title);
            $project->save();
        });
    }

    /** 
     * Write code on Method
     *
     * @return response()
     */
    private function createSlug($title)
    {
        if (static::whereSlug($slug = Str::slug($title))->exists()) {
            $max = static::whereTitle($title)->latest('id')->skip(1)->value('slug');

            if (is_numeric($max[-1])) {
                return preg_replace_callback('/(\d+)$/', function ($mathces) {
                    return $mathces[1] + 1;
                }, $max);
            }

            return "{$slug}-2";
        }

        return $slug;
    }
}
