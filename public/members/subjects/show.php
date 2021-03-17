<?php

require_once('../../../private/initialize.php');

$id = $_GET['id'] ?? '0';

echo xss($id)

?>