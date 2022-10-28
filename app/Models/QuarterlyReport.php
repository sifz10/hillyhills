<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuarterlyReport extends Model
{
    protected $table = 'quarterly_report';
    protected $fillable = [
        'selected_year','title','publish_date','pdf','image','quarter','arabic_title','arabic_pdf'
    ];
}
