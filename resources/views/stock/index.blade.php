@extends('layouts.admin')

@section('title','New Stock')

@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Stock</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">New Stock</a></li>
        </ol>
    </div>

    <div class="row">
        {{-- Stock Form Start --}}
        <div class="col-xl-4 col-lg-4 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Stock Form</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        {{ Form::open(['route'=>'stock.store','method'=>"post"]) }}
                            @include('stock.form-stock',["button"=>"Save Stock"])
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
        {{-- Stock Form End --}}

        {{-- Stock Lists Start --}}
        <div class="col-xl-8 col-lg-8 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Stocks</h4>
                </div>
                <div class="card-body">
                    @include('stock.stocks')
                </div>
            </div>
        </div>
        {{-- Stock Lists End --}}

    </div>

@endsection


@section('js')
    <script>
        $(document).on("click",".changeStatus",function () {
           return confirm("Are you sure to change status?");
        });
    </script>

@endsection
