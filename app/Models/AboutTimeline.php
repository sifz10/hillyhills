<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutTimeline extends Model
{
    protected $table = 'about_timeline';
    protected $fillable = [
        'title','short','arabic_title','arabic_short','status'
    ];
}
