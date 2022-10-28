<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $table = 'blogs';
    protected $fillable = [
        'title','description','blog_image','arabic_title','arabic_description','status','publish_date'
    ];
}
