<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    use HasFactory;
    protected $table = 'post_comments';
    protected $primaryKey = 'id';
    // A comment belongs to the post 
    public function post(){
        return $this->belongsTo(Post::class);
    }
}
