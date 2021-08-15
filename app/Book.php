<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Book extends Model
{
    use Notifiable;
    protected $table = 'books';
    protected $fillable = ['user_id', 'tag_id', 'publisher_id', 'writer_id', 'origin_id', 'department_id', 'bn_title', 'title', 'isbn', 'description','status'];

    public function department(){
        return $this->belongsTo(Department::class,"department_id");
    }

    public function writer(){
        return $this->belongsTo(Writer::class,"writer_id");
    }

    public function origin(){
        return $this->belongsTo(Origin::class,"origin_id");
    }

    public function publisher(){
        return $this->belongsTo(Publisher::class,"publisher_id");
    }

    public function stocks(){
        return $this->hasMany(Stock::class,"book_id");
    }

    public function bookIssued(){
        return $this->hasMany(BookIssue::class,'book_id')->where('status',0);
    }



}
