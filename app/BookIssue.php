<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookIssue extends Model
{
    protected $table = "book_issues";
    protected $fillable = ["user_id","book_id","student_id","start_date","end_date","submit_date","status","note","submit_note"];

    public function book(){
        return $this->belongsTo(Book::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function student(){
        return $this->belongsTo(Student::class);
    }

}
