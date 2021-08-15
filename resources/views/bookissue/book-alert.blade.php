@extends('layouts.admin')

@section('title','Alert - Book ')

@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Book Alert</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Book Alert</a></li>
        </ol>
    </div>

    <div class="row">

        {{-- Book IssueLists Start --}}
        <div class="col-xl-12 col-lg-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Book Alert</h4>
                </div>
                <div class="card-body">
                    @include('bookissue.returnable-lists')
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
