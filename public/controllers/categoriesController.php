<?php 

/**
 * 
 */
class categoriesController{
	
	function __construct()
	{
	}
	public function actionIndex(){
			require 'public/models/getCategories.php';
			require 'public/views/categories.php';


	}
	public function actionCategory($id)
	{
		require 'public/models/getCategory.php';
		require 'public/views/category.php';
	}
}