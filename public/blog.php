<!--don't change this path to dynamicly genarate!!!!!-->
<?php require_once('../private/initialize.php'); ?>

<!--page title-->
<?php
$page_title = 'Crop Foundation';
?>

<!--call header hook-->
<?php include(SHARED_PATH . '/public_header.php'); ?>

<!--body-->

<section class="landing_bg bottom_gap">
    <div class="event_land_img"
         style="background-image: url('<?php echo url_for('/images/precision_agriculture.jpg'); ?>')">
        <ul class="landing_header valign">
            <li class="header_content">title</li>
            <li class="header_content">sub title</li>
            <li class="header_content">
                <p>moto</p>
            </li>
        </ul>
    </div>
</section>

<section class="blog_posts bottom_gap">
    <div class="blog_wrapper container">
        <ul class="blog_filter"></ul>
        <ul class="blog_cards">
            <li class="blog_col">
                <ul class="blog_row">
                    <li>card</li>
                    <li>card</li>
                </ul>
            </li>
            <li class="blog_col">
                <ul class="blog_row">
                    <li>card</li>
                    <li>card</li>
                </ul>
            </li>
            <li class="blog_col">
                <ul class="blog_row">
                    <li>card</li>
                    <li>card</li>
                </ul>
            </li>
        </ul>
    </div>
</section>

<!--call footer hook-->
<?php include(SHARED_PATH . '/public_footer.php'); ?>