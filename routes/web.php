<?php
//importação do controle (necessario para as versoes 8 do laravel)
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\PrincipalController;
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
/* 
Verbos http mais utilizados

get, post, put, patch, delete, options

a rota e definda passando o tipo de metodo(verbo) após os :: e entre () passamos a url e a função de callback
Route::get($uri, $callback)
*/

//importação do controle (necessario para as versoes 8 do laravel)


//definindo rota utilizando controle nas versão 8 do laravel
Route::get('/', [PrincipalController::class, 'principal']);

Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos']);

Route::get('/contato', [ContatoController::class, 'contato']);

