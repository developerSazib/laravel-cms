<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
//    $articles = App\Atricle::all();
    return view('about', [
        'articles' => App\Atricle::take(2)->latest()->get()
    ]);
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
