<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancialCalender extends Model
{
    protected $table = 'financial_calender';
    protected $fillable = [
        'details','upload_date','pdf_upload','arabic_details','arabic_pdf_upload'
    ];
}
