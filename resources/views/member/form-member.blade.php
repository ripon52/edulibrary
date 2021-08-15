
    <div class="form-group">
        <label>Full Name.*</label>
        {{ Form::text('name',null,['class'=>'form-control','placeholder'=>'Ex. John Doe','required']) }}
    </div>

    <div class="form-group">
        <label>Phone</label>
        {{ Form::text('phone',null,['class'=>'form-control','placeholder'=>'+8801***-******']) }}
    </div>


    <div class="form-group">
        <label>NID</label>
        {{ Form::text('nid',null,['class'=>'form-control','placeholder'=>'Ex.5532522556585']) }}
    </div>


    <div class="form-group">
        <label>Room No</label>
        {{ Form::number('room',null,['class'=>'form-control','placeholder'=>'Ex. Room 3']) }}
    </div>


    <div class="form-group">
        <label>Is Student/Job Holder</label>
        {{ Form::select('isStudent',['1'=>"Student","2"=>"Job Holder"],false,['class'=>'form-control']) }}
    </div>


    <div class="form-group ">
        <label for="join_date">Joined Date</label>
        {{ Form::date('joined_date',null,['class'=>'form-control','placeholder'=>'Ex. Room 3','id'=>'join_date']) }}
    </div>


    <div class="form-group ">
        {{ Form::submit($button,['class'=>'btn btn-block btn-success']) }}
    </div>


