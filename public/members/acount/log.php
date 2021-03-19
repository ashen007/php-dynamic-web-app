<?php require_once('../../../private/initialize.php');

if (request_is_post()) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    login($username,$password);
}
// call footer hook
include(SHARED_PATH . '/members_footer.php');
?>