<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'first_name',
        'middle_name',
        'surname',
        'sex',
        'marital_status',
        'dob',
        'nationality',
        'state',
        'religion',
        'employment_date',
        'job_role',
        'academic_qualification',
        'course',
        'institution',
        'year_graduated',
        'home_address',
        'phone',
        'email',
        'webmail',
        'role',
        'image'
    ];

}
