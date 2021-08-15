
    <div class="form-group">
        <label>Publisher Name.*</label>
        {{ Form::text('name',null,['class'=>'form-control','placeholder'=>'Ex. Lecture Publications','required']) }}
    </div>


    <div class="form-group ">
        {{ Form::submit($button,['class'=>'btn btn-block btn-success']) }}
    </div>


