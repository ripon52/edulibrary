<?php

namespace App\Http\Controllers;

use App\Archive;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Traits\StoreImageTrait;

class ArchiveController extends Controller
{
    use StoreImageTrait;
    public function index()
    {
        $data['archives'] = Archive::query()->orderByDesc('id')->get();
        return view('archive.index')->with($data);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'file'=>'nullable|mimes:doc,pdf,docx,jpeg,png,gif|max:1048576'
        ]);

        $data = $request->all();

        if ($request->hasFile('file')){
            $path = public_path('project_files/archive');
            $data['file'] = $this->ImageStore($request->file('file'),$path);
        }

        Archive::query()->create($data);
        session()->flash('success','archive added');
        return redirect()->route('archive.add');
    }

    public function edit($id)
    {
        $data['archive'] = Archive::query()->findOrFail($id);
        $data['archives'] = Archive::query()->orderByDesc('id')->get();
        return view('archive.edit-archive')->with($data);
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'title'=>'required',
            'file'=>'nullable|mimes:doc,pdf,docx,jpeg,png,gif|max:1048576'
        ]);

        $data = $request->all();

        $archive = Archive::query()->findOrFail($id);

        if ($request->hasFile('file')){
            $path = public_path('project_files/archive');
            $data['file'] = $this->ImageStore($request->file('file'),$path);
            /* unlink start */
            if (!empty($archive->file)){
                $unlinkPath = public_path('project_files/archive/'.$archive->file);
                $this->unlinkImage($unlinkPath);
            }
            /* unlink end */
        }

        $archive->update($data);
        session()->flash('success','archive updated');
        return redirect()->route('archive.add');
    }

    public function destroy($id)
    {
        $archive = Archive::query()->findOrFail($id);
        /* unlink start */
        if (!empty($archive->file)){
            $path = public_path('project_files/archive/'.$archive->file);
            $this->unlinkImage($path);
        }
        /* unlink end */
        $archive->delete();
        return back();
    }

    public function view()
    {
        $archives = Archive::query()->get();
        return view('archive.view-archive',compact('archives'));

    }


    public function download(Archive $archive,$id){
       $archive = Archive::query()->findOrFail($id);

       $path = public_path('project_files/archive/'.$archive->file);
       return \Response::download($path);

    }


    public function viewResource(){
        return view('archive.view-resource');
    }
}
