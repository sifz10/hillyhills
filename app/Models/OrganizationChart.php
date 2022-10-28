<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationChart extends Model
{
    protected $table = 'organization_chart';
    protected $fillable = [
        'image'
    ];
}
