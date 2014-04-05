<?php
namespace beowh;

class bewoh {

    private $_url;
    private $_explode;
    private $_caminhoControlador = '../aplicacao/controlador/';
    private $_caminhoVisualizador = '../aplicacao/visualizador/';
    public $_controller;
    public $_action;
    public $_params;

    public function __construct() {
        $this->setUrl();
        $this->setExplode();
        $this->setController();
        $this->setAction();
        $this->setParams();
    }

    private function setUrl() {
        if(isset($_GET)){
            if(array_key_exists('url',$_GET)){
                $_GET['url'] = ($_GET['url'] != "" ? $_GET['url'] : 'index/index');
                $this->_url = $_GET['url'];
            }
        }
    }

    private function setExplode() {
        $this->_explode = explode('/', $this->_url);
    }

    private function setController() {
        $this->_controller = $this->_explode[0];
    }

    private function setAction() {
        $ac = (!isset($this->_explode[1]) || $this->_explode[1] == null || $this->_explode == 'index ' ? 'index' : $this->_explode[1]);
        $this->_action = $ac;
    }

    private function setParams() {
        unset($this->_explode[0], $this->_explode[1]);
        if (end($this->_explode) == null) {
            array_pop($this->_explode);
        }
        $i = 0;
        if (!empty($this->_explode)) {
            foreach ($this->_explode as $val) {
                if ($i % 2 == 0) {//Testa se e m�dulo de 2
                    $ind[] = $val;
                } else {//Ser for impar cria value
                    $value[] = $val;
                }
                $i++;
            }
        } else {
            $ind = array();
            $value = array();
        }
        if (count($ind) == count($value) && !empty($ind) && !empty($value))
            $this->_params = array_combine($ind, $value);
        else
            $this->_params = array();
    }

    public function getParam($name = null) {
        if ($name != null)
            if (array_key_exists($name, $this->_params))
                return $this->_params[$name];
            else
                return false;
        else
            return $this->_params;
    }
    /**
     * 
     * @author Michael Douglas Barbosa Araujo
     * @license http://www.bewoh.com.br/licensa GNU
     * @param string $pastaLayout defini qual o layout será utilizado na aplicação
     * @param object/class $templateEngine define qual template engine será utilizada para renderizar o layout e gerar a serparação de camada de aprensentação e negócio
     * @access public
     * @example $bewoh->run('',$templateEngine) Exemplo com a chamado para o executador da aplicação
     */
    public function run($pastaLayout = '',$templateEngine) {

        $templateEngine->setTemplateDir($this->_caminhoVisualizador.'layout/')
                ->setCompileDir($this->_caminhoVisualizador.'compilador/')
                ->setConfigDir($this->_caminhoVisualizador.'config/')
                ->setCacheDir($this->_caminhoVisualizador.'cache/');

        if(DIRECTORY_SEPARATOR == '/'){
            //LINUX
            $baseURL = dirname($_SERVER['SCRIPT_NAME']);
        } else if (DIRECTORY_SEPARATOR == '\\'){
            //WINDOWS
            $baseURL = dirname($_SERVER['SCRIPT_NAME']).'/';
        }      
        
        $templateEngine->assign('baseUrl', str_replace('\\', '', $baseURL));
        
        $controller_path = $this->_caminhoControlador . $this->_controller . '.class.php';
        
        $templateEngine->assign('tituloPagina','Bewoh - Admin');
        
        if (file_exists($controller_path)) {
            require_once($controller_path);
            $app = new $this->_controller();
            if (method_exists($app, $this->_action)) {
                $caminhoModelo = '../camadas/'.$this->_controller.'/'.$this->_action.'.tpl';
                
                $action = $this->_action;
                $app->$action($templateEngine,$caminhoModelo);
                
            } else {
                $controller_path = $this->_caminhoControlador . 'erro.class.php';
                $caminhoModelo = '../camadas/erro/erro500.tpl';
                require_once($controller_path);
                $app = new erro();
                $action = 'erro500';
                $app->$action($templateEngine,$caminhoModelo);
            }
        } else {
            $controller_path = $this->_caminhoControlador . 'erro.class.php';
            $caminhoModelo = '../camadas/erro/erro400.tpl';
            require_once($controller_path);
            $app = new erro();
            $action = 'erro400';
            $app->$action($templateEngine,$caminhoModelo);
            
        }
        $templateEngine->display($pastaLayout.'index.tpl');
    }
}