<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'property_type',
        'property_category',
        'city',
        'district',
        'commune',
        'detailAddress',
        'title',
        'description',
        'area',
        'price',
        'price_unit',
        'legal_documents',
        'num_of_bedrooms',
        'num_of_bathrooms',
        'num_of_floors',
        'house_direction',
        'balcony_direction',
        'furniture',
        'video_link',
        'name',
        'email',
        'phone',
        'package',
        'post_days',
        'start_date',
        'post_status',
        'view',
    ];

    // Relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship with PropertyImage
    public function images()
    {
        return $this->hasMany(PropertyImage::class);
    }

}
