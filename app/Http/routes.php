<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('pages/homepage');
});
Route::get('/about',function(){
    return view('pages/about');
});
Route::get('/hallo',function(){
    return 'Hallo laravel';
});
Route::get('halaman-rahasia',['as' => 'secret',function(){
    return 'hallo gaes ini halaman rahasia';
}]);
Route::get('showmesecret',function(){
    return redirect()->route('secret');
});

Route::get('siswa',function(){
    $siswa = ['ramus kurniawan', 'taylor swif','mario', 'sugeng'];
    return view('siswa.index', compact('siswa'));
});