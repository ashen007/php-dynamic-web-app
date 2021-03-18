<?php

require_once('cred.php');

// make a connection with database
function db_connect()
{
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_SCHEMA);
    return $connection;
}

// close the conection with database
function db_close($connection)
{
    if (isset($connection)) {
        mysqli_close($connection);
    }
}

?>
