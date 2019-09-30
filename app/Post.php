<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Model;

class Post extends Model
{
    protected $table = "posts";

    protected $fillable = ['title', 'description', 'content', 'image'];


}
