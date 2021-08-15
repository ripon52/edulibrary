<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Student</th>
                <th>Book</th>
                <th>Star</th>
                <th>Comments</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse(reviews() as $key=>$review_list)
                <tr>
                    <td>{{ $review_list->user->name }} <br>
                        <small>
                            <b>
                                {{ $review_list->student->std_id }}
                            </b>
                        </small>
                    </td>
                    <td>{{ $review_list->book->title }}</td>
                    <td>
                        @for($i=0; $i<$review_list->star;$i++)
                            <i class="fa fa-star fa-spin starColor"></i>
                        @endfor

                        @for($i=0; $i<5-$review_list->star;$i++)
                            <i class="fa fa-star"></i>
                        @endfor

                    </td>
                    <td>
                        {!! $review_list->comments !!}
                    </td>
                    <td>
                        @if(isset($review) && $review->id == $review_list->id)
                            <a href="#" class="badge badge-rounded badge-success">Updating....</a>
                         @else
                            <a href="{{ route('review.edit',$review_list->id) }}" class="btn-success btn btn-sm"> <i class="fa fa-edit "></i> </a>
                            {{ Form::open(['route'=>['review.destroy',$review_list->id],"method"=>'post',"class"=>"destroyForm"]) }}
                                <button type="submit" class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure?')"  > <i class="fa fa-trash"></i> </button>
                            {{ Form::close() }}
                        @endif
                    </td>
                </tr>
            @empty
                <tr> <td colspan="5">No reviewFound</td> </tr>
            @endforelse
        </tbody>
    </table>
</div>
