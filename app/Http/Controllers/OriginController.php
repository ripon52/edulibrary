<?php

namespace App\Http\Controllers;

use App\Origin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OriginController extends Controller
{
    public function index(){
        return view('origin.index');
    }

    public function store(Request $request){

        $this->validate($request,[
            'name'=>"required"
        ]);

        $data = $request->all();
        Origin::query()->create($data);
        session()->flash('success','New origin added.');
        return redirect()->route('origin.add');
    }

    public function status($id){
        $member = Origin::query()->findOrFail($id);
        session()->flash('success','Member '.($member->isActive == 1 ? 'Active' : 'In Active'));
        return redirect()->route('origin.add');
    }

    public function isActiveMeal($id){
        $member = Origin::query()->findOrFail($id);
        $member->update(['isActiveMeal'=>($member->isActiveMeal == 1 ? 0 : 1)]);
        session()->flash('success','Member '.($member->isActiveMeal == 1 ? 'Active' : 'In Active'));
        return redirect()->route('origin.add');
    }


    public function edit($id)
    {
        $data['origin'] = Origin::query()->findOrFail($id);
        return view('origin.edit-origin')->with($data);
    }

    public function update(Request $request,$id){

        $this->validate($request,[
            'name'=>"required"
        ]);

        $data = $request->all();
        $user = Auth::user();
        $member= Origin::query()->findOrFail($id);
        $member->update($data);
        session()->flash('success','origin Updated.');
        return redirect()->route('origin.add');
    }

    public function destroy(Request $request,$id){
        $delete =  Origin::query()->findOrFail($id)->delete();
        session()->flash('success',$delete ? "origin deleted successfully" : "origin data available at other tables. Can't delete");
        return redirect()->back();
    }
}
