<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OTOMobile extends Model
{
    use HasFactory;
    protected $table = 'otpcode';

    protected $fillable = [
        'name',
        'eamil',
        'phone',
        'otp',
    ];
}
