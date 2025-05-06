<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'iduser';
    protected $fillable = [
        'role',
        'fio',
        'email',
        'password',
        'birthday'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'birthday' => 'date',
    ];

    public function baskets()
    {
        return $this->hasMany(Basket::class, 'user_iduser', 'iduser');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'user_iduser', 'iduser');
    }
}