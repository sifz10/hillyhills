<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessMainPage extends Model
{
    protected $table = 'business_main_page';
    protected $fillable = [
        'description'
    ];
}
