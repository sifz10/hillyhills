<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterAbout extends Model
{
    protected $table = 'footer_about';
    protected $fillable = [
        'footer_about','footer_logo','arabic_footer_about'
    ];
}
