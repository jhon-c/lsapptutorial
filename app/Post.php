<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Model part of the MVC 
    //Table name by default is Posts 
    //If you want to change you can add this code
    protected $table = 'posts';

    //Primary Key 
    public $primaryKey = 'id';

    //Timestamps
    public $timestamp = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
/*
  Post::all(); //Get all posts 
 */
