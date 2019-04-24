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
    return view('home');
});

Route::get('/portal', ['as' => 'portal.dashboard', 'uses' => 'portalController@portalIndex']);
Route::get('/portal/cursos/add', ['as' => 'curso.add', 'uses' => 'portalController@AdicionarCurso']);
