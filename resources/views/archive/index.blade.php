@extends('layouts.admin')

@section('title','New Resource')

@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Resource</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">New Resource</a></li>
        </ol>
    </div>

    <div class="row">
        {{-- Resource Form Start --}}
        <div class="col-xl-4 col-lg-4 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Resource Form</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        {{ Form::open(['route'=>'archive.store','method'=>"post",'files'=>true]) }}
                            @include('archive.form-archive',["button"=>"Save Resource"])
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
        {{-- Resource Form End --}}

        {{-- Resource Lists Start --}}
        <div class="col-xl-8 col-lg-8 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Resources</h4>
                </div>
                <div class="card-body">
                    @include('archive.archives')
                </div>
            </div>
        </div>
        {{-- Resource Lists End --}}

    </div>

@endsection


@section('js')
    <script>
        $(document).on("click",".changeStatus",function () {
           return confirm("Are you sure to change status?");
        });
    </script>

@endsection
