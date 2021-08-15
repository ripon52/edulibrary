<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepartmentController extends Controller
{
    public function index(){
        return view('department.index');
    }

    public function store(Request $request){

        $this->validate($request,[
            'name'=>"required"
        ]);

        $data = $request->all();
        Department::query()->create($data);
        session()->flash('success','New Department added.');
        return redirect()->route('department.add');
    }

    public function status($id){
        $member = Department::query()->findOrFail($id);
        session()->flash('success','Member '.($member->isActive == 1 ? 'Active' : 'In Active'));
        return redirect()->route('department.add');
    }

    public function isActiveMeal($id){
        $member = Department::query()->findOrFail($id);
        $member->update(['isActiveMeal'=>($member->isActiveMeal == 1 ? 0 : 1)]);
        session()->flash('success','Member '.($member->isActiveMeal == 1 ? 'Active' : 'In Active'));
        return redirect()->route('department.add');
    }


    public function edit($id)
    {
        $data['department'] = Department::query()->findOrFail($id);
        return view('department.edit-department')->with($data);
    }

    public function update(Request $request,$id){

        $this->validate($request,[
            'name'=>"required"
        ]);

        $data = $request->all();
        $user = Auth::user();
        $member= Department::query()->findOrFail($id);
        $member->update($data);
        session()->flash('success','Department Updated.');
        return redirect()->route('department.add');
    }

    public function destroy(Request $request,$id){
       $delete =  Department::query()->findOrFail($id)->delete();
        session()->flash('success',$delete ? "Department deleted successfully" : "Department data available at other tables. Can't delete");
        return redirect()->back();
    }

}
