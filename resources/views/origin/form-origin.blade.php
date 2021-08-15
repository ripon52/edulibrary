
    <div class="form-group">
        <label>Origin Name.*</label>
        {{ Form::text('name',null,['class'=>'form-control','placeholder'=>'Ex. Bangladesh/Italy/Foreign ','required']) }}
    </div>


    <div class="form-group ">
        {{ Form::submit($button,['class'=>'btn btn-block btn-success']) }}
    </div>


