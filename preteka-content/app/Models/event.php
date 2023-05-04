<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;

    protected $table = 'events';
    protected $fillable = array('user_id','event_poster','title','description','date_event','time_start','time_end','location','agenda','price');
    public function user_event() {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function comments()
    {
        return $this->belongsToMany(Comment::class);
    }
}
