<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    // public function careers()
    // {
    //     return $this->belongsTo(careers::class, 'careers_id');
    // }
}
