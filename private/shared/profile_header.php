<?php

if (!isset($page_title)) {
    $page_title = 'Crop Club';
}

$id = $_GET['id'];
$page_set = find_all_categories();
$picture = get_account_dtl(xss(base64_decode($id)))['pp'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $page_title; ?></title>
    <link rel="shortcut icon" type="image/jpg" href="<?php echo url_for('/images/logo offset.png') ?>"/>
    <link rel="stylesheet" href="<?php echo url_for('/stylesheets/member.css'); ?>">
    <link rel="stylesheet" href="<?php echo url_for('/stylesheets/profile.css'); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Della+Respira&family=Oswald&family=Playfair+Display:wght@600&display=swap"
          rel="stylesheet">
    <script rel="script" type="text/javascript" src="<?php echo url_for('/scripts/members.js') ?>"></script>
</head>
<body>
<header>
    <div class="block_l">
        <div class="logo_offset">
            <img src="<?php echo url_for('/images/logo offset.png') ?>">
        </div>
    </div>
    <div class="profile_menu">
        <nav class="navigation valign">
            <ul class="pm_nav">
                <?php while ($page = mysqli_fetch_assoc($page_set)) { ?>
                    <li>
                        <a href="<?php echo url_for($page['path'] . "'" . xss($id) . "'&page='" . xss($page['name']) . "'"); ?>">
                            <?php echo $page['name']; ?></a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
    </div>
    <div class="block_r">
        <div id="pp" class="profile valign" onclick="drop_down()">
            <img src="data:image/jpg;base64,<?php echo base64_encode($picture); ?>">
        </div>
    </div>
    <div id="drop_down">
        <ul>
            <li>
                <a href="<?php echo url_for('/members/acount/edit.php?id=' . xss($id)); ?>">edit profile</a>
            </li>
            <li>
                <a href="<?php echo url_for('/members/acount/edit.php?id=' . xss($id)); ?>">option</a>
            </li>
            <li>
                <a href="<?php echo url_for('/members/acount/edit.php?id=' . xss($id)); ?>">option</a>
            </li>
            <li>
                <a href="<?php echo url_for('/members/acount/edit.php?id=' . xss($id)); ?>">option</a>
            </li>
        </ul>
    </div>
</header>
