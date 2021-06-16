<?php

if (!isset($page_title)) {
    $page_title = 'Crop Foundation';
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $page_title; ?></title>
    <link rel="shortcut icon" type="image/jpg" href="<?php echo url_for('/images/WT_logo-1.png') ?>"/>
    <link rel="stylesheet" href="<?php echo url_for('/stylesheets/member.css'); ?>">
    <link rel="stylesheet" href="<?php echo url_for('/stylesheets/public.css'); ?>">
    <link rel="stylesheet" href="<?php echo url_for('/stylesheets/form.css'); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Della+Respira&family=Oswald&family=Playfair+Display:wght@600&display=swap"
          rel="stylesheet">
    <script src="https://kit.fontawesome.com/94d8d2468d.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <div id="logo">
        <img src="<?php echo url_for('images/WT_logo-1.png'); ?>">
    </div>
    <div class="main_menu">
        <nav class="valign">
            <ul>
                <li class="menu_item"><a href="<?php echo url_for('/index.php'); ?>">Home</a></li>
                <li class="menu_item"><a href="<?php echo url_for('/events.php'); ?>">events</a></li>
                <li class="menu_item"><a href="<?php echo url_for('/blog.php'); ?>">blog</a></li>
                <li class="menu_item"><a href="<?php echo url_for('/product_detail_portal.php'); ?>">shop</a></li>
                <li class="menu_item"><a href="<?php echo url_for('/about.php'); ?>">about</a></li>
                <li class="menu_item"><a href="<?php echo url_for('/contacts.php'); ?>">contact</a></li>
                <li class="menu_item"><a href="<?php echo url_for('/members/login.php'); ?>">Members</a></li>
            </ul>
        </nav>
    </div>
</header>
