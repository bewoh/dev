<?php
define('BEWOH_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Registro do Composer Auto Loader
|--------------------------------------------------------------------------
|
| Composer irá atuar como gerenciador de bibliotecas
|
*/
require __DIR__.'/../vendor/autoload.php';

\beowh\ClassLoader::addDirectories(require __DIR__.'/arquivos.php');
\beowh\ClassLoader::register();