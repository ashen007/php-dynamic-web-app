<!--don't change this path to dynamicly genarate!!!!!-->
<?php require_once('../private/initialize.php'); ?>

<!--page title-->
<?php
$page_title = 'Events Happening Around You';
$page_sub = 'All Kind Agricultural Event Happening Around Your Area';
$moto = 'There are many variations of passages of available but the majority have suffered alteration in some form, by injected humou or randomised words which don’t look even slightly believable.';
?>

<!--call header hook-->
<?php include(SHARED_PATH . '/public_header.php'); ?>

<!--body-->
<section class="landing_bg bottom_gap">
    <div class="event_land_img"
         style="background-image: url('<?php echo url_for('/images/Agricultural-Heritage-scaled.jpg'); ?>')">
        <ul class="landing_header valign">
            <li class="header_content"><h1><?php echo $page_title ?></h1></li>
            <li class="header_content"><h2><?php echo $page_sub ?></h2></li>
            <li class="header_content">
                <p><?php echo $moto ?></p>
            </li>
        </ul>
    </div>
</section>

<section class="event_gallery bottom_gap">
    <div class="event_wrapper container">
        <ul class="event_gal_filter"></ul>
        <ul class="event_gal_cards">
            <li class="event_gal_col">
                <ul class="event_gal_row">
                    <li>card</li>
                </ul>
            </li>
            <li class="event_gal_col">
                <ul class="event_gal_row">
                    <li>card</li>
                </ul>
            </li>
            <li class="event_gal_col">
                <ul class="event_gal_row">
                    <li>card</li>
                </ul>
            </li>
        </ul>
    </div>
</section>

<!--call footer hook-->
<?php include(SHARED_PATH . '/public_footer.php'); ?>