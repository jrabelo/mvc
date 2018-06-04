<?php
class home {
	public function index() {
		$dados = array();
		view::loadTemplate('home', $dados);
	}
}
?>