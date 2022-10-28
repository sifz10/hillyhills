<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutVisionSection extends Model
{
    protected $table = 'about_vision_section';
    protected $fillable = [
        'title','sub_title','detail','arabic_title','arabic_sub_title','arabic_detail'
    ];
}
