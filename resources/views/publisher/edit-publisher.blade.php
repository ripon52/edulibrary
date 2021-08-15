@extends('layouts.admin')

@section('title','Update Publisher : '.$publisher->name)

@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Publisher</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Update {{ $publisher->name }} Profile</a></li>
        </ol>
    </div>

    <div class="row">
        {{-- Publisher Form Start --}}
        <div class="col-xl-4 col-lg-4 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Form</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        {{ Form::model($publisher,['route'=>['publisher.update',$publisher->id],'method'=>"post"]) }}
                        @include('publisher.form-publisher',["button"=>"Update Publisher"])
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
        {{-- Publisher Form End --}}

        {{-- Publisher Lists Start --}}
        <div class="col-xl-8 col-lg-8 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Publishers</h4>
                </div>
                <div class="card-body">
                    @include('publisher.publishers')
                </div>
            </div>
        </div>
        {{-- Publisher Lists End --}}

    </div>

@endsection


@section('js')
    <script>
        $(document).on("click",".changeStatus",function () {
            return confirm("Are you sure to change status?");
        });
    </script>

@endsection
