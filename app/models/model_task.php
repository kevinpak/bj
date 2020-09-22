<?php
class Model_task extends Model{
  
  
  /*------------------------------==All Task==----------------------------------*/
  function get__all_task(){
    Global $db;
    
    $results = array();
    $query = $db->query("SELECT *  FROM task  ORDER BY dateCreate DESC");
    while($row = $query->fetch())
    {
      $results[] = (object)$row;
    }
    return $results;
    
  }
  
  /*------------------------------==Add new Task==----------------------------------*/
  function add__new_task($name,$email,$task,$status,$date_create){
    Global $db;
    
    $query = $db->prepare("INSERT INTO task(
      name,
      email,
      task,
      status,
      up,
      dateCreate
      )
      VALUES(
        :name,
        :email,
        :task, 
        :statut,
        :up,
        :date_create
        )
        ")or die('404');
        
        $query->execute(array(
          'name' => $name,
          'email' => $email,
          'task' => $task,
          'statut' => $status,
          'up' => 0,
          'date_create' => $date_create
        ));	
        
      }
      
      
    /*------------------------------==Get Task==----------------------------------*/
    function get__row_task($ideTask){
      Global $db;
      
      $results = array();
      $query = $db->prepare("SELECT * FROM task  WHERE ideTas=:ideTas");
      $query->execute(array(':ideTas' => $ideTask));
      $resultat = $query->rowCount();
      if($resultat>0):
        while($row = $query->fetch())
        {
          $results[] = (object)$row;
        }
      else:
        $results = FALSE;
      endif;
      
      return $results;
      
    }
    
    
    /*------------------------------==Update Task==----------------------------------*/
    function update__row_task($ideTask,$name,$email,$task,$upIni){
      Global $db;
      //$query = $db->query("UPDATE task SET name='$name', email='$email', task='$task', up='$upIni' WHERE ideTas='$ideTask' ")
      $query = $db->prepare("UPDATE task SET name=:name, email=:email, task=:task, up=:upIni WHERE ideTas=:ideTask ");
      $query -> bindParam(':name', $name);
      $query -> bindParam(':email', $email);
      $query -> bindParam(':task', $task);
      $query -> bindParam(':upIni', $upIni);
      $query -> bindParam(':ideTask', $ideTask);
      $query->execute();
  
    }

    /*------------------------------==Update  status Task==----------------------------------*/
    function update__status_task($ideTask){
      Global $db;
      $query = $db->prepare("UPDATE task SET status=2 WHERE ideTas=:ideTask ");
      $query -> bindParam(':ideTask', $ideTask);
      $query->execute();
    }
      
      
      
  }//End Model_task
    
    
    
?>