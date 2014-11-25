<?php
/*
@Author: Victor Santos
@Date : 18/11/2014
@Function: Setar Url de destino em caso de pulo da rota comum
*/

    spl_autoload_extensions(".php"); // comma-separated list
    spl_autoload_register();
	
	function my_autoload ($pClassName) {
		include(__DIR__ . "/" . $pClassName . ".php");
    }

	spl_autoload_register('my_autoload');
	$config = new Config();
?>