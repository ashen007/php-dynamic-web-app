<?php require_once('../../private/initialize.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<div id="form">
    <a class="back" href="<?php echo url_for('/members/index.php') ?>">Back</a>

    <div class="login">
        <h2>Log in/ Register</h2>
        <form action="<?php echo url_for('/members/acount/create.php')?>" method="post">
            <dl>
                <dt>First name</dt>
                <dd><input type="text" name="first_name" value=""/></dd>
            </dl>
            <dl>
                <dt>Last name</dt>
                <dd><input type="text" name="last_name" value=""/></dd>
            </dl>
            <dl>
                <dt>Date of birth</dt>
                <dd><input type="text" name="dob" value=""/></dd>
            </dl>
            <dl>
                <dt>Username</dt>
                <dd><input type="text" name="username" value=""/></dd>
            </dl>
            <dl>
                <dt>Password</dt>
                <dd><input type="text" name="password" value=""/></dd>
            </dl>
            <dl>
                <dt>Confirm</dt>
                <dd><input type="text" name="conf_" value=""/></dd>
            </dl>
            <div id="operation">
                <input type="submit" value="register"/>
            </div>
        </form>
    </div>
</div>
</body>
</html>

