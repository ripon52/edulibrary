
    <div class="form-group">
        <label>Book.* <br> <small>Note: Book Title-Department-Writer-Publisher-Origin</small> </label>

        <select name="book_id" required class="form-control">

            @forelse(books() as $key=>$book)
                <option value="{{ $book->id }}"  {{ isset($bookissue) && $bookissue->book_id == $book->id ? 'selected' : '' }}>
                    {{ $book->title."-".$book->department->name."-".$book->writer->name."-".$book->publisher->name."-".$book->origin->name }}
                </option>
            @empty

            @endforelse

        </select>
    </div>

    <div class="form-group">
        <label>Student.* <br> <small>Note: Student Name-ID-Department</small> </label>
        <select name="student_id" required class="form-control">

            @forelse(students() as $key=>$student)
                <option value="{{ $student->id }}"  {{ isset($bookissue) && $bookissue->book_id == $book->id ? 'selected' : '' }}>
                    {{ $student->name."-".$student->std_id ."-".$student->department->name}}
                </option>
            @empty

            @endforelse

        </select>
    </div>

    <div class="form-group">
        <label>Issue Date.*</label>
        {{ Form::date('start_date',null,['class'=>'form-control','placeholder'=>'Ex. Issue Date','required']) }}
    </div>

    <div class="form-group">
        <label>Return Date.*</label>
        {{ Form::date('end_date',null,['class'=>'form-control','placeholder'=>'Ex. Returnable Date','required']) }}
    </div>

    <div class="form-group ">
        {{ Form::submit($button,['class'=>'btn btn-block btn-success']) }}
    </div>


