<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse(departments() as $key=>$department_list)
                <tr>
                    <td>{{ $department_list->name }}</td>
                    <td>
                        @if(isset($department) && $department->id == $department_list->id)
                            <a href="#" class="badge badge-rounded badge-success">Updating....</a>
                         @else
                            <a href="{{ route('department.edit',$department_list->id) }}" class="btn-success btn btn-sm"> <i class="fa fa-edit "></i> </a>
                            {{ Form::open(['route'=>['department.destroy',$department_list->id],"method"=>'post',"class"=>"destroyForm"]) }}
                                <button type="submit" class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure?')"  > <i class="fa fa-trash"></i> </button>
                            {{ Form::close() }}
                        @endif
                    </td>
                </tr>
            @empty
                <tr> <td colspan="5">No Department Found</td> </tr>
            @endforelse
        </tbody>
    </table>
</div>
