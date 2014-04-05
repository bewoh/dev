<?php
/**
 * @author Michael Douglas <michaeldouglas010790@gmail.com>
 * @author Bruno Fonseca <>
 */
date_default_timezone_set('America/Los_Angeles');
error_reporting(E_ALL);
ini_set('display_errors','On');
set_include_path(implode(PATH_SEPARATOR, array(
    get_include_path(),
    '../vendor/',
)));
require 'autoload.php'; 
/* Executa a aplicação da bewoh */
$bewoh = new \beowh\bewoh();

$bewoh->run('',new Smarty());