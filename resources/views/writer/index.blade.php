@extends('layouts.admin')

@section('title','New Writer')

@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Writer</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">New Writer</a></li>
        </ol>
    </div>

    <div class="row">
        {{-- Writer Form Start --}}
        <div class="col-xl-4 col-lg-4 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Writer Form</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        {{ Form::open(['route'=>'writer.store','method'=>"post"]) }}
                            @include('writer.form-writer',["button"=>"Save Writer"])
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
        {{-- Writer Form End --}}

        {{-- Writer Lists Start --}}
        <div class="col-xl-8 col-lg-8 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Writers</h4>
                </div>
                <div class="card-body">
                    @include('writer.writers')
                </div>
            </div>
        </div>
        {{-- Writer Lists End --}}

    </div>

@endsection


@section('js')
    <script>
        $(document).on("click",".changeStatus",function () {
           return confirm("Are you sure to change status?");
        });
    </script>

@endsection
