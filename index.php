<?php
	if(!file_exists(dirname(__FILE__).'/system/configurations/sys_configs.conf')) exit(header('Location:/ornotuu'));
	define('HOST', dirname(__FILE__));
	define('SYSTEM', 'NUKURACMS');
	require(HOST.'/system/System.php');
	session_start();
	//System классыны чакырабыз
	$System = System::set();
	//Калыпты чакырабыз
	$System->printTemplate();
?>