<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{

    protected $table = "writers";
    protected $fillable = ["bn_name","name","avatar"];
}

