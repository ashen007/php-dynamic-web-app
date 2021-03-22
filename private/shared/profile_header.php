<?php

if (!isset($page_title)) {
    $page_title = 'Crop Club';
}

$id = $_GET['id'];
$page_set = find_all_categories();

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
    <link href="https://fonts.googleapis.com/css2?family=Della+Respira&family=Oswald&family=Playfair+Display:wght@600&display=swap"
          rel="stylesheet">
</head>
<body>
<header>
    <div class="profile_menu">
        <nav class="navigation">
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
</header>
