<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendant extends Model
{
    /** @use HasFactory<\Database\Factories\AttendantFactory> */
    use HasFactory;

    protected $fillable = [
        'attendants_id',
        'first_name',
        'last_name',
        'employee_id',
        'hired_date',
        'department',
        'phone',
        'institutional_email',
        'salary',
        'skills',
    ];
}
