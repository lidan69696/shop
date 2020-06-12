<?php 

/**
 * 
 */
class Router{
	
	function __construct()
	{
		$this->rout = explode('/', $_GET['url']) ;
		if ($this->rout[0] == '') {
			$this->rout[0] = 'home';
		}
		if (isset($this->rout[0])) 	$this->controller = $this->rout[0].'Controller';
		if (isset($this->rout[1]))  $this->action = 'action'.ucfirst($this->rout[1]);
		if (isset($this->rout[2]))	$this->id = $this->rout[2];
	}
	public function run(){
		if (is_file('public/controllers/'. $this->controller.'.php')) {
			require_once 'public/controllers/'. $this->controller.'.php';
			$object = new $this->controller;
			if (method_exists($object,$this->action)) {
				$method = $this->action;
				$object->$method($this->id);
			}
			else $object->actionIndex();;
		}
		else require 'public/views/404.php';
	}
}