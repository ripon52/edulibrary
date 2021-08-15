@extends('layouts.admin')

@section('title','Update Book Issue: '.$bookissue->name)

@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Publisher</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Update {{ $bookissue->name }} Profile</a></li>
        </ol>
    </div>

    <div class="row">
        {{-- Book Issue Start --}}
        <div class="col-xl-4 col-lg-4 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Form</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        {{ Form::model($bookissue,['route'=>['bookissue.update',$bookissue->id],'method'=>"post"]) }}
                        @include('bookissue.form-bookissue',["button"=>"Update Publisher"])
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
        {{-- Book Issue End --}}

        {{-- Book IssueLists Start --}}
        <div class="col-xl-8 col-lg-8 col-12">
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
