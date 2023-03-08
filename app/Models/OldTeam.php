<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class OldTeam extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'tenure_year',
        'full_name',
        'phone',
        'email',
        'phone',
        'show_phone',
        'show_email',
        'designation',
        'description',
        'photo',
        'fb_link',
        'insta_link',
        'linkedin_link',
        'twitter_link',
        'website_link',
        'display_order',
        'is_active',
        'created_by',
        'updated_by',
    ];

    public function createdBy()
    {
        return $this->belongsTo(Admin::class, 'created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Admin::class, 'updated_by');
    }
}