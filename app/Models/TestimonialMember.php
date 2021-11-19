<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimonialMember extends Model
{
    use HasFactory;
    // protected $table = 'testimonial_members';
    protected $fillable = [
        'image',
        'name',
        'post',
        'company',
        'location',
        'description',
        'display_order',
        'is_active'
    ];
}
