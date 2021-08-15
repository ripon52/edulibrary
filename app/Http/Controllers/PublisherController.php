<?php

namespace App\Http\Controllers;

use App\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublisherController extends Controller
{

    public function index(){
        return view('publisher.index');
    }

    public function store(Request $request){

        $this->validate($request,[
            'name'=>"required"
        ]);

        $data = $request->all();
        Publisher::query()->create($data);
        session()->flash('success','New Publisher added.');
        return redirect()->route('publisher.add');
    }

    public function status($id){
        $member = Publisher::query()->findOrFail($id);
        session()->flash('success','Member '.($member->isActive == 1 ? 'Active' : 'In Active'));
        return redirect()->route('publisher.add');
    }

    public function isActiveMeal($id){
        $member = Publisher::query()->findOrFail($id);
        $member->update(['isActiveMeal'=>($member->isActiveMeal == 1 ? 0 : 1)]);
        session()->flash('success','Member '.($member->isActiveMeal == 1 ? 'Active' : 'In Active'));
        return redirect()->route('publisher.add');
    }


    public function edit($id)
    {
        $data['publisher'] = Publisher::query()->findOrFail($id);
        return view('publisher.edit-publisher')->with($data);
    }

    public function update(Request $request,$id){

        $this->validate($request,[
            'name'=>"required"
        ]);

        $data = $request->all();
        $user = Auth::user();
        $member= Publisher::query()->findOrFail($id);
        $member->update($data);
        session()->flash('success','Publisher Updated.');
        return redirect()->route('publisher.add');
    }

    public function destroy(Request $request,$id){
        $delete =  Publisher::query()->findOrFail($id)->delete();
        session()->flash('success',$delete ? "Publisher deleted successfully" : "Publisher data available at other tables. Can't delete");
        return redirect()->back();
    }
}
