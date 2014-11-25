<?php
/*
@Author: Victor Santos
@Date: 11/2014
@Function: Controller base de desenvolvimento. CRUD for Table
*/
Class Login{

	function __construct(){
		/*verifico se tem uma função a ser executada*/
		require_once('main.php');
		if(isset($_POST['funcao'])){
			$this->$_POST['funcao']();
		}else{
	   		$this->index();
		}
		$this->main = new Main();
		$this->controller = 'http://'.$_SERVER['HTTP_HOST'].'/controller/login.php';
	}

	public function index($msg = null){

		/*setando valores de configuração especificos a pagina*/
		$this->title = "SIS Distribuidora";
		$this->singular = 'login';
		require_once(dirname(dirname(__FILE__)) . '/view/index.php');

	}

	public function logar($usuario = null, $senha = null ){
		try{
			if(!isset($_POST['email'])){
				if(!isset($_POST['key'])){
					die('ra');
					$this->main->getModel('usuario');

					$this->usuario = new Usuario();
					$this->usuario->finUser();
				}
			}else{
				$msg = "Login ou senha inválido no dominio !";
				$msg = urlencode($msg);
				header('Location: http://'.$_SERVER['HTTP_HOST'].'/controller/login.php?msg='.$msg);
			}
		}catch(Execption $e){
			die('error #01');
		}
	}
}
?>