<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Persmission extends Model
{
    use HasFactory;

    public function admins(): HasMany
    {
        return $this->hasMany(Admin::class);
    }
}
