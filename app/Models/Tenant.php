<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $fillable = ['name', 'phone', 'image'];

    public function apartment(){
        return $this->hasMany(Apartment::class);
    }

    public function bookings(){
        return $this->hasMany(Booking::class);
    }
}
