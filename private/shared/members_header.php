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
    <link href="https://fonts.googleapis.com/css2?family=Della+Respira&family=Oswald&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <div class="main_menu">
        <nav class="valign">
            <ul>
                <li class="menu_item"><a href="<?php echo url_for('/members/index.php?id='); ?>">Home</a></li>
                <li class="menu_item"><a href="<?php echo url_for('/members/pages/insights.php?id='); ?>">Insights</a></li>
                <li class="menu_item"><a href="<?php echo url_for('/members/subjects/index.php?id='); ?>">Subjects</a></li>
                <li class="menu_item"><a href="<?php echo url_for('/members/pages/news.php?id='); ?>">News</a></li>
            </ul>
        </nav>
    </div>
    <div id="logo">
        <img src="<?php echo url_for('images/WT_logo-1.png'); ?>">
    </div>
    <div class="main_menu">
        <nav class="valign">
            <ul>
                <li class="menu_item"><a href="<?php echo url_for('/members/pages/diseases.php?id='); ?>">Diseases</a></li>
                <li class="menu_item"><a href="<?php echo url_for('/members/pages/events.php?id='); ?>">Events</a></li>
                <li class="menu_item"><a href="<?php echo url_for('/members/pages/forum.php?id='); ?>">Forum</a></li>
                <li class="menu_item"><a href="subjects/index.php">Log out</a></li>
            </ul>
        </nav>
    </div>
</header>
