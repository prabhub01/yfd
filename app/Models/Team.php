<?php

namespace App\Models;

use App\Traits\ModelEventLogger;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Route;
use PhpOffice\PhpSpreadsheet\Calculation\Category;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Team extends Model
{
    use SoftDeletes;
    protected $table = 'teams';

    protected $fillable = [
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
