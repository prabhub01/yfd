<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Event extends Model
{
    use HasFactory;
    use Sluggable;


    protected $fillable = [
        'title',
        'slug',
        'banner',
        'image',
        'description',
        'date',
        'location',
        'display_order',
        'is_active',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
