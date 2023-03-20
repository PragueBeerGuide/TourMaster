<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customization extends Model
{
    use HasFactory;

    public function merchandise(){
        return $this ->hasMany(Merchandise::class);
    }
    public function booking(){
        return $this ->hasOne(Booking::class);
    }
}
