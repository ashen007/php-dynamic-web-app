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
        <form action="<?php echo url_for('/members/acount/log.php')?>" method="post">
            <dl>
                <dt>Username</dt>
                <dd><input type="text" name="username" value=""/></dd>
            </dl>
            <dl>
                <dt>Password</dt>
                <dd><input type="text" name="password" value=""/></dd>
            </dl>
            <div id="operation">
                <input type="submit" value="login"/>
            </div>
        </form>
        <a class="back" href="<?php echo url_for('/members/register.php') ?>">Create new account</a>
    </div>
</div>
</body>
</html>
