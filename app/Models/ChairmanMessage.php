<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChairmanMessage extends Model
{
    protected $table = 'chairman_message';
    protected $fillable = [
        'name','position','image','description','sign_image','arabic_name','arabic_position','arabic_description'
    ];
}
