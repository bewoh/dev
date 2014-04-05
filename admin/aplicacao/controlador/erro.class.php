<?php
namespace beowh;
class erro {
    public function erro400($templateEngine,$caminhoTemplate){
        $templateEngine->assign('nomeModelo',$caminhoTemplate);
    }
    public function erro500($templateEngine,$caminhoTemplate){
        $templateEngine->assign('nomeModelo',$caminhoTemplate);
    }
}