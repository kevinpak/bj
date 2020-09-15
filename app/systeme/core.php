<?php
$Table = 'unevariable';
require_once 'app/config/config.php';
require_once 'app/systeme/functions.php';
require_once 'app/systeme/data_base.php';

require_once 'model.php';
require_once 'view.php';
require_once 'template.php';
require_once 'controller.php';
require_once 'route.php';


// Load routing
Route::start(); 
?>