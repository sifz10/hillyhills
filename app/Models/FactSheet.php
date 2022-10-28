<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FactSheet extends Model
{
    protected $table = 'fact_sheet';
    protected $fillable = [
        'title','image','market','symbol','isin','industry','description','pdf','arabic_title','arabic_market','arabic_symbol','arabic_isin','arabic_industry','arabic_description'
    ];
}
