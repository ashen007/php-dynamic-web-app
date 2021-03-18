<?php require_once('../../../private/initialize.php');

if (request_is_post()) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    echo $username;
    echo $password;
} else {
    redirect_to(url_for('/members/login.php'));
}
?>
