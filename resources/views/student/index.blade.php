@extends('layouts.admin')

@section('title','New Student')

@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Student</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">New Student</a></li>
        </ol>
    </div>

    <div class="row">
        {{-- Student Form Start --}}
        <div class="col-xl-4 col-lg-4 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Student Form</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        {{ Form::open(['route'=>'student.store','method'=>"post"]) }}
                            @include('student.form-student',["button"=>"Save Student"])
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
        {{-- Student Form End --}}

        {{-- Student Lists Start --}}
        <div class="col-xl-8 col-lg-8 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Students</h4>
                </div>
                <div class="card-body">
                    @include('student.students')
                </div>
            </div>
        </div>
        {{-- Student Lists End --}}

    </div>

@endsection


@section('js')
    <script>
        $(document).on("click",".changeStatus",function () {
           return confirm("Are you sure to change status?");
        });
    </script>

@endsection
