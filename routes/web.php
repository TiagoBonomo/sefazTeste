<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('/consultar-debito/{numeroDebito}',['uses'=>'DebitoController@numerodebito'])->where('numeroDebito','[0-9]{8}');

route::get('/consultar-debito/{sitaucao}',['uses'=>'DebitoController@situacao'])->where('situacao','(ativo|pago)');

route::get('/consultar-debito/{sitaucao?}/{inscricaoEstadual?}',['uses'=>'DebitoController@situacaoinscricao'])->where('situacao','(ativo|pago)')->where('inscricaoEstadual','[0-9]{9}');

route::get('/consultar-debito/{inscricaoEstadual}',['uses'=>'DebitoController@inscricao'])->where('inscricaoEstadual', '[0-9]{9}');







