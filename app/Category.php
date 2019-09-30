<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Model;

class Category extends Model
{
    protected $table = 'categories';


    protected $fillable = ['name'];


}
