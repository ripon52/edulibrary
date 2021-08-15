<?php

namespace App\Http\Controllers;

use App\Guardian;
use App\Student;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    public function index(){
        return view('student.index');
    }

    public function store(Request $request){

        $this->validate($request,[
            'name'=>"required",
            'email'=>"bail|email:rfc,dns|required|unique:users",
            'phone'=>"required|unique:students",
            'std_id'=>"required|unique:students",
        ]);

        $userdata = $request->all();
        $userdata["password"] = bcrypt($request->std_id);
        $user = User::query()->create($userdata);

        $userdata["user_id"]=$user->id;
        $userdata["isEvening"] = isset($request->evening) ? 1 : 0;

        $student = Student::query()->create($userdata);

        Guardian::query()->create([
            "student_id"=>$student->id,
            "name"=>$request->guardian_name,
            "phone"=>$request->guardian_phone,
        ]);

        session()->flash('success','New Student added.');
        return redirect()->route('student.add');
    }

    public function status($id){
        $member = Student::query()->findOrFail($id);
        $member->update(['isActive'=>($member->isActive == 1 ? 0 : 1)]);
        session()->flash('success','Member '.($member->isActive == 1 ? 'Active' : 'In Active'));
        return redirect()->route('student.add');
    }

    public function isActiveMeal($id){
        $member = Student::query()->findOrFail($id);
        $member->update(['isActiveMeal'=>($member->isActiveMeal == 1 ? 0 : 1)]);
        session()->flash('success','Member '.($member->isActiveMeal == 1 ? 'Active' : 'In Active'));
        return redirect()->route('student.add');
    }


    public function edit($id)
    {
        $data['student'] = Student::query()->findOrFail($id);
        return view('student.edit-student')->with($data);
    }

    public function update(Request $request,$id){

        $student = Student::query()->findOrFail($id);

        $this->validate($request,[
            'name'=>"required",
            'email'=>["required", Rule::unique("users")->ignore($student->user_id)],
            'phone'=>["required", Rule::unique("students")->ignore($id)],
            'std_id'=>["required", Rule::unique("students")->ignore($id)],
        ]);

        $userdata = $request->all();

        $userdata["isEvening"] = isset($request->evening) ? 1 : 0;
        $student->update($userdata);

        Guardian::query()->findOrFail($student->id)->update([
            "student_id"=>$student->id,
            "name"=>$request->guardian_name,
            "phone"=>$request->guardian_phone,
        ]);

        session()->flash('success','Student information updated successfully.');
        return redirect()->route('student.add');
    }

    public function view(){
        return view("student.view-student");
    }


}
