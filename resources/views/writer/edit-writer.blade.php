@extends('layouts.admin')

@section('title','Update Writer : '.$writer->name)

@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Writer</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Update {{ $writer->name }} Profile</a></li>
        </ol>
    </div>

    <div class="row">
        {{-- Writer Form Start --}}
        <div class="col-xl-4 col-lg-4 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Form</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        {{ Form::model($writer,['route'=>['writer.update',$writer->id],'method'=>"post"]) }}
                        @include('writer.form-writer',["button"=>"Update Writer"])
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
                    @include('writer.Writers')
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
