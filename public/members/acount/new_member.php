<?php require_once('../../../private/initialize.php');

if (request_is_post()) {

    if (request_is_post()) {
        $result = register_member($_POST);
        $new_id = mysqli_insert_id($db);
        redirect_to(url_for('/members/pages/index.php?id=' . xss(base64_encode($new_id))));
    }
} else {
    redirect_to(url_for('/members/register.php'));
}
?>
