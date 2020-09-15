<?php
class Controller_task extends Controller
{
  function action_index()
  {	
    $model_task = new Model_task;
    
    $data['pageName'] = 'BeeJee - To do list'; //For title in head
    $data['pageTitle'] = 'Список заданий'; //For H1
    $data['pageClass'] = 'p-task'; //For css
    
    
    //List task
    $data['all_tasks']  = $model_task->get__all_task();
    
    if(AjaxQuery()):
      extract($_POST);
      if(isset($_SESSION['admin'])):
        if($ActiveAjax=='updateStatusTask'):
          $ideTask = $ide;
          $model_task->update__status_task($ideTask);
          
          $statut = 'success';
          $data = $Returnlink;
          $message ='Задание изменено!';
          returnJS($statut,$message,$data,true);
          
        else:
          //Return
          $statut = 'error';
          $data = $Returnlink;
          $message ='Операция не удалась!';
          returnJS($statut,$message,$data,true);
        endif;
      else:
        //Return
        $statut = 'error';
        $data = $Returnlink;
        $message ='Необходимы права администратора';
        returnJS($statut,$message,$data,true);
      endif;
      
    else:
      $this->template->load('task_view', $data);
    endif;
    
    
  }
  
  function action_add()
  {	
    $model_task = new Model_task;
    
    $data['pageName'] = 'BeeJee - To do list, new row'; //For title in head
    $data['pageTitle'] = 'Добавить новое задание'; //For H1
    $data['pageClass'] = 'p-add-task'; //For css
    
    if(AjaxQuery()):
      extract($_POST);
      
      //=>1: addNewTask
      if($ActiveAjax=='addNewTask'):
        $status = 1;
        $date_create = dateTime();
        $name = formatData($name);
        $email = formatData($email);
        $task = formatData($task);
        $model_task->add__new_task($name,$email,$task,$status,$date_create);
        
        //Return 
        $statut = 'success';
        $data = $Returnlink;
        $message ='Добавлено новое задание!';
        returnJS($statut,$message,$data,true);
        
      else:
        //Return
        $statut = 'error';
        $data = $Returnlink;
        $message ='Операция не удалась!';
        returnJS($statut,$message,$data,true);
      endif;
    else:
      $this->template->load('add_task_view', $data);
    endif;
  }
  
  
  
  function action_update(){
    if(!isset($_SESSION['admin'])):
      header("Location:".BASE_URL."task");
      exit();
    endif;
    $model_task = new Model_task;
    
    $data['pageName'] = 'BeeJee - To do list, update row'; //For title in head
    $data['pageTitle'] = 'Изменение задания'; //For H1
    $data['pageClass'] = 'p-update-task'; //For css
    
    if(isset($_GET['id']) && is_numeric($_GET['id'])):
      $ideTask = $_GET['id'];
      settype($ideTask, "integer");
      
      //get all infos this task
      $infosTask = $model_task->get__row_task($ideTask);
      if($infosTask):
        foreach($infosTask as $task):
          $data['name'] = $task->name;
          $data['email'] = $task->email;
          $data['task'] = $taskIni = $task->task;
          $data['up'] = $upIni = $task->up;
          $statusIni = $task->status;
        endforeach;
      else:
        exit();
      endif;
      
      if(AjaxQuery()):
        extract($_POST);
        
        
        if(isset($_SESSION['admin'])):
          
          //=>1: updateTask
          if($ActiveAjax=='updateTask'):
            if($taskIni != trim($task)):
              $upIni++;
            endif;
            $name = formatData($name);
            $email = formatData($email);
            $task = formatData($task);
            $model_task->update__row_task($ideTask,$name,$email,$task,$upIni);
            
            //Return 
            $statut = 'success';
            $data = $Returnlink;
            $message ='Отредактировано успешно!';
            returnJS($statut,$message,$data,true);
            
          else:
            //Return
            $statut = 'error';
            $data = $Returnlink;
            $message ='Операция не удалась!';
            returnJS($statut,$message,$data,true);
          endif;
          
        else:
          //Return
          $statut = 'error';
          $data = $Returnlink;
          $message ='Необходимы права администратора';
          returnJS($statut,$message,$data,true);
        endif;
        
        
      else:
        $this->template->load('update_task_view', $data);
      endif;
      
    else:
      header("Location:".BASE_URL."task");
    endif;
    
  }
  
  
  
  
}
?>