<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use PhpParser\Node\Expr\FuncCall;

class User extends Authenticatable
{
    use Notifiable;

   
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

   
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function chats(){
        return $this->belongsToMany('App\Models\Chat');
    }

    public function messages() {
        return $this->hasMany('App\Models\Message');
    }
}
