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
    return view('masterpages.inicio_mp');
});

Route::get('/vista1', function () {
    //return view('subVistas.vista1');
    $html = View::make('subVistas.vista1')->render();
    return $html;
});
Route::get('/vista2', function () {
    //return view('subVistas.vista1');
    $html = View::make('subVistas.vista2')->render();
    return $html;
});





Route::get("master", function(){
	return view("subVistas.view1");
});

	Route::get("view1", function(){
	return view("subVistas.view1");
});
Route::get("view2", function(){
	return view("subVistas.view2");
});

Route::get("view3", function(){
	return view("subVistas.view3");
});





Route::get('activar', function () {
    
   Session::put('activar', '1');
	//dd(Session::get('activar'));
    return redirect()->back();
    
});
Route::get('desactivar', function () {
    
  Session::forget('activar');
    return redirect()->back();
    
});
