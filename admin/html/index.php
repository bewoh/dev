<?php
/**
 * Bewoh - A PHP Framework
 * @package  Bewoh
 * @author Michael Douglas <michaeldouglas010790@gmail.com>
 * @author Bruno Fonseca <brucfo@gmail.com>
 */

/*
|--------------------------------------------------------------------------
| Registro de auto load da FrameWork
|--------------------------------------------------------------------------
|
| O Composer irá atuar como ferramenta para gerenciamento de depêndencias da estrutura
| Porém foi necessário criar o autoload para gerenciar adicionar os novos objetos da
| estrutura
|
*/

require __DIR__.'/../bootstrap/autoload.php';
\beowh\ClassLoader::addDirectories(array(
    app_path().'/aplicacao/modelo',
    app_path().'/aplicacao/teste',
));

\beowh\ClassLoader::register();

/* Executa a aplicação da bewoh */
$bewoh = new \beowh\bewoh();
$bewoh->run('',new Smarty());