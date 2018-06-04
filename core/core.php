<?php
class core {
	public static function run() {
		if (versao == 'dsv') { // Valida o Ambiente atual.
			$url = explode("index.php", $_SERVER['PHP_SELF']); // Pega o que foi acesado pelo usuário sem o index.php
			$url = end($url); // Pega o fim da URL.
		} 
		if (versao == 'prd') { // Valida o Ambiente atual.
			$url = '/'.(isset($_GET['q'])?$_GET['q']:''); // pega a url que foi acessada via GET.
		}
		$params = array();
		if (!empty($url) && $url != '/') { //valida se URL está vazia e diferente de barra.
			$url = explode('/', $url); // Tirando a barra da URL.
			array_shift($url);
			$currentController = $url[0]; // Passa o Controller atual.
			if (!class_exists($currentController)) { // Validando se a Classe Controller existe.
				exit("<b>ERRO:</b> A classe $currentController não existe.");
			}
			array_shift($url); // Remove a primeira chave do array.
			if (isset($url[0]) && !empty($url[0])) { // Valida se foi digitado uma Action depois do Controller.
				$currentAction = $url[0]; // Passa a Action atual.
				if (!method_exists($currentController, $currentAction)) { // Valida se existe o método na Classe.
					exit("<b>ERRO:</b> O Método $currentAction não existe.");
				}
				array_shift($url); // Remove a primeira chave do array.
			} else {
				$currentAction = 'index'; // Padrão da Action 'index'.
			}
			if (count($url) > 0) { // Valida se a URL tem paramentros depois da Action.
				$params = $url;
			}
		} else { // Caso o usuário não acessa nada.
			$currentController = 'home';
			$currentAction = 'index';
		}
		$c = new $currentController(); // Instancia a classe Controller.
		call_user_func_array(array($c, $currentAction), $params); // Carrega o Controller com as Actions e os params.
	}
}