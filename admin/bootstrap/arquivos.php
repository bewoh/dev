<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Pasta da aplicação
	|--------------------------------------------------------------------------
	|
	| Caminho da aplicação onde encontra-se os arquivos do sistema
	|
	*/

	'aplicacao' => __DIR__.'/../aplicacao',
    
        /*
	|--------------------------------------------------------------------------
	| Pasta com as models do sistema
	|--------------------------------------------------------------------------
	|
	| Caminho da aplicação onde encontra-se os arquivos de modelo com a base de dados
	|
	*/
        
        app_path().'/aplicacao/modelo',

	/*
	|--------------------------------------------------------------------------
	| Pasta pública
	|--------------------------------------------------------------------------
	|
	| Nesta pasta estão os arquivos de visão pública da estrutura nele estarão
        | Contidos arquivos de CSS,JavaScript, fonts e etc
	|
	*/

	'public' => __DIR__.'/../html',

	/*
	|--------------------------------------------------------------------------
	| Pasta Base
	|--------------------------------------------------------------------------
	|
	| Esse caminho é o raiz da estrutura onde estão a maioria dos arquivos
        | de configuração da aplicação.
	|
	*/

	'base' => __DIR__.'/..',

	/*
	|--------------------------------------------------------------------------
	| Storage Path
	|--------------------------------------------------------------------------
	|
	| O Storage é o caminho onde serão guardados os arquivos de log, cache e etc
        | Necessários da aplicação.
	|
	*/

	'storage' => __DIR__.'/../aplicacao/storage',

);
