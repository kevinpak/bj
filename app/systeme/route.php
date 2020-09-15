<?php
class Route {
  
  function start(){
    $controller_name = 'Main';
    $action_name = 'index';
    $routes = explode('/', $_SERVER['REQUEST_URI']);
    
    //Get controller name
    if(!empty($routes[1])):
      $controller_name = $routes[1];
    else:
      if(!empty(DEFAULT_CONTROLLER)):
        $controller_name = DEFAULT_CONTROLLER;
      else:
        $messageError = "
        -> Необходимо указать контроллер по умолчанию.<br/>";
        die(show_error($messageError));
      endif;
    endif;
    
    //Get method name
    if(!empty($routes[2])):
      $action_name = $routes[2];
    endif;
    
    //Add a prefixes
    $model_name = 'Model_'.$controller_name;
    $controller_name = 'Controller_'.$controller_name;
    $action_name = 'action_'.$action_name;
    
    //Add model file from active controller 
    $model_file = strtolower($model_name).'.php';
    $model_path = "app/models/".$model_file;
    if(file_exists($model_path)):
      include "app/models/".$model_file;
    endif;
    
    
      //Add controller file from active controller 
      $controller_file = strtolower($controller_name).'.php';
      $controller_path = "app/controllers/".$controller_file;
      if(file_exists($controller_path)):
        include "app/controllers/".$controller_file;
      else:
        Route::ErrorPage404();
      endif;
      
      
      //Make controller
      $controller = new $controller_name;
      $action = $action_name;
      
      if(method_exists($controller, $action)):
        //open active controller
        $controller->$action();
      else:
        Route::ErrorPage404();
      endif;


       
   
    
    
    
    
  }//End start()
  
  
  function ErrorPage404()
  {
    $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
    header('HTTP/1.1 404 Not Found');
    header("Status: 404 Not Found");
    //header('Location:'.$host.'404');
    header("Location:".BASE_URL."404");
    
  }//End ErrorPage404()
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
}//End Class Route




?>