<?php

function find_all_categories()
{
    global $db;

    $sql = 'select id,name from member_privilege ';
    $sql .= 'order by id asc';
    $result = mysqli_query($db, $sql);
    confirm_result($result);
    return $result;
}

function register_member($first_name, $last_name, $username, $password, $dob, $email)
{
    global $db;
    $sql = "insert into members ";
    $sql .= "(firstname,lastname,username,password,dob,email) ";
    $sql .= "values (";
    $sql .= "'" . $first_name . "',";
    $sql .= "'" . $last_name . "',";
    $sql .= "'" . $username . "',";
    $sql .= "'" . $password . "',";
    $sql .= "'" . $dob . "',";
    $sql .= "'" . $email . "');";

    $result = mysqli_query($db, $sql);

    if ($result) {
        return true;
    } else {
        db_close($db);
        exit('fucked');
    }
}

function check_account($username, $password)
{
    global $db;
    $sql = "select * from members ";
    $sql .= "where username = '" . $username . "' ";
    $sql .= "and password = '" . $password . "';";
    $result = mysqli_query($db, $sql);

    $member_cred = mysqli_fetch_assoc($result);
    mysqli_free_result($result);

    return $member_cred;
}

?>