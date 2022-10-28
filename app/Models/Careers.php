<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Careers extends Model
{
    protected $table = 'careers';
    protected $fillable = [
        'title','short_description','description','career_image','arabic_title','arabic_short_description','arabic_description'
    ];
}
