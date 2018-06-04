<?php
class conexao {
	private static $pdo;
	public static function getInstance() {
		global $config;
		if (!isset(self::$pdo)) {
			switch (drive) {
				case 'sqlvr':
					try {			
						$driver = 'DRIVER={SQL Server};SERVER='.$config['hostsqlvr'].';DATABASE='.$config['dbnamesqlvr']; 
						self::$pdo = odbc_connect($driver, $config['usersqlvr'], $config['passsqlvr']);
					} catch (PDOException $e) {
			    		exit('Erro ao conectar no Banco de Dados SQL Server: '.$e->getMessage());
					}
				break;
	      		case 'mysql':
					try {
						self::$pdo = new PDO('mysql:dbname='.$config['dbnamemysql'].';charset=utf8;host='.$config['hostmysql'], $config['usermysql'], $config['passmysql']);
						self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					} catch (PDOException $e) {
			    		exit('Erro ao conectar no Banco de Dados Mysql: ' . $e->getMessage());
					}
	      		break;
	      		case 'oracle':
					try {
						self::$pdo = new PDO('oci:dbname='.$config['hostoracle'], $config['useroracle'], $config['passoracle']);
						self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					} catch (PDOException $e) {
			    		exit('Erro ao conectar no Banco de Dados Oracle: ' . $e->getMessage());
					}
	      		break;	
	      	}
		}
		return self::$pdo;
	} 
}