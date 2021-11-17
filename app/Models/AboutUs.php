<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'banner',
        'description',
        'our_story_desc',
        'our_story_img',
        'our_mission_desc',
        'our_mission_img',
        'our_vision_desc',
        'our_vision_img',
        'our_objectives_desc',
        'our_objectives_img',
        'statement_of_non_descrimination',
        'disclaimer',
    ];
}
