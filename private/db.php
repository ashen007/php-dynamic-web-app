<?php

require_once('cred.php');

// make a connection with database
function db_connect()
{
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_SCHEMA);
    check_db_connection();
    return $connection;
}

// check connection status
function check_db_connection()
{
    if (mysqli_connect_errno()) {
        $msg = 'Connection faild: ';
        $msg .= mysqli_connect_error();
        $msg .= '(' . mysqli_connect_errno() . ')';
        exit($msg);
    }
}

// check results avaliability
function confirm_result($result) {
    if (!$result) {
        exit();
    }
}

// close the conection with database
function db_close($connection)
{
    if (isset($connection)) {
        mysqli_close($connection);
    }
}

?>
