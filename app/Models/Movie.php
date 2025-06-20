<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'duration','genre'];

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
} 
