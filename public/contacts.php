<!--don't change this path to dynamicly genarate!!!!!-->
<?php require_once('../private/initialize.php'); ?>

<!--page title-->
<?php
$page_title = 'Connect With Us';
$page_sub = 'Have a Question?';
$moto = 'Happen active county. Winding for the morning am shyness evident to poor. Garrets because elderly new to the point.';
?>

<!--call header hook-->
<?php include(SHARED_PATH . '/public_header.php'); ?>

<!--body-->
<section class="landing_bg bottom_gap">
    <div class="event_land_img"
         style="background-image: url('<?php echo url_for('/images/57da42105059643.5f71adf1cb5cf.png'); ?>')">
        <ul class="landing_header valign">
            <li class="header_content"><h1><?php echo $page_title ?></h1></li>
            <li class="header_content"><h2><?php echo $page_sub ?></h2></li>
            <li class="header_content">
                <p><?php echo $moto ?></p>
            </li>
        </ul>
    </div>
</section>

<section class="contact_info top_gap bottom_gap">
    <div class="contact_wrapper">
        <ul class="contact_content_wrapper">
            <li class="contact_content">
                <div>
                    <h2>title</h2>
                    <h4>moto</h4>
                    <p>text</p>
                </div>
            </li>
            <li class="contact_content">img</li>
        </ul>
    </div>
</section>
<!--call footer hook-->
<?php include(SHARED_PATH . '/public_footer.php'); ?>