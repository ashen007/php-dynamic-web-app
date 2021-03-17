<!--don't change this path to dynamicly genarate!!!!!-->
<?php require_once('../../private/initialize.php'); ?>

<!--page title-->
<?php $page_title = 'Crop Club'; ?>

<!--call header hook-->
<?php include(SHARED_PATH . '/members_header.php'); ?>

<section class="landing_vid">
    <video id="meb_landing" autoplay loop muted>
        <source src="<?php echo url_for('/images/WT_landings1.mp4'); ?>" type="video/mp4">
    </video>
</section>

<div id="content" class="container">
    <div id="menu">
        <ul id="menu_wrapper">
            <li class="menu_item">
                <a href="<?php echo url_for('/index.php'); ?>">Home</a>
            </li>
            <li class="menu_item">
                <a href="subjects/index.php">Insights</a>
            </li>
            <li class="menu_item">
                <a href="subjects/index.php">Subjects</a>
            </li>
            <li class="menu_item">
                <a href="subjects/index.php">News</a>
            </li>
            <li class="menu_item">
                <a href="subjects/index.php">decises</a>
            </li>
            <li class="menu_item">
                <a href="subjects/index.php">Events</a>
            </li>
            <li class="menu_item">
                <a href="subjects/index.php">Forum</a>
            </li>
            <li class="menu_item">
                <a href="subjects/index.php">Log out</a>
            </li>
        </ul>
    </div>
</div>

<!--call footer hook-->
<?php include(SHARED_PATH . '/members_footer.php'); ?>