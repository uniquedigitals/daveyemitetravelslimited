<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = ['first_name', 'surname', 'visa_choice', 'sex', 'dob', 'marital_status', 'nationality', 'state', 'phone', 'email', 'special_request'];
    use HasFactory;
}
