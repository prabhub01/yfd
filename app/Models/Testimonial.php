<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'company',
        'location',
        'description',
        'display_order',
        'is_active'
    ];
}
