<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name'];

    public function events()
    {
        return $this->belongsToMany(Event::class, 'guide_event');
    }
}
