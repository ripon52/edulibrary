<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Title</th>
                <th>ISBN</th>
                <th>Book Inside</th>
                <th>Available?</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse(books() as $key=>$book_list)
                <tr>
                    <td>{{ $book_list->title }}</td>
                    <td>{{ $book_list->isbn }}</td>
                    <td>
                        <p class="m-0 "> Department: <strong class="text-center badge badge-rounded text-white badge-info" >{{ $book_list->department->name ?? null }} </strong> </p>
                        <p class="m-0 "> Writer: <strong class="text-center badge badge-rounded text-white badge-primary" >{{ $book_list->writer->name  ?? null}} </strong> </p>
                        <p class="m-0 "> Publisher: <strong class="text-center badge badge-rounded text-white badge-danger" >{{ $book_list->publisher->name ?? null }} </strong> </p>
                        <p class="m-0 "> Origin: <strong class="text-center badge badge-rounded text-white badge-success" >{{ $book_list->origin->name ?? null }} </strong> </p>
                    </td>
                    <td>
                        <strong> {{ $book_list->status == 1 ? "Available" : "unavailable"}} </strong>
                    </td>
                    <td>
                        @if(isset($book) && $book->id == $book_list->id)
                            <a href="#" class="badge badge-rounded badge-success">Updating....</a>
                         @else
                            <a href="{{ route('book.edit',$book_list->id) }}" class="btn-success btn btn-sm"> <i class="fa fa-edit "></i> </a>
                            {{ Form::open(['route'=>['book.destroy',$book_list->id],"method"=>'post',"class"=>"destroyForm"]) }}
                                <button type="submit" class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure?')"  > <i class="fa fa-trash"></i> </button>
                            {{ Form::close() }}
                        @endif
                    </td>
                </tr>
            @empty
                <tr> <td colspan="8">No Book Found</td> </tr>
            @endforelse
        </tbody>
    </table>
</div>
