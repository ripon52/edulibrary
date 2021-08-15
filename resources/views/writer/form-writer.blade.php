
    <div class="form-group">
        <label>Writer Name.*</label>
        {{ Form::text('name',null,['class'=>'form-control','placeholder'=>'Ex. Prof. John Doe','required']) }}
    </div>


    <div class="form-group ">
        {{ Form::submit($button,['class'=>'btn btn-block btn-success']) }}
    </div>


