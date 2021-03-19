<?php require_once('../../../private/initialize.php');

$id = $_GET['id'];
$id = base64_decode($id);

if (request_is_post()) {
    // update records
    $new_dtl = [];
    $new_dtl['first_name'] = $_POST['first_name'];
    $new_dtl['last_name'] = $_POST['last_name'];
    $new_dtl['dob'] = $_POST['dob'];
    $new_dtl['username'] = $_POST['username'];
    $new_dtl['password'] = $_POST['password'];
    $new_dtl['email'] = $_POST['email'];

    update_acount_dtl($new_dtl,$id);
} else {
    $member_dtl = get_account_dtl($id);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Della+Respira&family=Oswald&family=Playfair+Display:wght@600&display=swap"
          rel="stylesheet">
    <script src="https://kit.fontawesome.com/94d8d2468d.js" crossorigin="anonymous"></script>
</head>
<body>

<form action="<?php echo url_for('/members/acount/edit.php?id='.xss(base64_encode($id))) ?>" method="post">
    <dl>
        <dt>First name</dt>
        <dd><input type="text" name="first_name" value="<?php echo $member_dtl['firstname']; ?>"/></dd>
    </dl>
    <dl>
        <dt>Last name</dt>
        <dd><input type="text" name="last_name" value="<?php echo $member_dtl['lastname']; ?>"/></dd>
    </dl>
    <dl>
        <dt>Email</dt>
        <dd><input type="text" name="email" value="<?php echo $member_dtl['email']; ?>"/></dd>
    </dl>
    <dl>
        <dt>Date of birth</dt>
        <dd><input type="date" name="dob" value="<?php echo $member_dtl['dob']; ?>"/></dd>
    </dl>
    <dl>
        <dt>Username</dt>
        <dd><input type="text" name="username" value="<?php echo $member_dtl['username']; ?>"/></dd>
    </dl>
    <dl>
        <dt>Password</dt>
        <dd><input type="text" name="password" value="<?php echo $member_dtl['password']; ?>"/></dd>
    </dl>
    <div id="operation">
        <input type="submit" value="Save"/>
    </div>
</form>

<?php
// call footer hook
include(SHARED_PATH . '/members_footer.php');
?>
