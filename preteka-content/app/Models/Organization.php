<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;
    public function events()
    {
        return $this->belongsToMany(event::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
