<!--don't change this path to dynamicly genarate!!!!!-->
<?php require_once('private/initialize.php'); ?>

<!--page title-->
<?php
$page_title = 'Connect With Us';
$page_sub = 'Have a Question?';
$moto = 'Happen active county. Winding for the morning am shyness evident to poor. Garrets because elderly new to the point.';

$page_data = get_page_content('office')
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

<section class="contact_info top_gap bottom_gap top_gap">
    <div class="contact_wrapper">
        <ul class="contact_content_wrapper">
            <?php while ($page = mysqli_fetch_assoc($page_data)) { ?>
                <li class="contact_content">
                    <div>
                        <h2><?php echo $page['city'] ?></h2>
                        <h4><?php echo $page['address'] ?></h4>
                        <p><?php echo $page['primary_tel_no'] ?></p>
                        <p><?php echo $page['secondary_tel_no'] ?></p>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</section>
<!--call footer hook-->
<?php include(SHARED_PATH . '/public_footer.php'); ?>