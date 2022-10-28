<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $table = 'contact_us';
    protected $fillable = [
        'title','contact_us_title','contact_us_overview','contact_us_phone','contact_us_fax','contact_us_email','contact_us_address','arabic_title','arabic_contact_us_title','arabic_contact_us_overview','arabic_contact_us_address'
    ];
}
