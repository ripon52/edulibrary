
    <div class="form-group">
        <label>Book Name.*</label>
        {{ Form::text('title',null,['class'=>'form-control','placeholder'=>'Ex. C Programming','required']) }}
    </div>

    <div class="form-group">
        <label>Book ISBN</label>
        {{ Form::text('isbn',null,['class'=>'form-control','placeholder'=>'Ex. Book ISBN']) }}
    </div>

    <div class="form-group">
        <label>Writer.*</label>
        {{ Form::select('writer_id',writer_pluck(),isset($book) ? $book->writer_id : false,['class'=>'form-control','required']) }}
    </div>

    <div class="form-group">
        <label>Publisher.*</label>
        {{ Form::select('publisher_id',publisher_pluck(),isset($book) ? $book->publisher_id : false,['class'=>'form-control','required']) }}
    </div>

    <div class="form-group">
        <label>Department.*</label>
        {{ Form::select('department_id',department_pluck(),isset($book) ? $book->department_id : false,['class'=>'form-control','required']) }}
    </div>

    <div class="form-group">
        <label>Origin.*</label>
        {{ Form::select('origin_id',origin_pluck(),isset($book) ? $book->origin_id : false,['class'=>'form-control','required']) }}
    </div>

    <div class="form-group">
        <label>Book Description.</label>
        {{ Form::textarea( 'description',null,['class'=>'form-control','placeholder'=>'Ex. Book Details']) }}
    </div>

    <div class="form-group ">
        {{ Form::submit($button,['class'=>'btn btn-block btn-success']) }}
    </div>


