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
Route::get('foo', function () {
    return 'Hello World';
});

Route::get('/', function () {
    return view('fakultet');
});


/**
 * Ovo su rute za ZYRO template
 */

Route::get('Home',function(){
  return Redirect::to('/zyro/1.php');})->name('Home');
Route::get('Popular',function(){
  return Redirect::to('/zyro/4.php');})->name('Popular');
Route::get('Humour',function(){
  return Redirect::to('/zyro/5.php');})->name('Humour');
Route::get('Movies',function(){
  return Redirect::to('/zyro/2.php');})->name('Movies');
Route::get('Contacts',function(){
  return Redirect::to('/zyro/3.php');})->name('Contacts');
// Ova ruta pokriva sve gornje ako se ide u poddirektorij 'zyro'
Route::get('/zyro/{url}', function ($url) {
  return redirect()->route($url);  
});

// Može ovako:
//  Route::resource("Zupanija","ZupanijaController")->middleware('auth');
//  Route::resource("Mjesto","MjestoController")->middleware('auth');

// Može i ovako: 
Route::group(['middleware'=>['auth']],function(){
   Route::resource("Zupanija","ZupanijaController");
  Route::resource("Mjesto","MjestoController");
});


Route::get('/korisnici', 'usercontroller@getusers');
Route::get('/s', 'usercontroller@studenti');

Route::get('/neki-blade-test', function () {
    return view('test');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
