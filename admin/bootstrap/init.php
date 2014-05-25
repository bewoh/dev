<?php
/*
|--------------------------------------------------------------------------
| Criação da aplicação
|--------------------------------------------------------------------------
|
| Instância de criação do objeto pai da estrutura aqui nós estenciamos e 
| Executamos as configurações necessárias para execução do FrameWork
|
*/

$bewoh = new \beowh\bewoh();


/*
|--------------------------------------------------------------------------
| Retorna a estância do objecto aplicação da FrameWork
|--------------------------------------------------------------------------
|
| Esse script é responsável por retornar a estância do objeto rensposável por ser
| o objeto pai da aplicação.
|
*/

return $bewoh;