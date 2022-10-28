<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportsPresentations extends Model
{
    protected $table = 'reports_presentations';
    protected $fillable = [
        'selected_year','title','publish_date','pdf','image','quarter','arabic_title','arabic_pdf'
    ];
}
