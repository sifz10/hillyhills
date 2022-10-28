<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardOfDirectors extends Model
{
    protected $table = 'board_of_directors';
    protected $fillable = [
        'name','position','image','description','arabic_name','arabic_position','arabic_description'
    ];
}
