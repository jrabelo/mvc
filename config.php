<?php
define('versao', 'dsv'); // Alterar para 'prd' quando for colocar em produção.
define('drive', 'mysql'); // Drives = mysql - sqlvr - oracle
define('URL', 'http://localhost/mvc'); // Sempre alterar quando iniciar novo projeto.

    global $config;
	$config = array();

	$host = '(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = 127.0.0.1)(PORT = 1521))
           (CONNECT_DATA = (SERVER = DEDICATED) (SID = BANCO)))';

	if (versao == 'dsv') {
		if (drive == 'sqlvr') {
			$config['dbnamesqlvr'] = '';
			$config['hostsqlvr']   = '';
			$config['usersqlvr']   = '';
			$config['passsqlvr']   = '';
		}
		if (drive == 'mysql') {
			$config['dbnamemysql'] = '';
			$config['hostmysql']   = '127.0.0.1';
			$config['usermysql']   = 'root';
			$config['passmysql']   = '';
		}
		if (drive == 'oracle') {
			$config['hostoracle']   = $host;
			$config['useroracle']   = '';
			$config['passoracle']   = '';
		}
	} 
	
	if (versao == 'prd') {
		if (drive == 'sqlvr') {
			$config['dbnamesqlvr'] = '';
			$config['hostsqlvr']   = '';
			$config['usersqlvr']   = '';
			$config['passsqlvr']   = '';
		}
		if (drive == 'mysql') {
			$config['dbnamemysql'] = '';
			$config['hostmysql']   = '127.0.0.1';
			$config['usermysql']   = 'root';
			$config['passmysql']   = '';
		}
		if (drive == 'oracle') {
			$config['hostoracle']   = $host;
			$config['useroracle']   = '';
			$config['passoracle']   = '';
		}
	}
?>