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
Route::get('/portal/cursos/adicionar', ['as' => 'curso.add', 'uses' => 'portalController@CadastrarCurso'])->middleware('auth');
Route::post('/portal/cursos/salvar', ['as' => 'curso.salvar', 'uses' => 'portalController@SalvarCadastrarCurso'])->middleware('auth');

Route::get('/portal/alunos', ['as' => 'aluno.lista', 'uses' => 'portalController@ListaAlunos'])->middleware('auth');
Route::get('/portal/alunos/adicionar', ['as' => 'aluno.add', 'uses' => 'portalController@CadastrarAluno'])->middleware('auth');
Route::post('/portal/alunos/salvar', ['as' => 'aluno.salvar', 'uses' => 'portalController@SalvarCadastrarAluno'])->middleware('auth');

Route::get('/portal/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

Route::get('/portal/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/portal/login', 'Auth\LoginController@login');


/*
Auth::routes();
*/