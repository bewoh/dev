<?php
class douglas {
    public function index($templateEngine,$caminhoTemplate){
        $templateEngine->assign('nomeModelo',$caminhoTemplate);
        $templateEngine->assign('nomeTeste','Bruno !!!');
    }
    public function teste($templateEngine,$caminhoTemplate){
        $templateEngine->assign('nomeModelo',$caminhoTemplate);
        $templateEngine->assign('nomeTeste','Michael !!!');
    }
}