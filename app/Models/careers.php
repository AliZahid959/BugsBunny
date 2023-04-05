<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class careers extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    protected $casts = [
        'required_skills' => 'array'
    ];

    // public function job_applications()
    // {
    //     return $this->hasMany(JobApplication::class);
    // }
}
