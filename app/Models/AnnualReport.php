<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnualReport extends Model
{
    protected $table = 'annual_report';
    protected $fillable = [
        'selected_year','quarter','title','publish_date','pdf','image','arabic_title','arabic_pdf'
    ];
}
