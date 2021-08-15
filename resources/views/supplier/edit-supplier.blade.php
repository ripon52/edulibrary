@extends('layouts.admin')

@section('title','Update Supplier: '.$supplier->name)

@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Supplier</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Update {{ $supplier->name }} Profile</a></li>
        </ol>
    </div>

    <div class="row">
        {{-- Supplier Start --}}
        <div class="col-xl-4 col-lg-4 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Form</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        {{ Form::model($supplier,['route'=>['supplier.update',$supplier->id],'method'=>"post"]) }}
                        @include('supplier.form-supplier',["button"=>"Update Supplier"])
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
        {{-- Supplier End --}}

        {{-- SupplierLists Start --}}
        <div class="col-xl-8 col-lg-8 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">suppliers</h4>
                </div>
                <div class="card-body">
                    @include('supplier.suppliers')
                </div>
            </div>
        </div>
        {{-- SupplierLists End --}}

    </div>

@endsection


@section('js')
    <script>
        $(document).on("click",".changeStatus",function () {
            return confirm("Are you sure to change status?");
        });
    </script>

@endsection
