<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "students";
    protected $fillable = ["user_id","department_id","name"
        ,"dob"
        ,"phone"
        ,"email"
        ,"semester"
        ,"address"
        ,"parent"
        ,"std_id"
        ,"isEvening"
    ];

    public function department(){
        return $this->belongsTo(Department::class,"department_id");
    }

    public function guardian(){
        return $this->hasOne(Guardian::class,"student_id");

    }

    public function user(){
        return $this->belongsTo(User::class,"user_id");
    }

    public function issued(){
        return $this->hasMany(BookIssue::class,"student_id");
    }

    public function returnableBooks(){
        return $this->hasMany(BookIssue::class,"student_id")->where('status',0);
    }


}

