<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
       protected $table = 'book';
       protected $guarded = [ 'id', 'created_at', 'updated_at' ];
}
