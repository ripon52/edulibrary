<?php

namespace App\Http\Controllers;

use App\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index(){
        return view("stock.index");
    }

    public function store(Request $request){
        $this->validate($request,[
            'book_id'=>'required',
            'supplier_id'=>'required',
            'qty'=>'required',
            'date'=>'required',
        ]);

        $data = $request->all();
        $data['user_id'] = auth()->id();
        Stock::query()->create($data);
        session()->flash("success", "Stock in successfully");
        return redirect()->back();
    }

    public function edit($id){
        $data['stock'] = Stock::query()->findOrFail($id);
        return view('stock.edit-stock')->with($data);
    }

    public function update(Request $request,$id){

        $this->validate($request,[
            'book_id'=>'required',
            'supplier_id'=>'required',
            'qty'=>'required',
            'date'=>'required',
        ]);

        $data = $request->all();
        $data['user_id'] = auth()->id();
        Stock::query()->findOrFail($id)->update($data);
        session()->flash("success", "Stock in updated successfully");
        return redirect()->route('stock.add');
    }

    public function show(){
        return view('stock.stock-show');
    }

}
