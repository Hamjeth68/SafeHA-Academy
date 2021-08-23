<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Student extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $guarded = [];

    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'address',
        'profession_occupation',
        'date',
        'state',
    ];


    // public function product()
    // {
    //     return $this->hasMany(\App\Models\Course::class);
    // }
}
