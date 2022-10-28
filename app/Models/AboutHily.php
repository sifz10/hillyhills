<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutHily extends Model
{
    protected $table = 'about_hily';
    protected $fillable = [
        'overview_title','title','description_one','description_two','experience','background_image','image','acomplishments_title','arabic_overview_title','arabic_title','arabic_description_one','arabic_description_two','arabic_experience','arabic_acomplishments_title'
    ];
}
