<div class="table-responsive">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Book</th>
            <th>ISBN</th>
            <th>Total </th>
            <th>Book issued</th>
            <th>Available</th>
        </tr>
        </thead>
        <tbody>
        @forelse(bookStocks() as $key=>$book)

            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->isbn }}</td>
                <td>{{ $book->stocks->sum('qty') ?? 0 }}</td>
                <td>{{ $book->bookIssued->count() }}</td>
                <td> {{ ($book->stocks->sum('qty') ?? 0)-$book->bookIssued->count() }} </td>
            </tr>

        @empty
            <tr> <td colspan="8" class="text-center">No Book IssueFound</td> </tr>
        @endforelse
        </tbody>
    </table>
</div>
