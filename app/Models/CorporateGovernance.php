<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorporateGovernance extends Model
{
    protected $table = 'corporate_governance';
    protected $fillable = [
        'selected_year','title','publish_date','pdf','image','quarter','arabic_title','arabic_pdf'
    ];
}
