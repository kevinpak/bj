<?php
class Controller_login extends Controller
{
  function action_index()
  {	

    if(isset($_SESSION['admin'])):
      header("Location:".BASE_URL."task");
      exit();
    endif;

    $model_login = new Model_login;

    $data['pageName'] = 'BeeJee - Авторизация'; //For title in head
    $data['pageTitle'] = 'Авторизоваться'; //For H1
    $data['pageClass'] = 'p-login'; //For css

    if(isset($_SESSION['admin'])):
      header("Location:".BASE_URL."task");
      exit();
    endif;
    
    if(AjaxQuery()):
      extract($_POST);
      //=>1: adminLogin
      if($ActiveAjax=='adminLogin'):
        
        if(isset($login)&&isset($password)):
          $login = $model_login->get__user_login($login,$password);
          if($login):
            foreach($login as $user):
              $ideUse = $user->ideUse;
              $loginUse = $user->login;
            endforeach;

            $_SESSION['admin']['ideUse'] = $ideUse;
            $_SESSION['admin']['login'] = $loginUse;

          //Return 
          $statut = 'success';
          $data = $Returnlink;
          $message ='Успешная аутентификация!';
          returnJS($statut,$message,$data,true);


          else:
            //Return
            $statut = 'error';
            $data = $Returnlink;
            $message ='неверный логин или пароль';
            returnJS($statut,$message,$data,true);
          endif;


          
        
        else:
          
          //Return
          $statut = 'error';
          $data = $Returnlink;
          $message ='Пожалуйста, заполните все поля';
          returnJS($statut,$message,$data,true);
        endif;

        
      
      else:
        //Return
        $statut = 'error';
        $data = $Returnlink;
        $message ='Операция не удалась!';
        returnJS($statut,$message,$data,true);
      endif;
      
      
      
    else:
      $this->template->load('login_view', $data);
    endif;
  }
  

  function action_logout(){
    session_destroy();
    header("Location:".BASE_URL."task");
  }
}//End controller Controller_login
?>