<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutAcomplishments extends Model
{
    protected $table = 'about_acomplishments';
    protected $fillable = [
        'year','image','detail','arabic_detail'
    ];
}
