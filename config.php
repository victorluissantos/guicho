<?php
/*
@Atuhor: Victor Santos
@Date: 11/2014
*/
Class Config extends Connection{
/*extends Connection{

/*Declared Atribut*/
	/*App*/
	public $linkControllers = 'controller/'; //Pasta base de controller
	public $baseUrl = '/controller/login.php'; //URL definitiva do site
	public $startControll = 'login'; //Primeiro controller a ser carregada

	function __construct(){
		/*Load's*/
		require_once($this->linkControllers.$this->startControll.'.php');
		require_once('connection.php');
		/*startings*/
		$this->connection = new Connection();
	   	$this->config();
	}

	public function Config (){

		try{
			//Dados de acesso a banco
			$this->connection->setHost("your host"); //host
			$this->connection->setDatabase("your base"); //data bases
			$this->connection->setUsuario("your user");
			$this->connection->setSenha("your password");

			/*Starting function's*/
			$start = new $this->startControll();
			$this->conexao = $this->connection->connection(); //Start conection

		} catch (Exception $e) {
			header("404.php");
		}
	}
}
?>