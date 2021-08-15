<?php
    use App\User;
    use App\Student;
    use App\Writer;
    use App\Department;
    use App\Origin;
    use App\Stock;
    use App\Book;
    use App\BookIssue;
    use App\Fine;
    use App\Publisher;

    use Illuminate\Support\Facades\DB;

    function departments() {
        return Department::query()->orderBy('name')->get() ?? null;
    }

    function users() {
        return User::query()->where('isAdmin','!=',1)->orderBy('name')->get() ?? null;
    }

    function publishers() {
        return Publisher::query()->orderBy('name')->get() ?? null;
    }

    function writers() {
        return Writer::query()->orderBy('name')->get() ?? null;
    }

    function origins() {
        return Origin::query()->orderBy('name')->get() ?? null;
    }


    function students() {
        return Student::query()->orderBy('name')->get() ?? null;
    }

    function department_pluck(){
        return Department::query()->orderBy('name')->pluck('name','id');
    }

    function writer_pluck(){
        return Writer::query()->orderBy('name')->pluck('name','id');
    }

    function publisher_pluck(){
        return Publisher::query()->orderBy('name')->pluck('name','id');
    }

    function origin_pluck(){
        return Origin::query()->orderBy('name')->pluck('name','id');
    }

    function books() {
        return Book::query()->orderBy('title')->get() ?? null;
    }

    function stocks() {
        return Stock::query()->orderByDesc('id')->get() ?? null;
    }

    function suppliers() {
        return \App\Supplier::query()->orderByDesc('id')->get() ?? null;
    }

    function bookissues() {
        return \App\BookIssue::query()->orderByDesc('id')->get() ?? null;
    }

    function bookAlerts() {
        return  BookIssue::query()->where('status',0)->get() ?? null;
    }

    function availableBooks() {
            /*
                1. Book
                2. Stock
                3. BookIssue
            */

        $books = Book::query()
                ->selectRaw('SUM(stocks.qty)-COUNT(book_issues.book_id) as availableBooks')
            ->join('stocks','stocks.book_id','=','books.id')
            ->join('book_issues','book_issues.book_id','=','books.id')
            ->get();

       return $books;
    }

    function bookStocks() {
        return Book::query()
                    ->orderBy('title')
                    ->get() ?? null;

    }

    function reviews(){
        return \App\Review::query()->get() ?? null;
    }

    function stars(){
        return [
                "1"=>"1 Star",
                "2"=>"2 Star",
                "3"=>"3 Star",
                "4"=>"4 Star",
                "5"=>"5 Star",
        ];
    }

    function resources(){
        return \App\Archive::query()->orderBy('title')->get() ?? 0;
    }


    function returnedAmount(){
        $book = Book::query()
            ->whereHas('stocks',function($query){
                $query ->SelectRaw('SUM(stocks.qty) as quantity') ;
            })
            ->get();
        return $book;
    }
