<?php

namespace App\Http\Controllers;

use App\Writer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WriterController extends Controller
{
    public function index(){
        return view('writer.index');
    }

    public function store(Request $request){

        $this->validate($request,[
            'name'=>"required"
        ]);

        $data = $request->all();
        Writer::query()->create($data);
        session()->flash('success','New writer added.');
        return redirect()->route('writer.add');
    }

    public function status($id){
        $member = Writer::query()->findOrFail($id);
        session()->flash('success','Member '.($member->isActive == 1 ? 'Active' : 'In Active'));
        return redirect()->route('writer.add');
    }

    public function isActiveMeal($id){
        $member = Writer::query()->findOrFail($id);
        $member->update(['isActiveMeal'=>($member->isActiveMeal == 1 ? 0 : 1)]);
        session()->flash('success','Member '.($member->isActiveMeal == 1 ? 'Active' : 'In Active'));
        return redirect()->route('writer.add');
    }


    public function edit($id)
    {
        $data['writer'] = Writer::query()->findOrFail($id);
        return view('writer.edit-writer')->with($data);
    }

    public function update(Request $request,$id){

        $this->validate($request,[
            'name'=>"required"
        ]);

        $data = $request->all();
        $user = Auth::user();
        $member= Writer::query()->findOrFail($id);
        $member->update($data);
        session()->flash('success','writer Updated.');
        return redirect()->route('writer.add');
    }

    public function destroy(Request $request,$id){
        $delete =  Writer::query()->findOrFail($id)->delete();
        session()->flash('success',$delete ? "writer deleted successfully" : "writer data available at other tables. Can't delete");
        return redirect()->back();
    }
}
