<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class signups extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = ['username',  'password', 'email', 'phone',];
}
