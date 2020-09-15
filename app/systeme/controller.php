<?php
class Controller extends Template{
	
	public $model;
	public $view;
	public $template;
	
	function __construct()
	{
		$this->view = new View();
		$this->template = new Template();
	}
	
	
}

?>