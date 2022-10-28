<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutTakeCloser extends Model
{
    protected $table = 'about_take_closer';
    protected $fillable = [
        'title','image_one','image_two','image_three','button_text','arabic_title','arabic_button_text'
    ];
}
