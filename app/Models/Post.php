<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //need to introduce the table that will be called, which will be possible by the Eloquent use

    protected $table = 'posts'; //table name

    protected $fillable = [ //an array of fields that we'll be inserting
        'subject',
        'message'
    ]; // id is auto-increment, so it's not included in this array
}
