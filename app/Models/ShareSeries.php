<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShareSeries extends Model
{
    protected $table = 'share_series';
    protected $fillable = [
        'title','series_title','company_name','image','series_image','arabic_title','arabic_series_title','arabic_company_name'
    ];
}
