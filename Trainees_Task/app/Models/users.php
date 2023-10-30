<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = ['username',  'password', 'email'];

    public function reservations()
    {
        return $this->hasMany(reservation::class);
    }
}
