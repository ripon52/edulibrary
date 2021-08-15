<?php

namespace App\Http\Controllers;

use App\BookIssue;
use App\Stock;
use Illuminate\Http\Request;

class BookIssueController extends Controller
{
    public function index(){
        return view("bookissue.index");
    }

    public function store(Request $request){

        $this->validate($request,[
            'book_id'=>'required',
            'student_id'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
        ]);

        $data = $request->all();
        $data['user_id'] = auth()->id();
        BookIssue::query()->create($data);
        session()->flash("success", "Book issued successfully");
        return redirect()->back();
    }

    public function edit($id){
        $data['bookissue'] = BookIssue::query()->findOrFail($id);
        return view('bookissue.edit-bookissue')->with($data);
    }

    public function update(Request $request,$id){

        $this->validate($request,[
            'book_id'=>'required',
            'student_id'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
        ]);

        $data = $request->all();
        $data['user_id'] = auth()->id();
        BookIssue::query()->findOrFail($id)->update($data);
        session()->flash("success", "Book issued updated successfully");
        return redirect()->route('bookissue.add');
    }

    public function bookReturn($id){
        $data['bookissue'] = BookIssue::query()->findOrFail($id);
        return view('bookissue.book-return')->with($data);
    }

    public function returnStore(Request $request,$id){
        $this->validate($request,[
            'submit_date'=>'required',
        ]);

        $book = BookIssue::query()->findOrFail($id);
        $data = $request->all();
        $data['status'] =1 ;
        $book->update($data);
        session()->flash("success", "Book returned successfully");
        return redirect()->route('bookissue.add');

    }

    public function returnable(){
        return view('bookissue.returnable-book');
    }

    public function bookAlert(){
        return view('bookissue.book-alert');
    }
}
