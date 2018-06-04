<?php
class view {
	public static function loadView($viewName, $viewData = array()) {
		extract($viewData); // Transforma a chave do array em variavel.
		$file = 'views/'.$viewName.'.html';
		if (file_exists($file)) {
			include 'views/'.$viewName.'.html';
		} else {
			echo '<b>Erro:</b> View '.$viewName.' não existe.<br>';
			echo '<b>Caminho:</b> '.$file;
		}
	}
	public static function loadTemplate($viewName, $viewData = array()) {
		include 'views/template.html';
	}
	public static function loadViewInTemplate($viewName, $viewData = array()) {
		extract($viewData); // Transforma a chave do array em variavel.
		$file = 'views/'.$viewName.'.html';
		if (file_exists($file)) {
			include 'views/'.$viewName.'.html';
		} else {
			echo '<b>Erro:</b> View '.$viewName.' não existe.<br>';
			echo '<b>Caminho:</b> '.$file;
		}
	}
	public static function loadLibs($lib) {
		if (file_exists('libs/'.$lib.'.php')) {
			include 'libs/'.$lib.'.php';
		}
	}
	public static function post() {
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			return true;
		} else {
			return false;
		}
	}
}