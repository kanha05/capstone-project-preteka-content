<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $fillable = [
        'comment_text',
    ];
    public function events(){
        return $this->belongsTo(event::class);
    }
    public function children() {

        return $this->hasMany(Comment::class, 'parent_id', 'children_id');

    }
}
