<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadershipTeam extends Model
{
    protected $table = 'leadership_team';
    protected $fillable = [
        'name','position','image','description','arabic_name','arabic_position','arabic_description'
    ];
}
