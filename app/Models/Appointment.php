<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'service_id',
        'doctor_id',
        'date',
        'time',
        'message',
    ];
}


