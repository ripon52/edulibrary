@extends('layouts.admin')

@section('title','New Department')

@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Department</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">New Department</a></li>
        </ol>
    </div>

    <div class="row">
        {{-- Department Form Start --}}
        <div class="col-xl-4 col-lg-4 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Department Form</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        {{ Form::open(['route'=>'department.store','method'=>"post"]) }}
                            @include('department.form-department',["button"=>"Save Department"])
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
        {{-- Department Form End --}}

        {{-- Department Lists Start --}}
        <div class="col-xl-8 col-lg-8 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Departments</h4>
                </div>
                <div class="card-body">
                    @include('department.departments')
                </div>
            </div>
        </div>
        {{-- Department Lists End --}}

    </div>

@endsection


@section('js')
    <script>
        $(document).on("click",".changeStatus",function () {
           return confirm("Are you sure to change status?");
        });
    </script>

@endsection
