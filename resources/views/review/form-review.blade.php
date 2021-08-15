

    <div class="form-group">
        <label>Book.* <br> <small>Note: Book Title-Department-Writer-Publisher-Origin</small> </label>
        <select name="book_id" required class="form-control">
            @forelse(books() as $key=>$book)
                <option value="{{ $book->id }}"  {{ isset($stock) && $stock->book_id == $book->id ? 'selected' : '' }}>
                    {{ $book->title."-".$book->department->name."-".$book->writer->name."-".$book->publisher->name."-".$book->origin->name }}
                </option>
            @empty

            @endforelse
        </select>
    </div>

    <div class="form-group">
        <label>Rating Star.*</label>
        {{ Form::select('star',stars(),false,['class'=>'form-control','required']) }}
    </div>

    <div class="form-group">
        <label>Review Comments.*</label>
        {{ Form::textarea('comments',null,['class'=>'form-control','placeholder'=>'Ex. Your Review....','required']) }}
    </div>

    <div class="form-group ">
        {{ Form::submit($button,['class'=>'btn btn-block btn-success']) }}
    </div>


