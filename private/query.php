<?php

function validate_form($formdata)
{
    global $db;
    $errors = [];

//    firstname and lastname
    if (is_blank($formdata['first_name'])) {
        $errors['firstname_error'] = 'first name cannot be empty';
    }
    if (is_blank($formdata['last_name'])) {
        $errors['lastname_error'] = 'last name cannot be empty';
    }

//  check email structure
    if (!has_valid_email_format($formdata['email'])) {
        $errors['email_error'] = 'this is not a valid email';
    }

//    date of birth
    $date = (int)$formdata['date'];
    $month = (int)$formdata['month'];
    $year = (int)$formdata['year'];
    if ($date < 1 || $date > 31) {
        $errors['date_error'] = 'wrong date';
    }
    if ($month < 1 || $month > 12) {
        $errors['month_error'] = 'wrong month';
    }
    if ($year < 1000 || $year > 9999) {
        $errors['year_error'] = 'wrong year';
    }

//    username
    $options = ['min' => 6, 'max' => 255];
    if (is_blank($formdata['username'])) {
        $errors['username_error'] = 'username cannot be empty';
    } elseif (!has_length($formdata['username'], $options)) {
        $errors['username_error'] = 'username need more than 6 characters';
    }

    if (!is_blank($formdata['username']) && !is_blank($formdata['email'])){
        $check_un = "select * from members ";
        $check_un .= "where username = '" . db_escape($db, $formdata['username']) . "'; ";
        $check_email = "select * from members ";
        $check_email .= "where email = '" . db_escape($db, $formdata['email']) . "'; ";

        $result_un = mysqli_query($db,$check_un);
        $result_email = mysqli_query($db,$check_email);
        $un = mysqli_fetch_assoc($result_un);
        $email = mysqli_fetch_assoc($result_email);
        mysqli_free_result($result_un);
        mysqli_free_result($result_email);

        if (!empty($un)){
            $errors['username_error'] = 'this username already taken';
        }
        if (!empty($email)){
            $errors['email_error'] = 'acount registered under this email';
        }
    }

//    password
    if (is_blank($formdata['password'])) {
        $errors['password_error'] = 'password cannot be empty';
    }

    return $errors;
}

function find_all_categories()
{
    global $db;

    $sql = 'select * from member_privilege ';
    $sql .= 'order by id asc';
    $result = mysqli_query($db, $sql);
    confirm_result($result);
    return $result;
}

function check_availability($data){
//    check username and email availability
    global $db;
    global $errors;


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
    $sql .= "'" . db_escape($db, $data['first_name']) . "',";
    $sql .= "'" . db_escape($db, $data['last_name']) . "',";
    $sql .= "'" . db_escape($db, $data['username']) . "',";
    $sql .= "'" . db_escape($db, $data['password']) . "',";
    $sql .= "'" . db_escape($db, $data['year']) . '-' . db_escape($db, $data['month']) . '-' . db_escape($db, $data['date']) . "',";
    $sql .= "'" . db_escape($db, $data['email']) . "');";

    $result = mysqli_query($db, $sql);

    if ($result) {
        return true;
    } else {
        db_close($db);
        exit('');
    }
}

function check_account($username, $password)
{
    global $db;
    $sql = "select * from members ";
    $sql .= "where username = '" . db_escape($db, $username) . "' ";
    $sql .= "and password = '" . db_escape($db, $password) . "';";
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
    $sql .= "where id = '" . db_escape($db, $id) . "';";
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
    $sql .= "firstname='" . db_escape($db, $new_data['first_name']) . "', ";
    $sql .= "lastname='" . db_escape($db, $new_data['last_name']) . "', ";
    $sql .= "dob='" . db_escape($db, $new_data['year']) . '-' . db_escape($db, $new_data['month']) . '-' . db_escape($db, $new_data['date']) . "',";
    $sql .= "username='" . db_escape($db, $new_data['username']) . "', ";
    $sql .= "password='" . db_escape($db, $new_data['password']) . "', ";
    $sql .= "email='" . db_escape($db, $new_data['email']) . "' ";
    $sql .= "where id='" . db_escape($db, $id) . "' ";
    $sql .= "limit 1;";
    $result = mysqli_query($db, $sql);

    if ($result) {
        return true;
    } else {
        db_close($db);
        exit();
    }
}

?>