<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareersApplication extends Model
{
    protected $table = 'careers_application';
    protected $fillable = [
        'full_name','email','mobile','country','department','resume','experience','cover_letter','message'
    ];
}
