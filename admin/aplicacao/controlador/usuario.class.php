<?php
class usuario {
    public function index($templateEngine,$caminhoTemplate){
        $db = new teste();
        $db = new michaeldouglas();
        $templateEngine->assign('nomeModelo',$caminhoTemplate);
        $templateEngine->assign('nomeTeste','Bruno !!!');
    }
    public function teste($templateEngine,$caminhoTemplate){
        $templateEngine->assign('nomeModelo',$caminhoTemplate);
        $templateEngine->assign('nomeTeste','Michael !!!');
    }
}