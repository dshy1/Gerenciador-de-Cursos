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

Route::get('/', ['as' => 'site.home', 'uses' => 'portalController@HomeSite']);

Route::get('/portal', ['as' => 'portal.dashboard', 'uses' => 'portalController@portalIndex'])->middleware('auth');
Route::get('/portal/cursos/add', ['as' => 'curso.add', 'uses' => 'portalController@CadastrarCurso'])->middleware('auth');


Route::get('/portal/alunos/add', ['as' => 'aluno.add', 'uses' => 'portalController@CadastrarAluno'])->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
