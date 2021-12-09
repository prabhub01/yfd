<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'banner',
        'title',
        'slug',
        'image',
        'excerpt',
        'description',
        'date',
        'location',
        'writer',
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