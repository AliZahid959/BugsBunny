<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function getWorkImageAttribute()
    {
        return asset('images/work_image/'.$this->attributes['work_image']);
    }
}
