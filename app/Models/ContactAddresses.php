<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactAddresses extends Model
{
    protected $table = 'contact_addresses';
    protected $fillable = [
        'title','website_url','address','phone','fax','email','arabic_title','arabic_website_url','arabic_address'
    ];
}
