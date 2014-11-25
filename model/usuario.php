<?php
require_once(dirname(dirname(__FILE__)).'/config.php');
class Usuario extends Config{

	public $tableName = 'usuario';

	function __construct(){
		require_once(dirname(dirname(__FILE__)).'/model/usuario.php');
	   	$this->config();
	}

	public function getAll(){
		return null;
	}

	public function findUser($usuario = null, $senha = null){
		
		if($this->usuaior == 'admin' && $this->senha == '123')
			return true;
		else
			return false;
	}

}
?>