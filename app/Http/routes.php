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

Route::get('/', 'PagesController@homepage');
Route::get('/about','PagesController@about');
Route::get('siswa', 'SiswaController@index');
// Route::get('/about',function(){
//     $halaman ='about';
//     return view('pages.about', compact('halaman'));
// });
Route::get('/hallo',function(){
    return 'Hallo laravel';
});
// Route::get('halaman-rahasia',['as' => 'secret',function(){
//     return 'hallo gaes ini halaman rahasia';
// }]);
Route::get('halaman-rahasia', [
    'as' => 'secret',
    'uses' => 'RahasiaController@halamanRahasia'
]);

Route::get('showmesecret',function(){
    return redirect()->route('secret');
});

// Route::get('siswa',function(){
//     $halaman= 'siswa';
//     $siswa = ['ramus kurniawan', 'taylor swif','mario', 'sugeng kurniawan'];
//     return view('siswa.index',compact('halaman','siswa'));
// });
