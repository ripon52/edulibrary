<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';
    protected $fillable = [ 'book_id', 'user_id', 'student_id', 'star', 'comments', 'status'];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function book(){
        return $this->belongsTo(Book::class);
    }
}
