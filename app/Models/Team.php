<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function getTeamImageAttribute()
    {
        return asset('images/team_image/'.$this->attributes['team_image']);    
    }
}
