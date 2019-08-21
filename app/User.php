<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    //The attributes that are mass assignable.
    protected $fillable = [
        'name', 'email', 'password',
    ];


    //The attributes that should be hidden for arrays.
    protected $hidden = [
        'password', 'remember_token',
    ];


    //The attributes that should be cast to native types.
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function articles(){

        return $this->hasMany(Article::class);

    }

    public function comments(){

        return $this->hasMany(Comment::class);

    }
}
