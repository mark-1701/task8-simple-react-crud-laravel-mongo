<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Notifications\Notifiable;
// use Laravel\Sanctum\HasApiTokens;
use Jenssegers\Mongodb\Eloquent\Model;
class User extends Model
{
    use HasFactory;
    protected $connnection = 'mongodb';
    protected $collection = 'users_collection';
    protected $guarded = [];
}
