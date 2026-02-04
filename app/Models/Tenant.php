<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Tenant extends Model
{
    use HasApiTokens;
    protected $fillable = ['name', 'phone', 'password', 'image'];
    protected $hidden = ['password', 'remember_token'];

    public function apartment(){
        return $this->hasMany(Apartment::class);
    }

    public function bookings(){
        return $this->hasMany(Booking::class);
    }
}
