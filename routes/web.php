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

Route::get('/artistas',function () {
    $artistas=['Katy Perry','Enrrique Iglesisas','Ariana Grande','Taylor Swift','Shakira','Bruno Mars','Jeniffer Lopez','Pitbull','Britney Spears']
     return view('plantilla', [
         'artistas' => $artistas     
     }]);