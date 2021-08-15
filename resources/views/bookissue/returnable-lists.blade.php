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
            @forelse(bookAlerts() as $key=>$bookissue_list)
                @php
                    $start_date =  \Carbon\Carbon::parse($bookissue_list->start_date);
                    $end_date = \Carbon\Carbon::parse($bookissue_list->end_date);
                    $returnableDay = $end_date->diffInDays($start_date);
                    $tillToday = \Carbon\Carbon::now()->diffInDays($start_date);
                @endphp
                <tr>
                    <td>{{ $bookissue_list->book->title }}</td>
                    <td>{{ $bookissue_list->book->isbn }}</td>
                    <td>{{ $bookissue_list->student->name."-".$bookissue_list->student->std_id }}</td>
                    <td>{{ $bookissue_list->start_date}}</td>
                    <td>{{ $bookissue_list->end_date}}</td>
                    <td>
                        @if( $returnableDay-$tillToday >0)
                            <strong class="badge badge-rounded text-white badge-success">
                                {{ $returnableDay-$tillToday }} Day left
                            </strong>
                        @else
                            <strong class="badge badge-rounded text-white badge-danger">
                                {{ $returnableDay-$tillToday }} Day Extended
                            </strong>
                        @endif
                    </td>
                    <td>
                        @if($bookissue_list->status == 0)
                            <strong class="badge badge-rounded badge-danger text-white">Returnable</strong>
                        @else
                            <strong class="badge badge-rounded badge-info text-white">Returned</strong>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('bookissue.return',$bookissue_list->id) }}" class="btn btn-primary  btn-sm"> <i class="fa fa-fast-backward"></i> </a>
                    </td>
                </tr>
            @empty

            @endforelse
        </tbody>
    </table>
</div>
