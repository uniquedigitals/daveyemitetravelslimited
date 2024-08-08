<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable = [
        'site_name',
        'site_title',
        'site_description',
        'light_logo',
        'dark_logo',
        'favicon',
        'address',
        'address_url',
        'phone_one',
        'phone_two',
        'phone_two',
        'phone_three',
        'email_one',
        'email_two'
        ];

    use HasFactory;
}
