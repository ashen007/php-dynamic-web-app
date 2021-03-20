<?php

function validate_form($formdata) {
    $errors = [];

//    firstname and lastname
    if (is_blank($formdata['first_name'])) {
        $errors['firstname_error'] = 'first name cannot be empty';
    }elseif (is_blank($formdata['last_name'])) {
        $errors['lastname_error'] = 'last name cannot be empty';
    }

    return $errors;
}

function find_all_categories()
{
    global $db;

    $sql = 'select id,name from member_privilege ';
    $sql .= 'order by id asc';
    $result = mysqli_query($db, $sql);
    confirm_result($result);
    return $result;
}

function register_member($data)
{
    global $db;
    $errors = validate_form($data);

    if (!empty($errors)) {
        return $errors;
    }

    $sql = "insert into members ";
    $sql .= "(firstname,lastname,username,password,dob,email) ";
    $sql .= "values (";
    $sql .= "'" . $data['first_name'] . "',";
    $sql .= "'" . $data['last_name'] . "',";
    $sql .= "'" . $data['username'] . "',";
    $sql .= "'" . $data['password'] . "',";
    $sql .= "'" . "{$data['year']}-{$data['month']}-{$data['date']}"."',";
    $sql .= "'" . $data['email'] . "');";

    $result = mysqli_query($db, $sql);

    if ($result) {
        return true;
    } else {
        echo $sql;
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
    confirm_result($result);

    $member_cred = mysqli_fetch_assoc($result);
    mysqli_free_result($result);

    return $member_cred;
}

function get_account_dtl($id)
{
    global $db;
    $sql = "select * from members ";
    $sql .= "where id = '" . $id . "';";
    $result = mysqli_query($db, $sql);

    confirm_result($result);
    $memeber_dtl = mysqli_fetch_assoc($result);
    mysqli_free_result($result);

    if (empty($memeber_dtl)) {
        redirect_to(url_for('/members/login.php'));
        exit();
    } else {
        return $memeber_dtl;
    }
}

function update_acount_dtl($new_data, $id)
{
    global $db;
    $errors = validate_form($new_data);

    if (!empty($errors)) {
        return $errors;
    }

    $sql = "update members set ";
    $sql .= "firstname='" . $new_data['first_name'] . "', ";
    $sql .= "lastname='" . $new_data['last_name'] . "', ";
    $sql .= "dob='" . $new_data['dob'] . "', ";
    $sql .= "username='" . $new_data['username'] . "', ";
    $sql .= "password='" . $new_data['password'] . "', ";
    $sql .= "email='" . $new_data['email'] . "' ";
    $sql .= "where id='" . $id . "' ";
    $sql .= "limit 1;";
    $result = mysqli_query($db, $sql);

    if ($result) {
        redirect_to(url_for('/members/pages/index.php?id=' . xss(base64_encode($id))));
    } else {
        db_close($db);
        exit();
    }
}

?>