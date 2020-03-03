<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // campos que si podemos guardar
    protected $fillable = [
        'title',
        'body'
    ];
}
