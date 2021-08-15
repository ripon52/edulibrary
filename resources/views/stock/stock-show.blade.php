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

        {{-- Stock Lists Start --}}
        <div class="col-xl-12 col-lg-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Stocks</h4>
                </div>
                <div class="card-body">
                    @include('stock.book-wise-stock')
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
