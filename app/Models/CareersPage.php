<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareersPage extends Model
{
    protected $table = 'careers_page';
    protected $fillable = [
        'overview_title','title','description','form_title','form_sub_description','background_image'
    ];
}
