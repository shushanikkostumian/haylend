<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Account extends Model
{
    use Notifiable;

    protected $fillable = [
        'first_name', 'last_name', 'address',  'email', 'password', 'role_id',
    ];
}
