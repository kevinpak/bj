<?php
class Controller_404 extends Controller
{
  function action_index()
  {	
    $this->view->load('pages/404_view');
  }

}
?>