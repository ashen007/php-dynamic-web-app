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
    <div class="event_land_img" style="background-image: url('<?php echo url_for('/images/Agricultural-Heritage-scaled.jpg');?>')">
        <ul class="landing_header valign">
            <li class="header_content">title</li>
            <li class="header_content">sub title</li>
            <li class="header_content">
                <p>moto</p>
            </li>
        </ul>
    </div>
</section>

<section class="event_gallery bottom_gap">

</section>

<!--call footer hook-->
<?php include(SHARED_PATH . '/public_footer.php'); ?>