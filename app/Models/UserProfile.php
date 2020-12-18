<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = [
        'blood_group',
        'user_id',
        'department_id',
        'shift',
        'intake',
        'university_id',
        'mobile',
        'blood_group',
        'reference',
        'company_name',
        'job_position',
    ];
}
