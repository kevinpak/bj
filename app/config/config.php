<?php
/*
|--------------------------------------------------------------------------
| GENERAL CONSTANTS
|--------------------------------------------------------------------------
|
*/
//=>Base Site URL
define('BASE_URL', 'http://beejee.dev-spw.com/');

//=>Project Name
define('Project_NAME', 'Test - BeeJee');

//=>REQUEST_URI
define('REQUEST_URI', $_SERVER['REQUEST_URI']);


//=>Active Template
define('TEMPLATE_NAME', 'test');

//=>Template Url
define('TEMPLATE_URL', BASE_URL.'app/views/template-'.TEMPLATE_NAME.'/');


//=>Default controller
define('DEFAULT_CONTROLLER', 'task');

//=>Default controller
define('ACTIVE_SESSION', TRUE);


/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| 
*/
define('db_status', TRUE);
define('DB_HOST', 'localhost');
define('DB_NAME', 'u709293494_beejee');
define('DB_URSER', 'u709293494_beejee');
define('DB_PASSWORD', 'Beejee/229');
	

	

?>