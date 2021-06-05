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

// Route::get('/', function () {
//     return view('translate');
// });
Route::get('/','TranslateController@index');
Route::post('translatefile','TranslateController@store')->name('translate.store');
Route::post('orderCreation','PaymentController@orderCreation')->name('payment');
 Route::get('paymentsuccess','PaymentController@getsuccess')->name('paymentsuccess');

Route::get('langPrice/{id}','TranslateController@getLangPrice');
Route::get('cityPrice/{id}','TranslateController@getCityPrice');
Route::get('officePrice/{id}','TranslateController@getOfficePrice');
Route::get('getTranslatedCode/{id}','TranslateController@getTranslatedCode');




// Route::get('success',function(){
//     $message = 'Booking Paid Successfully  and save this code for tracking #5415GDFKLL';
//     return view('paymentsuccess',compact('message'));
// });



Route::get('translatefile','TranslateController@search')->name('translatedFiles.search');

Route::post('order-Translate','TranslateController@order')->name('order.translate');



Route::get('appointment/office/{id}','DocumentaryController@office_appointment')->name('office.appointment');
Route::post('documentary','DocumentaryController@store')->name('doc.store');



Route::group(['prefix' => 'admin'] , function () {
Auth::routes(['register' => false]);

});




Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'] , function () {
    Route::get('dashboard', 'TranslateController@dashboard')->name('home');
Route::get('translate','TranslateController@index')->name('translate.index');
Route::get('edit/translate/{id}','TranslateController@edit')->name('edit.translate');
Route::put('update/translate/{id}','TranslateController@update')->name('update.translate');

Route::delete('translate/{id}','TranslateController@destroy')->name('translate.destroy');
Route::resource('slider', 'SliderController');
Route::resource('team', 'teamController');
Route::resource('office', 'officeController');
Route::resource('appointment', 'officeAppointmentController');
Route::get('appointment/create/{id}','officeAppointmentController@create')->name('create.appointment');
Route::resource('documentary','DocumentaryController');

Route::resource('language', 'LangController');
Route::resource('city', 'CityController');
Route::resource('translated_files', 'TranslatedFilesController');
Route::resource('order', 'OrdersController');

Route::get('create-translate_files/{id}','TranslatedFilesController@create')->name('translate_files.create');
Route::get('create-translate_files','TranslatedFilesController@createOnPaper')->name('translate_files.createOnPaper');


Route::post('upload/image', 'ImageController@uploadPhoto')->name('upload.image');
Route::post('remove/image', 'ImageController@removePhoto')->name('remove.image');

});