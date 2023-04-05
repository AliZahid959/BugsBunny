<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];


    public function getServiceImageAttribute(){
        return asset('images/service/'.$this->attributes['service_image']);
    }

    
    // public function getServiceImageAttribute()
    // {
    //     return asset('storage/'. $this->attributes['service_image']);
    // }

}
