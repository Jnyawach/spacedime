<?php

namespace App;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;


class Portfolio extends Model
{
    //
    use HasSlug;
   
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
    protected $fillable=[
        'title',
        'description',
        'path',
        'is_active'
    ];
}
