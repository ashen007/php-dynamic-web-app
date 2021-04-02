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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Della+Respira&family=Oswald&family=Playfair+Display:wght@600&display=swap"
          rel="stylesheet">
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
                <li class="menu_item"><a href="<?php echo url_for('/shop.php'); ?>">shop</a></li>
                <li class="menu_item"><a href="<?php echo url_for('/about.php'); ?>">about</a></li>
                <li class="menu_item"><a href="<?php echo url_for('/contacts.php'); ?>">contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<section id="public_landing">
    <div class="wrapper container">
        <div class="landing_bg">
            <ul class="cliper">
                <li class="board"></li>
                <li class="board"></li>
                <li class="board"></li>
                <li class="board"></li>
            </ul>
        </div>
        <div class="moto valign">
            <div class="moto_content">
                <div class="public_header">crop foundation</div>
                <div class="public_sub_header">community of modern farmers</div>
            </div>
            <div class="land_img">
                <img src="<?php echo url_for('/images/public_landing.png') ?>">
            </div>
        </div>
    </div>
</section>
