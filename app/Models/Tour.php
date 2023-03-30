<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tour extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'title', 
        'description', 
        'highlights',
        'meeting_point',
        'inclusions',
        'image_link',
        'is_private'];

    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }
}
