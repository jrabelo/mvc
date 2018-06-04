MVC - Mini Framework - Versão 2.0

	- Alterado o Core

		- Alteração na Classe Core.
			- Motivo:
				- Foi retirado uma momenclatura 'Controller', onde era usada para identificar a classe controller.

		- Retirado a Classe Controller.
			- Motivo:
				- Não tinha necessidade de usar essa Classe para controlar as Views.

		- Retirado a Classe Model.
			- Motivo:
				- A aplicação ficava conectada direto, quando iniciava a Classe Model no seu contrutor.

		- Criado a Classe View, onde controla as chamadadas das Views.
			- Motivo:
				- Controlar todos as chamadas da Views e as passagens de dados e tratar exceções de erros.

		- Criado a Classe Conexao. 
			- Motivo:
				- Essa classe gerencia a instancia criada apenas uma vez alocada na memória.

		- Criado a Helper.
			- Motivo:
				- Essa classe tem o objeto de ajudar com alguns métodos conforme a necessidade na aplicação.


	- Alteração no arquivo Index.php
		- Motivo:
			- Na função spl_autoload_register() foi retirado a nomenclatura 'Controller', onde identificar a classe controller.

	- Alteração no arquivo Config.php
		- Motivo:
			- Foi deifinido um constante 'drive', onde é informado o drive(Nome do Banco), por exemplo: (mysql - sqlvr - oracle).
			- Criado um constante 'versao' para melhorar o controle quando for subir na hospedangem, assim tem que alterar essa variavel para 'prd' = produção e 'dsv' = desenvolvimento.

	Observações:

		1) A principal alteração feita nesse mini framework é que está totalmente voltado para o padrão de desenvolvimento.

		2) Os arquivos da pasta assets são da versão bootstrap 4.
