
    <div class="form-group">
        <label>Name.*</label>
        {{ Form::text('name',null,['class'=>'form-control','placeholder'=>'Ex. ESHOP Express','required']) }}
    </div>

    <div class="form-group">
        <label>Phone.*</label>
        {{ Form::text('phone',null,['class'=>'form-control','placeholder'=>'Ex. Phone Number','required']) }}
    </div>

    <div class="form-group">
        <label>Address.*</label>
        {{ Form::textarea('address',null,['class'=>'form-control','placeholder'=>'Ex. Address','required']) }}
    </div>

    <div class="form-group ">
        {{ Form::submit($button,['class'=>'btn btn-block btn-success']) }}
    </div>


