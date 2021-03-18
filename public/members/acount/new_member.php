<?php require_once('../../../private/initialize.php');

if (request_is_post()) {

    if (request_is_post()) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $dob = $_POST['dob'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        $result = register_member($first_name,$last_name,$username,$password,$dob,$email);
        echo $result;
        $new_id = mysqli_insert_id($db);
        redirect_to(url_for('/members/pages/index.php?id='.xss($new_id)));
    }
} else {
    redirect_to(url_for('/members/register.php'));
}
?>
