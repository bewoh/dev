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

/*
function autoloadModel($className) {
    $vendorDir = dirname(dirname(__FILE__));
    $baseDir = dirname($vendorDir);    
    $filename = $baseDir."/admin/aplicacao/modelo/" . $className . ".php";
    echo $filename;
    if (is_readable($filename)) {
        require $filename;
    }
}

spl_autoload_register("autoloadModel");*/