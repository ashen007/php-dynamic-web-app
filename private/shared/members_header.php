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
    <link rel="stylesheet" href="<?php echo WWW_ROOT . '/stylesheets/member.css'; ?>">
</head>
<body>
<header>
    <h1>Crop Club</h1>
</header>
<nav>
    <ul>
        <li><a href="<?php echo WWW_ROOT . '/members/index.php'; ?>">Menu</a></li>
    </ul>
</nav>
