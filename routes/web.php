<?php

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

/*Route::get('/', function () {
    return 'Olá, seja bem-vindo ao laravel!';
});*/

Route::get("/", "PrincipalController@principal");

Route::get("/sobre-nos", "SobreNosController@sobreNos");

Route::get("/contato", "ContatoController@contato");

// nome, categoria, assunto, mensagem
Route::get("/contato/{nome?}/{idCategoria?}", 
    function(string $nome="Desconhecido", int $idCategoria=1){
        echo "Estamos aqui! Bem-vindo {$nome}. Sua categoria {$idCategoria}!";
    }
);
// nome, categoria, assunto, mensagem
Route::get("/contato/{nome}/{idCategoria}", 
    function(
        string $nome="Desconhecido",
        int $idCategoria=1
    ){
        echo "Estamos aqui! Bem-vindo {$nome}. Sua categoria {$idCategoria}!";
    }
)->where('nome', '[A-Za-z]+')->where("idCategoria", "[0-9]+");
// Route::get($uri, $callback);

/* verbo http

get
post
put
patch
delete
options

*/