<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutPage extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function getAboutOurAgencyImageAttribute()
    {
        return asset('images/about_our_agency_image/'.$this->attributes['about_our_agency_image']);
    }

    public function getWhyChooseUsImageAttribute()
    {
        return asset('images/why_choose_us_image/'.$this->attributes['why_choose_us_image']);
    }
}
