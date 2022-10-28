<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EarningsAnnouncements extends Model
{
    protected $table = 'earnings_announcements';
    protected $fillable = [
        'selected_year','quarter','title','publish_date','pdf','image','arabic_title','arabic_pdf'
    ];
}
