<!--don't change this path to dynamicly genarate!!!!!-->
<?php require_once('../private/initialize.php'); ?>

<!--page title-->
<?php
$page_title = 'About Crop Foundation';
?>

<!--call header hook-->
<?php include(SHARED_PATH . '/public_header.php'); ?>

<!--body-->

<section class="landing_bg bottom_gap">
    <div class="event_land_img"
         style="background-image: url('<?php echo url_for('/images/tumblr_mdo83xsqnv1rn3wcfo1_1280.jpg'); ?>')">
        <ul class="landing_header valign">
            <li class="header_content"><h1>title</h1></li>
            <li class="header_content"><h2>sub title</h2></li>
            <li class="header_content">
                <p>moto</p>
            </li>
        </ul>
    </div>
</section>

<section class="about_info top_gap bottom_gap">
    <div class="about_wrapper">
        <ul class="about_content_wrapper">
            <li class="about_content">
                <div>
                    <h2>title</h2>
                    <h4>moto</h4>
                    <p>text</p>
                </div>
            </li>
            <li class="about_content">img</li>
        </ul>
    </div>
</section>

<!--call footer hook-->
<?php include(SHARED_PATH . '/public_footer.php'); ?>
