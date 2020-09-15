<?php
if(!empty(db_status)):
  if(!empty(DB_HOST)&&!empty(DB_NAME)&&!empty(DB_URSER)):
    try{
      $db = new PDO(
        "mysql:host=".DB_HOST.
        ";dbname=".DB_NAME.
        ";charset=utf8",
        DB_URSER,
        DB_PASSWORD
        );
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }catch(PDOException $e){
      $messageError = "
      -> Невозможно подключиться к базе данных.<br/>
     -> Пожалуйста, проверьте настройки подключения к базе данных";
      die(show_error($messageError));
    }
  else:
    $messageError = "
    -> Невозможно подключиться к базе данных.<br/>
   -> Пожалуйста, Убедитесь, что вы ввели все параметры подключения к базе данных";
    die(show_error($messageError));

  endif;
  
endif;




if(!isset($_SESSION)):
  if(ACTIVE_SESSION):
    session_start();
  endif;

endif;

?>