<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $table = "posts";

    protected $fillable = ['title', 'description', 'content', 'image', 'softdeletes'];


}
