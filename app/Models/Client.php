<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
   use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'perfil_name',
        'cpf',
        'birthday',
        'phone',
        'gender',
        'preferences',
    ];
}
