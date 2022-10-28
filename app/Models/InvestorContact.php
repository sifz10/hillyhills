<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestorContact extends Model
{
    protected $table = 'investor_contact';
    protected $fillable = [
        'title','image','overview','phone','email','arabic_title','arabic_overview'
    ];
}
