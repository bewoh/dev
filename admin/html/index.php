<?php
/**
 * Bewoh - THE PHP FRAMEWORK WOLF PACK
 * @package  Bewoh
 * @author Michael Douglas <michaeldouglas010790@gmail.com>
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

/*
|--------------------------------------------------------------------------
| Configurações iniciais
|--------------------------------------------------------------------------
|
| Em bootstrap init são realizados as configurações para execução da aplicação
|
*/

$bewoh = require_once __DIR__.'/../bootstrap/init.php';

/*
|--------------------------------------------------------------------------
| Execução do run da aplicação
|--------------------------------------------------------------------------
|
| Após todas as configurações feitas será chamado o método que executa o 
| o framework e com suas configurações já feitas.
|
*/

$bewoh->run('',new Smarty());