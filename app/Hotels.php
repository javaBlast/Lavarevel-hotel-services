<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{
    protected $fillable=['title','descriptions','preview','price'];
}
