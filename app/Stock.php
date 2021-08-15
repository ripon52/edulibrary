<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = "stocks";
    protected $fillable = ["user_id","book_id","qty","note","reference","supplier_id","date"];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }

    public function book(){
        return $this->belongsTo(Book::class);
    }

}
