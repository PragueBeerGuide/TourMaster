<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id', 
        'event_id', 
        'num_of_pax', 
        'extra_hotel_pick_up', 
        'extra_drink_package',
        'merchandise_id',
    ];

    public function customer(){
        return $this ->BelongsTo(Customer::class);
    }

    public function merchandise(){
        return $this ->hasMany(Merchandise::class);
    }
}
