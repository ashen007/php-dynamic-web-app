<?php require_once('../../private/initialize.php'); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('/stylesheets/form.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('/stylesheets/member.css') ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Della+Respira&family=Oswald&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/94d8d2468d.js" crossorigin="anonymous"></script>
</head>
<body>
<section id="reg">
    <div class="bg_image" style="background-image: url('<?php echo url_for('/images/reg.jpg') ?>')"></div>
    <div id="form">
        <div id="toback">
            <a class="back" href="<?php echo url_for('/members/index.php') ?>">
                <i class="far fa-times-circle"></i>
            </a>
        </div>

        <div class="login valign">
            <h2>Enter The Club</h2>
            <form action="<?php echo url_for('/members/acount/new_member.php') ?>" method="post">
                <dl>
                    <dt>First name</dt>
                    <dd><input type="text" name="first_name" value=""/></dd>
                </dl>
                <dl>
                    <dt>Last name</dt>
                    <dd><input type="text" name="last_name" value=""/></dd>
                </dl>
                <dl>
                    <dt>Email</dt>
                    <dd><input type="text" name="email" value=""/></dd>
                </dl>
                <dl>
                    <dt>Date of birth</dt>
                    <dd><input type="date" name="dob" value=""/></dd>
                </dl>
                <dl>
                    <dt>Username</dt>
                    <dd><input type="text" name="username" value=""/></dd>
                </dl>
                <dl>
                    <dt>Password</dt>
                    <dd><input type="text" name="password" value=""/></dd>
                </dl>
                <!--            <dl>-->
                <!--                <dt>Confirm</dt>-->
                <!--                <dd><input type="text" name="conf_" value=""/></dd>-->
                <!--            </dl>-->
                <div id="operation">
                    <input type="submit" value="Next"/>
                </div>
            </form>
        </div>
    </div>
</section>
</body>
</html>

