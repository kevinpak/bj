<?php

function show_error(string $message)
{
  $message = '<div class="show_error">'.$message.'</div>';
  echo $message ;
}

function AjaxQuery(){
  if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
  strcasecmp($_SERVER['HTTP_X_REQUESTED_WITH'], 'xmlhttprequest') == 0):
    $result = TRUE;
  else:
    $result = FALSE;
  endif;

  return $result;
}


function returnJS($statut='',$message='',$data='',$type=false){

	$json = [
		'statut' => $statut,
		'message' => $message,
		'data' => $data
  ];

	if($type):
		$_SESSION['message_'.$statut] = $message;
  endif;
  header('Content-type: application/json');
	echo json_encode($json,JSON_FORCE_OBJECT);
}


function dateTime(){
	setlocale(LC_TIME, 'fra_fra');
	return $maintenant = strftime('%Y-%m-%d %H:%M:%S', strtotime('-1 time'));
}


function formatData($value){
  return htmlspecialchars(trim($value));
}


?>