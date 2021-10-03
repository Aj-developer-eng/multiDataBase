<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
//use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class User2 extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

   protected $connection = 'mysql2';
    protected $table = 'users';
protected $guard = 'webz';

    
 public function get()
     {
         return $this->hasOne(product::class);
     }
}
