
    <div class="form-group">
        <label>PDF Title .*</label>
        {{ Form::text('title',null,['class'=>'form-control','placeholder'=>'Ex. C Programming','required']) }}
    </div>

    @if(isset($archive))
        <div class="form-group">
            <label>OLD PDF</label>
            <button class="btn btn-primary">
                {{ $archive->file }}
            </button>
        </div>
    @endif

    <div class="form-group">
        <label>Select DOCX/PDF/PPT/IMAGE.*</label>
        {{ Form::file('file',['class'=>'form-control',isset($archive) ? : 'required'])}}

        @error('file')
            <strong class="bg-danger text-white"> {{ $message }}</strong>
        @enderror
    </div>

    <div class="form-group">
        <label>PDF Description.</label>
        {{ Form::textarea( 'notes',null,['class'=>'form-control','placeholder'=>'Ex. Resource Details']) }}
    </div>

    <div class="form-group ">
        {{ Form::submit($button,['class'=>'btn btn-block btn-success']) }}
    </div>


