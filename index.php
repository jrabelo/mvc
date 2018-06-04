<?php
/**
 * Inicio da aplicação
 * @author  João Batista Marques Rabelo
 * @link    http://www.jsoftweb.com.br
 * @version 2.0
 */
session_start();
require 'config.php';
spl_autoload_register(function($class) {
	if (file_exists('controllers/'.$class.'.php')) { // Se arquivo existe.
		require_once 'controllers/'.$class.'.php'; // Carrega a classes da pasta Controller.
	} elseif (file_exists('models/'.$class.'.php')) { // Se arquivo existe.
		require_once 'models/'.$class.'.php'; // Carrega a classes da pasta Model.
	} elseif (file_exists('core/'.$class.'.php')) { // Se arquivo existe.
		require_once 'core/'.$class.'.php'; // Carrega a classes da pasta Core.
	} elseif (file_exists('libs/'.$class.'.php')) { // Se arquivo existe.
		require_once 'libs/'.$class.'.php'; // Carrega a classes da pasta Lib.
	}
});
core::run();
?>