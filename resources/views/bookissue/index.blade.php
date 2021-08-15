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
        {{-- Book Issue Start --}}
        <div class="col-xl-3 col-lg-3 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Book Issue</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        {{ Form::open(['route'=>'bookissue.store','method'=>"post"]) }}
                            @include('bookissue.form-bookissue',["button"=>"Save Book Issue"])
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
        {{-- Book Issue End --}}

        {{-- Book IssueLists Start --}}
        <div class="col-xl-9 col-lg-9 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Book Issues</h4>
                </div>
                <div class="card-body">
                    @include('bookissue.bookissues')
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
