<?php

class Template
{
  public $model;
	public $view;
  
  function load(string $template_view,$data = null){
    $this->view = new View();

    $this->view->load('defaults/template_header',$data);
    include "app/views/template-test/defaults/template_main.php";
    $this->view->load('defaults/template_footer',$data);
  }
}



?>