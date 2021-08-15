@extends('layouts.admin')

@section('title','Update review: '.$review->name)

@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Review</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Update {{ $review->name }} Profile</a></li>
        </ol>
    </div>

    <div class="row">
        {{-- review Start --}}
        <div class="col-xl-4 col-lg-4 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Form</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        {{ Form::model($review,['route'=>['review.update',$review->id],'method'=>"post"]) }}
                        @include('review.form-review',["button"=>"Update Review"])
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
        {{-- review End --}}

        {{-- reviewLists Start --}}
        <div class="col-xl-8 col-lg-8 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">reviews</h4>
                </div>
                <div class="card-body">
                    @include('review.reviews')
                </div>
            </div>
        </div>
        {{-- reviewLists End --}}

    </div>

@endsection


@section('js')
    <script>
        $(document).on("click",".changeStatus",function () {
            return confirm("Are you sure to change status?");
        });
    </script>

@endsection
