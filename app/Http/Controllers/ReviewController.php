<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index(){
        return view('review.index');
    }

    public function store(Request $request){

        $this->validate($request,[
            'book_id'=>"required",
            'star'=>"required",
            'comments'=>"required",
        ]);

        $user = Auth::user();
        $reviewed = Review::query()
                        ->where('book_id',$request->book_id)
                        ->where('user_id',$user->id)
                        ->first();

        $data = $request->all();
        $data['user_id'] = Auth::id();
        $data['student_id'] = Auth::user()->isStudent->id;

        if (empty($reviewed)){
            session()->flash('success','New Review added.');
            Review::query()->create($data);
        }
        else{
            session()->flash('success',' Review Updated.');
            $reviewed->update($data);
        }


        return redirect()->route('review.add');
    }

    public function status($id){
        $member = Review::query()->findOrFail($id);
        session()->flash('success','Member '.($member->isActive == 1 ? 'Active' : 'In Active'));
        return redirect()->route('review.add');
    }

    public function isActiveMeal($id){
        $member = Review::query()->findOrFail($id);
        $member->update(['isActiveMeal'=>($member->isActiveMeal == 1 ? 0 : 1)]);
        session()->flash('success','Member '.($member->isActiveMeal == 1 ? 'Active' : 'In Active'));
        return redirect()->route('review.add');
    }


    public function edit($id)
    {
        $data['review'] = Review::query()->findOrFail($id);
        return view('review.edit-review')->with($data);
    }

    public function update(Request $request,$id){

        $this->validate($request,[
            'book_id'=>"required",
            'star'=>"required",
            'comments'=>"required",
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::id();
        $data['student_id'] = Auth::user()->isStudent->id;

        $review= Review::query()->findOrFail($id);
        $review->update($data);

        session()->flash('success','review Updated.');
        return redirect()->route('review.add');
    }

    public function destroy(Request $request,$id){
        $delete =  Review::query()->findOrFail($id)->delete();
        session()->flash('success',$delete ? "Review deleted successfully" : "Review data available at other tables. Can't delete");
        return redirect()->back();
    }
}
