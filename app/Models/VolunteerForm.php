<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VolunteerForm extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'email',
        'primary_contact',
        'secondary_contact',
        'subject',
        'duration',
        'reason'
    ];
}
