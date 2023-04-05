<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteContent extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function getSiteLogoAttribute()
    {
        return asset('images/site_logo/'.$this->attributes['site_logo']);
    }

    public function getBannerImageAttribute()
    {
        return asset('images/banner_image/'.$this->attributes['banner_image']);    
    }

    public function getVideoAttribute()
    {
        return asset('images/video/'.$this->attributes['video']);    
    }
}
