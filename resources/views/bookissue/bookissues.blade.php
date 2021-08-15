<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Book</th>
                <th>ISBN</th>
                <th>Student</th>
                <th>Issue Date</th>
                <th>Returnable Date</th>
                <th>Returned Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse(bookissues() as $key=>$bookissue_list)
                <tr>
                    <td>{{ $bookissue_list->book->title }}</td>
                    <td>{{ $bookissue_list->book->isbn }}</td>
                    <td>{{ $bookissue_list->student->name."-".$bookissue_list->student->std_id }}</td>
                    <td>{{ $bookissue_list->start_date}}</td>
                    <td>{{ $bookissue_list->end_date}}</td>
                    <td> -- </td>
                    <td>
                        @if($bookissue_list->status == 0)
                            <strong class="badge badge-rounded badge-danger text-white">Returnable</strong>
                        @else
                            <strong class="badge badge-rounded badge-info text-white">Returned</strong>
                        @endif
                    </td>

                    <td>
                        @if(isset($bookissue) && $bookissue->id == $bookissue_list->id)
                            <a href="#" class="badge badge-rounded badge-success">Updating....</a>
                         @else
                            @if($bookissue_list->status == 0)
                                <a href="{{ route('bookissue.return',$bookissue_list->id) }}" class="btn btn-primary  btn-sm"> <i class="fa fa-fast-backward"></i> </a>
                            @endif

                            <a href="{{ route('bookissue.edit',$bookissue_list->id) }}" class="btn-success btn btn-sm"> <i class="fa fa-edit "></i> </a>


                            {{ Form::open(['route'=>['bookissue.destroy',$bookissue_list->id],"method"=>'post',"class"=>"destroyForm"]) }}
                                <button type="submit" class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure?')"  > <i class="fa fa-trash"></i> </button>
                            {{ Form::close() }}
                        @endif
                    </td>

                </tr>
            @empty
                <tr> <td colspan="5">No Book IssueFound</td> </tr>
            @endforelse
        </tbody>
    </table>
</div>
