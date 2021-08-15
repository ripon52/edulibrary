<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>phone</th>
                <th>address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse(suppliers() as $key=>$supplier_list)
                <tr>
                    <td>{{ $supplier_list->name }}</td>
                    <td>{{ $supplier_list->phone }}</td>
                    <td>{{ $supplier_list->address }}</td>
                    <td>
                        @if(isset($supplier) && $supplier->id == $supplier_list->id)
                            <a href="#" class="badge badge-rounded badge-success">Updating....</a>
                         @else
                            <a href="{{ route('supplier.edit',$supplier_list->id) }}" class="btn-success btn btn-sm"> <i class="fa fa-edit "></i> </a>
                            {{ Form::open(['route'=>['supplier.destroy',$supplier_list->id],"method"=>'post',"class"=>"destroyForm"]) }}
                                <button type="submit" class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure?')"  > <i class="fa fa-trash"></i> </button>
                            {{ Form::close() }}
                        @endif
                    </td>
                </tr>
            @empty
                <tr> <td colspan="5">No SupplierFound</td> </tr>
            @endforelse
        </tbody>
    </table>
</div>
