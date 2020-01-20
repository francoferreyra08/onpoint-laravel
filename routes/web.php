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
    return view('index');
});
route::get('/formulario', function(){
return view("formulario");

});
route::post('/formulario', 'formularioController@insertar');


route::get('/onpoint', function(){
return view("index");
});

route::get('/home', function(){
return view("home");

});
route::post('/onpoint', 'indexController@logear');
