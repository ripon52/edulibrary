    <div class="form-group">
        <label>Reference.* <br> <small>Note: Chalan no/Voucher Reference</small> </label>
        {{ Form::text("reference",null,['class'=>'form-control','placeholder'=>'CHALAN No/Voucher reference']) }}
    </div>


    <div class="form-group">
        <label>Supplier.* <br> <small>Note: Supplier Name-Phone</small> </label>
        <select name="supplier_id" required class="form-control">
            @forelse(suppliers() as $key=>$supplier)
                <option value="{{ $supplier->id }}" {{ isset($stock) && $stock->supplier_id == $supplier->id ? 'selected' : '' }} >{{ $supplier->name."-".$supplier->phone }}</option>
            @empty

            @endforelse
        </select>
    </div>

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

    <div class="form-group ">
        <label>Quantity*  </label>
        {{ Form::number("qty",null,['class'=>'form-control','required','placeholder'=>"QTY"]) }}
    </div>


    <div class="form-group ">
        <label>Stock IN Date*  </label>
        {{ Form::date("date",null,['class'=>'form-control','required','placeholder'=>"Date"]) }}
    </div>


    <div class="form-group ">
        <label>Note</label>
        {{ Form::textarea("note",null,['class'=>'form-control','placeholder'=>"Stock IN Note"]) }}
    </div>

    <div class="form-group ">
        {{ Form::submit($button,['class'=>'btn btn-block btn-success']) }}
    </div>


