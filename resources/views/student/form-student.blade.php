
    <div class="form-group">
        <label>Full Name.*</label>
        {{ Form::text('name',null,['class'=>'form-control','placeholder'=>'Ex. John Doe','required']) }}
    </div>

    <div class="form-group">
        <label>Student ID.*</label>
        {{ Form::text('std_id',null,['class'=>'form-control','placeholder'=>'Ex. 17300000E','required']) }}
    </div>

    <div class="form-group">
        <label>Email*</label>
        {{ Form::email('email',null,['class'=>'form-control','placeholder'=>'Ex. studentId@eastdelta.edu.bd']) }}

        @error('email')
            <p class="has-error text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group">
        <label>Department*</label>
        {{ Form::select('department_id',department_pluck(),isset($student) ? $student->department_id : false,['class'=>'form-control']) }}
    </div>

    <div class="form-group">
        <label>Phone*</label>
        {{ Form::text('phone',null,['class'=>'form-control','placeholder'=>'+8801***-******']) }}
    </div>

    <div class="form-group">
        <label>Date of Birth*</label>
        {{ Form::date('dob',null,['class'=>'form-control','placeholder'=>'Ex. NID NO']) }}
    </div>

    <div class="form-group">
        <label>NID</label>
        {{ Form::text('nid',null,['class'=>'form-control','placeholder'=>'Ex. NID NO']) }}
    </div>


    <div class="form-group">
        <hr>
        <h2 class="text-center"> <u>Guardian Information</u> </h2>
        <label>Guardian Name</label>
        {{ Form::text('guardian_name',isset($student) ? $student->guardian->name : null,['class'=>'form-control','placeholder'=>'Ex. Guardian name']) }}
    </div>

    <div class="form-group">
        <label>Guardian Phone</label>
        {{ Form::text('guardian_phone',isset($student) ? $student->guardian->phone : null,['class'=>'form-control','placeholder'=>'Ex. Guardian Phone']) }}
    </div>

    <div class="form-group">
        <label for="evening">Is Evening Student?</label>
        {{ Form::checkbox('evening',1) }}
    </div>

    <div class="form-group ">
        {{ Form::submit($button,['class'=>'btn btn-block btn-success']) }}
    </div>


