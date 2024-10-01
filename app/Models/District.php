<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $fillable = [
        '_id',
        'province_id',
        'name',
        'name_en',
        'full_name',
        'full_name_en',
        'latitude',
        'longitude'
    ];

}
