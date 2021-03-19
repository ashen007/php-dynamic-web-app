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
function confirm_result($result)
{
    if (!$result) {
        redirect_to(url_for('/members/login.php'));
        exit();
    }
}

function login($username, $password)
{
    $member_cred = check_account($username, $password);

    if (empty($member_cred)) {
        redirect_to(url_for('/members/login.php'));
    } else {
        redirect_to(url_for('/members/pages/index.php?id=' . xss(base64_encode($member_cred['id']))));
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
