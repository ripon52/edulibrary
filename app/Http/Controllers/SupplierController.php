<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupplierController extends Controller
{
    public function index(){
        return view('supplier.index');
    }

    public function store(Request $request){

        $this->validate($request,[
            'name'=>"required"
        ]);

        $data = $request->all();
        Supplier::query()->create($data);
        session()->flash('success','New Supplier added.');
        return redirect()->route('supplier.add');
    }

    public function status($id){
        $member = Supplier::query()->findOrFail($id);
        session()->flash('success','Member '.($member->isActive == 1 ? 'Active' : 'In Active'));
        return redirect()->route('supplier.add');
    }

    public function isActiveMeal($id){
        $member = Supplier::query()->findOrFail($id);
        $member->update(['isActiveMeal'=>($member->isActiveMeal == 1 ? 0 : 1)]);
        session()->flash('success','Member '.($member->isActiveMeal == 1 ? 'Active' : 'In Active'));
        return redirect()->route('supplier.add');
    }


    public function edit($id)
    {
        $data['supplier'] = Supplier::query()->findOrFail($id);
        return view('supplier.edit-supplier')->with($data);
    }

    public function update(Request $request,$id){

        $this->validate($request,[
            'name'=>"required"
        ]);

        $data = $request->all();
        $user = Auth::user();
        $member= Supplier::query()->findOrFail($id);
        $member->update($data);
        session()->flash('success','Supplier Updated.');
        return redirect()->route('supplier.add');
    }

    public function destroy(Request $request,$id){
        $delete =  Supplier::query()->findOrFail($id)->delete();
        session()->flash('success',$delete ? "Supplier deleted successfully" : "Supplier data available at other tables. Can't delete");
        return redirect()->back();
    }
}
