@extends('layouts.admin')

@section('title','Update Book : '.$book->name)

@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Book</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Update {{ $book->name }} Profile</a></li>
        </ol>
    </div>

    <div class="row">
        {{-- Book Form Start --}}
        <div class="col-xl-4 col-lg-4 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Form</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        {{ Form::model($book,['route'=>['book.update',$book->id],'method'=>"post"]) }}
                        @include('book.form-book',["button"=>"Update Book"])
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
        {{-- Book Form End --}}

        {{-- Book Lists Start --}}
        <div class="col-xl-8 col-lg-8 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Books</h4>
                </div>
                <div class="card-body">
                    @include('book.books')
                </div>
            </div>
        </div>
        {{-- Book Lists End --}}

    </div>

@endsection


@section('js')
    <script>
        $(document).on("click",".changeStatus",function () {
            return confirm("Are you sure to change status?");
        });
    </script>

@endsection
