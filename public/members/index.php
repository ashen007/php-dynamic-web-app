<!--don't change this path to dynamicly genarate!!!!!-->
<?php require_once('../../private/initialize.php'); ?>

<!--page title-->
<?php $page_title = 'Crop Club'; ?>

<!--call header hook-->
<?php include(SHARED_PATH . '/members_header.php'); ?>

<div id="content">
    <div id="main_menu">
        <ul id="menu_wrapper">
            <li class="menu_inner">
                <a href="<?php echo url_for('/index.php'); ?>">logo</a>
                <a href="<?php echo url_for('/index.php'); ?>">Home</a>
                <a href="subjects/index.php">Insights</a>
                <a href="subjects/index.php">Subjects</a>
                <a href="subjects/index.php">News</a>
                <a href="subjects/index.php">decises</a>
                <a href="subjects/index.php">Events</a>
                <a href="subjects/index.php">Forum</a>
                <a href="subjects/index.php">Log out</a>
            </li>
        </ul>
    </div>
</div>

<!--call footer hook-->
<?php include(SHARED_PATH . '/members_footer.php'); ?>