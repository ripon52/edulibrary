<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{

    protected $table = 'guardians';
    protected $fillable = ["student_id","name","phone"];



}