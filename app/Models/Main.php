<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    protected $fillable=[
        'nav_logo','title','sub_title', 'bg_img','resume'
    ];
}
