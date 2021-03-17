<?php

if (!isset($page_title)) {
    $page_title = 'Crop Club';
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
    <link rel="stylesheet" href="<?php echo url_for('/stylesheets/member.css'); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Della+Respira&family=Playfair+Display:wght@500&display=swap"
          rel="stylesheet">
</head>
<body>
<header>
    <div class="main_menu">
        <nav>
            <ul>
                <li><a href="<?php echo url_for('/members/index.php'); ?>">Left Side Menu</a></li>
            </ul>
        </nav>
    </div>
    <div id="logo">
        <img src="<?php echo url_for('images/WT_logo-1.png'); ?>">
    </div>
    <div class="main_menu">
        <nav>
            <ul>
                <li><a href="<?php echo url_for('/members/index.php'); ?>">Right Side Menu</a></li>
            </ul>
        </nav>
    </div>
</header>
