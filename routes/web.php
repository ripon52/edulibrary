<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Artisan;

Route::get("reboot",function (){
    Artisan::call("route:clear");
    Artisan::call("view:clear");
    Artisan::call("config:cache");
    Artisan::call("migrate");
    dd("Ready to use");
});

Route::get('/', function () {
    return view('front');
});


Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('tnot',function (){
    $book = \App\Book::query()->latest()->first();
    \Illuminate\Support\Facades\Notification::send(\App\User::query()->where('isAdmin',0)->get(), new \App\Notifications\NewBookAddedNotification($book));
});

Auth::routes();

Route::middleware(['web','auth'])->group(function(){

//    Route::get('/home', 'HomeController@index')->name('home');

    Route::view('home','home');

    Route::get('/impersonate/{impersonate}', 'HomeController@impersonate')->name('user.impersonate');
    Route::get('/leaveImpersonate/', 'HomeController@leaveImpersonate')->name('user.leaveImpersonate');

    Route::prefix("department")->name('department.')->group(function (){
        $department = "DepartmentController@";
        Route::get('/',$department.'index')->name('add');
        Route::get('/edit/{id}',$department.'edit')->name('edit');
        Route::post('/store',$department.'store')->name('store');
        Route::post('/update/{id}',$department.'update')->name('update');
        Route::post('/destroy/{id}',$department.'destroy')->name('destroy');
        Route::get('/view',$department.'view')->name('view');
    });

    Route::prefix("publisher")->name('publisher.')->group(function (){
        $publisher = "PublisherController@";
        Route::get('/',$publisher.'index')->name('add');
        Route::get('/edit/{id}',$publisher.'edit')->name('edit');
        Route::post('/store',$publisher.'store')->name('store');
        Route::post('/update/{id}',$publisher.'update')->name('update');
        Route::post('/destroy/{id}',$publisher.'destroy')->name('destroy');
        Route::get('/view',$publisher.'view')->name('view');
    });

    Route::prefix("writer")->name('writer.')->group(function (){
        $writer = "WriterController@";
        Route::get('/',$writer.'index')->name('add');
        Route::get('/edit/{id}',$writer.'edit')->name('edit');
        Route::post('/store',$writer.'store')->name('store');
        Route::post('/update/{id}',$writer.'update')->name('update');
        Route::post('/destroy/{id}',$writer.'destroy')->name('destroy');
        Route::get('/view',$writer.'view')->name('view');
    });

    Route::prefix("origin")->name('origin.')->group(function (){
        $origin = "OriginController@";
        Route::get('/',$origin.'index')->name('add');
        Route::get('/edit/{id}',$origin.'edit')->name('edit');
        Route::post('/store',$origin.'store')->name('store');
        Route::post('/update/{id}',$origin.'update')->name('update');
        Route::post('/destroy/{id}',$origin.'destroy')->name('destroy');
        Route::get('/view',$origin.'view')->name('view');
    });

    Route::prefix("student")->name('student.')->group(function (){
        $student = "StudentController@";
        Route::get('/',$student.'index')->name('add');
        Route::get('/edit/{id}',$student.'edit')->name('edit');
        Route::post('/store',$student.'store')->name('store');
        Route::post('/update/{id}',$student.'update')->name('update');
        Route::post('/destroy/{id}',$student.'destroy')->name('destroy');
        Route::get('/view',$student.'view')->name('view');
    });


    Route::prefix("book")->name('book.')->group(function (){
        $book = "BookController@";
        Route::get('/',$book.'index')->name('add');
        Route::get('/edit/{id}',$book.'edit')->name('edit');
        Route::post('/store',$book.'store')->name('store');
        Route::post('/update/{id}',$book.'update')->name('update');
        Route::post('/destroy/{id}',$book.'destroy')->name('destroy');
    });


    Route::prefix("stock")->name('stock.')->group(function (){
        $book = "StockController@";
        Route::get('/',$book.'index')->name('add');
        Route::get('/show-stock',$book.'show')->name('show');
        Route::get('/edit/{id}',$book.'edit')->name('edit');
        Route::post('/store',$book.'store')->name('store');
        Route::post('/update/{id}',$book.'update')->name('update');
        Route::post('/destroy/{id}',$book.'destroy')->name('destroy');
    });

    Route::prefix("supplier")->name('supplier.')->group(function (){
        $supplier = "SupplierController@";
        Route::get('/',$supplier.'index')->name('add');
        Route::get('/edit/{id}',$supplier.'edit')->name('edit');
        Route::post('/store',$supplier.'store')->name('store');
        Route::post('/update/{id}',$supplier.'update')->name('update');
        Route::post('/destroy/{id}',$supplier.'destroy')->name('destroy');
    });


    Route::prefix("book-issue")->name('bookissue.')->group(function (){
        $supplier = "BookIssueController@";
        Route::get('/',$supplier.'index')->name('add');
        Route::get('/edit/{id}',$supplier.'edit')->name('edit');
        Route::post('/store',$supplier.'store')->name('store');
        Route::post('/update/{id}',$supplier.'update')->name('update');
        Route::post('/destroy/{id}',$supplier.'destroy')->name('destroy');
        Route::get('/return-book/{id}',$supplier.'bookReturn')->name('return');
        Route::get('/returnable-book',$supplier.'returnable')->name('returnable');
        Route::get('/book-alert-book',$supplier.'bookAlert')->name('bookAlert');
        Route::post('/store-return-book/{id}',$supplier.'returnStore')->name('returnStore');
    });



    Route::prefix("book-review")->name('review.')->group(function (){
        $supplier = "ReviewController@";
        Route::get('/',$supplier.'index')->name('add');
        Route::get('/edit/{id}',$supplier.'edit')->name('edit');
        Route::post('/store',$supplier.'store')->name('store');
        Route::post('/update/{id}',$supplier.'update')->name('update');
        Route::post('/destroy/{id}',$supplier.'destroy')->name('destroy');
    });

    /* Quick Booking Start */
    Route::prefix("quick-booking")->name('quick.')->group(function (){
        $supplier = "QuickBookController@";
        Route::get('/',$supplier.'index')->name('add');
        Route::get('/edit/{id}',$supplier.'edit')->name('edit');
        Route::post('/store',$supplier.'store')->name('store');
        Route::post('/update/{id}',$supplier.'update')->name('update');
        Route::post('/destroy/{id}',$supplier.'destroy')->name('destroy');
    });
    /* Quick Booking End */

    /* Notification start */
    Route::name('notification.')->group(function(){
        $book = "BookController@";

        Route::get('/mark-as-read/{notification_id}',$book.'markAsRead')->name('markAsRead');
    });
    /* Notification end */



    /* Archive start */

    Route::prefix('Archive')->name('archive.')->group(function(){

        $archive = 'ArchiveController@';
        Route::get('/view',$archive.'index')->name('add');
        Route::get('/resources',$archive.'viewResource')->name('view');
        Route::get('/edit/{id}',$archive.'edit')->name('edit');
        Route::post('/store-archive',$archive.'store')->name('store');
        Route::post('/update-archive/{id}',$archive.'update')->name('update');
        Route::post('/delete-archive/{id}',$archive.'destroy')->name('destroy');
        Route::post('/download-archive/{id}',$archive.'download')->name('download');
    });
    /* Archive end */


});

