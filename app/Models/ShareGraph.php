<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShareGraph extends Model
{
    protected $table = 'share_graph';
    protected $fillable = [
        'title','image','arabic_title'
    ];
}
