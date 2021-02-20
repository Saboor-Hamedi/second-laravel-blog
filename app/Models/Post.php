<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $primaryKey  = 'id';
    public $timestamps = false;
    protected $fillable = ['title', 'body'];// 
    protected $hidden = ['id']; // hide attributes
    protected $visible = ['title', 'body']; // show specific attribute
    
    public function postModels(){
        return $this->hasMany(
             PostComment::class, 
             'post_id' // foreign key on comments table
        );  
    }
    public function Likes(){
        return $this->hasMany(
            Like::class, 
             'post_id'// foreign key on Likes table
        );
    }

}
