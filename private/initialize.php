<?php

ob_start();

//define globel path
define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH);
define("SHARED_PATH", PRIVATE_PATH . '/shared');
define("HOOKS_PATH", PRIVATE_PATH . '/hooks');

//$public_end = strpos($_SERVER['SCRIPT_NAME'], '') + 10;
//$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
//$doc_root
define("WWW_ROOT", '');

require_once('functions.php');
require_once('db.php');
require_once('query.php');
require_once('form_validation.php');

$db = db_connect();
$errors = [];

?>