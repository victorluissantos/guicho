<?php
/*
@Author: Victor Santos
@Data: 11/2014
@Function: Controllar transfuчуo entre model e controller
*/
require_once(dirname(dirname(__FILE__)).'/config.php');
class Main extends Config{

	//public $base = dirname(__FILE__);

	function __construct(){
	   //$this->index();
	}

	public function getModel($modelName){

		require_once(dirname(dirname(__FILE__)).'/'.$this->modelName.'.php');
	}

}

/*
require_once(dirname(dirname(__FILE__)).'/config.php');
class Main extends Config{

	//public $base = dirname(__FILE__);

	function __construct(){
	   $this->index();
	}

	public function index(){
		require_once($this->startControll.'.php');
		$this->controller = new $this->startControll();
	}

}
*/
?>