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

Route::get('/', 'NouController@formulario');
Route::get('biorritmo',function(){
    return redirect("/");
});

Route::get('biorritmo/form',function(){
    return redirect("/");
});


Route::post('biorritmo/resultado','NouController@calcular');
Route::get('biorritmo/resultado',function(){
    return redirect("/");
});
