<?php 

/**
 * 
 */
class homeController{
	
	function __construct()
	{
	}
	public function actionIndex(){
			echo "HOME";

	}
	public function actionTest($id)
	{
		echo "TEST".$id;
	}
}