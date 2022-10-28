<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurBusinesses extends Model
{
    protected $table = 'our_businesses';
    protected $fillable = [
        'title','slug','short_description','description','background_image','logo_image','website_link','address','phone','email','timeline_heading','timeline_description','arabic_title','arabic_slug','arabic_short_description','arabic_description','arabic_website_link','arabic_address','arabic_phone','arabic_timeline_heading','arabic_timeline_description'
    ];
}