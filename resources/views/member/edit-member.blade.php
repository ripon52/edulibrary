@extends('layouts.admin')

@section('title','Update Member : '.$member->name)

@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Member</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Update {{ $member->name }} Profile</a></li>
        </ol>
    </div>

    <div class="row">
        {{-- Member Form Start --}}
        <div class="col-xl-4 col-lg-4 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Form</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        {{ Form::model($member,['route'=>['member.update',$member->id],'method'=>"post"]) }}
                        @include('member.form-member',["button"=>"Update Member"])
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
        {{-- Member Form End --}}

        {{-- Member Lists Start --}}
        <div class="col-xl-8 col-lg-8 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Members</h4>
                </div>
                <div class="card-body">
                    @include('member.members')
                </div>
            </div>
        </div>
        {{-- Member Lists End --}}

    </div>

@endsection


@section('js')
    <script>
        $(document).on("click",".changeStatus",function () {
            return confirm("Are you sure to change status?");
        });
    </script>

@endsection
