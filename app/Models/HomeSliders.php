<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSliders extends Model
{
    protected $table = 'home_sliders';
    protected $fillable = [
        'title','description','slider_image','arabic_title','arabic_description','status'
    ];
}
