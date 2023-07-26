<?php
//importação do controle (necessario para as versoes 8 do laravel)
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\TesteController;
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
Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');

Route::prefix('app')->group(function(){

Route::get('/cliente', function(){  return 'Cliente'; })->name('app.cliente');
Route::get('/fornecedor', function(){  return 'Fornecedor'; })->name('app.fornecedor');
Route::get('/produto', function(){  return 'produto'; })->name('app.produto');

});
/*a função de fallback e chamada quando uma rota não e encontrada ela pode receber uma função de callback como também
um controlador para exibir uma view personalizada
*/
Route::fallback(function(){
 return 'Pagina não encontrada';
});

/*______________________________________________________________________________________
|exemplo de rotas de redirecionamento onde a rota 1 redireciona para a rota 2           |
|esse redirecionamento pode ser usado tambem dentro de um controle para redirecionar    |
|para uma cota após uma condição                                                        |
|________________________________________________________________________________________*/
Route::get('/rota1', function(){ return redirect(route('rota2')); })->name('rota1');
Route::get('/rota2', function(){  return 'Rota2'; })->name('rota2');

/*______________________________________________________________________________________
|exemplo de envio de parametro pela rota, parametros obrigatorios e opcionaos           |
|para paramentros opcionais acrecetamos ? na prete do nome do parametro                 |
|ps parametros so pode ser opcional seguindo a seguencia da direita para a esquerda     |
|________________________________________________________________________________________*/
//exemplo de parametro enviado para função de callback
Route::get('/teste1/{nome}/{email?}', function($nome, $email = 'Email não informado'){  return "$nome - $email";})->name('teste1');
/*________________________________________________________________________________________
|exemplo de parametro enviado para Controller, na definicção do controller na rota        |
|o laravel tem a inteligencia de saber que o metodo do controle vai receber os parametros |
|então nao e necessario inforlalos dentro da chamada do controle na rota                  |
|__________________________________________________________________________________________*/
Route::get('/teste2/{nome}/{categoria_id}/{mensagem?}', [TesteController::class, 'teste'])->name('teste2')->where('categoria_id', '[0-9]+');