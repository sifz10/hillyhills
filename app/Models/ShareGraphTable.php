<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShareGraphTable extends Model
{
    protected $table = 'share_graph_table';
    protected $fillable = [
        'title','last','high','low','average','percent','bid','ask','valume','arabic_title'
    ];
}
