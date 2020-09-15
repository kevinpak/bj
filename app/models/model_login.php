<?php
class Model_login extends Model{
  
  
  /*------------------------------==Login==----------------------------------*/
  function get__user_login($login,$password){
    Global $db;
    
    $password = sha1($password);
    
    $results = array();
    $query = $db->query("SELECT *  FROM users WhERE login= '$login' AND password= '$password' ");
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
  
  
  
  
}//End Model_login



?>