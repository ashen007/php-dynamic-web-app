<!--don't change this path to dynamicly genarate!!!!!-->
<?php require_once('../../private/initialize.php'); ?>

<!--page title-->
<?php
$page_title = 'Crop Club';
?>

<!--call header hook-->
<?php include(SHARED_PATH . '/members_header.php'); ?>

<section class="landing_vid">
    <h1 id="page_name"><?php echo $page_title ?></h1>
    <video id="meb_landing" class="valign" autoplay loop muted>
        <source src="<?php echo url_for('/images/WT_landings1.mp4'); ?>" type="video/mp4">
    </video>
</section>

<!--call footer hook-->
<?php include(SHARED_PATH . '/members_footer.php'); ?>