<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function () {
    return view('backend.pages.index');
})->name('admin');

Route::get('/registration', 'Backend\PagesController@index')->name('register');

Route::get('/table','Backend\TableController@table')->name('table');
Route::get('/user_table','Backend\TableController@user_table')->name('user_table');

Route::post('/store','Backend\HomeController@store')->name('store');
Route::post('/delete/{id}', 'Backend\HomeController@delete')->name('delete');

Route::get('/downloadPDF/{id}','Backend\PdfController@downloadPDF')->name('pdfdownload');

Route::get('/excel-table', 'Backend\ExcelController@table')->name('excel-table');

Route::get('export', 'Backend\ExcelController@export')->name('export');

Route::get('/add-student', 'Backend\StudentController@addStudent')->name('add-student');
Route::post('import', 'Backend\StudentController@import')->name('import');


Route::get('get-districts/{id}', function($id){
  return json_encode(App\District::where('division_id', $id)->get());
});
