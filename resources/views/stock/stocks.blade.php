<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>CH.No/Ref</th>
                <th>Book</th>
                <th>Department</th>
                <th>Publisher</th>
                <th>Writer</th>
                <th>Origin</th>
                <th>QTY</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse(stocks() as $key=>$stock_list)
                <tr>
                    <td>{{ $stock_list->reference }}</td>
                    <td>{{ $stock_list->book->title }}</td>
                    <td>{{ $stock_list->book->department->name ?? null }}</td>
                    <td>{{ $stock_list->book->publisher->name ?? null}}</td>
                    <td>{{ $stock_list->book->writer->name ?? null}}</td>
                    <td>{{ $stock_list->book->origin->name ?? null}}</td>
                    <td>{{ $stock_list->qty ?? 0}}</td>
                    <td>{{ $stock_list->date ?? 0}}</td>
                    <td>
                        @if(isset($stock) && $stock->id == $stock_list->id)
                            <a href="#" class="badge badge-rounded badge-success">Updating....</a>
                         @else
                            <a href="{{ route('stock.edit',$stock_list->id) }}" class="btn-success btn btn-sm"> <i class="fa fa-edit "></i> </a>
{{--                            {{ Form::open(['route'=>['stock.destroy',$stock_list->id],"method"=>'post',"class"=>"destroyForm"]) }}--}}
{{--                                <button type="submit" class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure?')"  > <i class="fa fa-trash"></i> </button>--}}
{{--                            {{ Form::close() }}--}}
                        @endif
                    </td>
                </tr>
            @empty
                <tr> <td colspan="5">No Stock Found</td> </tr>
            @endforelse
        </tbody>
    </table>
</div>
