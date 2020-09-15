<?php
class Controller_ajax extends Controller {

	function action_index(){
		extract($_POST);
		//Ajax
		if(AjaxQuery())
		{
			if($TypeAjax == "alertSession"){
				unset($_SESSION[$ContentSession]) ;
				echo "Succes";
			}

		}
	}



}

?>