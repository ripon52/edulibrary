@extends('layouts.admin')

@section('title','Book Return')

@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Book Return</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Book Return</a></li>
        </ol>
    </div>

    <div class="row">
        {{-- Book Issue Start --}}
        <div class="col-xl-6 col-lg-6 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Book Return</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        {{ Form::model($bookissue,['route'=>['bookissue.returnStore',$bookissue->id],'method'=>"post"]) }}

                        <div class="form-group">
                            <p>Book Details: {{ $bookissue->book->title.'-ISBN:'.$bookissue->book->isbn }}</p>
                            <p>Issue Date: {{ $bookissue->start_date }}</p>
                            <p>Returnable Date: {{ $bookissue->end_date }}</p>
                            <hr>
                        </div>

                        <div class="form-group">
                            <label for="">Return Date</label>
                            {{ Form::date("submit_date",null,['class'=>'form-control','required']) }}
                        </div>

                        <div class="form-group">
                            <label for="">Return Note</label>
                            {{ Form::textarea("submit_note",null,['class'=>'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::submit("Save Book Return",['class'=>'btn btn-success ']) }}
                        </div>

                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
        {{-- Book Issue End --}}

    </div>

@endsection


@section('js')
    <script>

    </script>

@endsection
