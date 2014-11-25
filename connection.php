<?php
/*
@Author: victor Santos
@Date: 11/2014
*/
Class Connection{

	/*BDD*/
	private $host;
	private $usuario;
	private $senha;
	private $database;
	public $con;

	function __construct() {
	   //parent::__construct();
	   //$this->Connection();
	}

	public function Connection(){
		try
		{
			//Conectar
			$this->con = new PDO("mysql:host=".$this->getHost().";dbname=".$this->getDatabase()."", $this->getUsuario() , $this->getSenha()); 
			$this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $this->con;
		}
		catch(PDOException $erro)
		{
			die($erro->getMessage().' Error na Conexao !');
		}
	}

	/*Created Gets and Sets*/
	public function getHost(){
		return $this->host;
	}
	public function getUsuario(){
		return $this->usuario;	
	}
	public function getSenha(){
		return $this->senha;
	}
	public function getDatabase(){
		return $this->database;
	}

	public function setHost( $host ){
		$this->host = $host;
	}
	public function setUsuario( $usuario ){
		$this->usuario = $usuario;	
	}
	public function setSenha( $senha ){
		$this->senha = $senha;
	}
	public function setDatabase( $database ){
		$this->database = $database;
	}
}
?>