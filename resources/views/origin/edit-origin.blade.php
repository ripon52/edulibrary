@extends('layouts.admin')

@section('title','Update Origin : '.$origin->name)

@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Origin</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Update {{ $origin->name }} Profile</a></li>
        </ol>
    </div>

    <div class="row">
        {{-- Origin Form Start --}}
        <div class="col-xl-4 col-lg-4 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Form</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        {{ Form::model($origin,['route'=>['origin.update',$origin->id],'method'=>"post"]) }}
                        @include('origin.form-origin',["button"=>"Update Origin"])
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
        {{-- Origin Form End --}}

        {{-- Origin Lists Start --}}
        <div class="col-xl-8 col-lg-8 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Origins</h4>
                </div>
                <div class="card-body">
                    @include('origin.origins')
                </div>
            </div>
        </div>
        {{-- Origin Lists End --}}

    </div>

@endsection


@section('js')
    <script>
        $(document).on("click",".changeStatus",function () {
            return confirm("Are you sure to change status?");
        });
    </script>

@endsection
