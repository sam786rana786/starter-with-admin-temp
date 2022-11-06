<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'student_id', 'email', 'class', 'section', 'year_passing', 'gender',
        'status', 'landline', 'mobile', 'location', 'organization', 'qualification',
        'specialization', 'institute', 'is_approved', 'photo'
    ];
}
