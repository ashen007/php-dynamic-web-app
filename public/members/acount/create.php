<?php require_once('../../private/initialize.php');

if (request_is_post()) {

    $first_name = $_POST['first_name'] ?? '';
    $last_name = $_POST['last_name'] ?? '';
    $dob = $_POST['dob'] ?? '';
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    echo $first_name;
    echo $last_name;
    echo $dob;
    echo $username;
    echo $password;
} else {
    redirect_to(url_for('/members/register.php'));
}
?>