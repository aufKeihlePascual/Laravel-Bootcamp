<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //need to introduce the table that will be called, which will be possible by the Eloquent use

    protected $table = 'posts'; //table name
    
    //an array of fields that we'll be inserting
    protected $fillable = [ 
        'subject',
        'message'
    ]; // id is auto-increment, so it's not included in this array
}
