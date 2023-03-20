<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchandise extends Model
{
    use HasFactory;
    public function customization(){
        return $this ->hasMany(Customization::class);
    }
    public function booking(){
        return $this ->hasOne(Booking::class);
    }
}
