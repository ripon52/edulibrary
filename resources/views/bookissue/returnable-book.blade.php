@extends('layouts.admin')

@section('title','New Book Issue')

@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Book Issue</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">New Book Issue</a></li>
        </ol>
    </div>

    <div class="row">

        {{-- Book IssueLists Start --}}
        <div class="col-xl-12 col-lg-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Book Issues</h4>
                </div>
                <div class="card-body">
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
                                         <a href="{{ route('bookissue.return',$bookissue_list->id) }}" class="btn btn-primary  btn-sm"> <i class="fa fa-fast-backward"></i> </a>
                                    </td>

                                </tr>
                            @empty
                                <tr> <td colspan="8" class="text-center">No Book IssueFound</td> </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        {{-- Book IssueLists End --}}

    </div>

@endsection


@section('js')
    <script>
        $(document).on("click",".changeStatus",function () {
            return confirm("Are you sure to change status?");
        });
    </script>

@endsection
