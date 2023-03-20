<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function customer(){
        return $this ->BelongsTo(Customer::class);
    }
    public function customization(){
        return $this ->hasMany(Booking::class);
    }
    public function merchandise(){
        return $this ->hasMany(Merchandise::class);
    }
}
