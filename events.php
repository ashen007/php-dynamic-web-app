<!--don't change this path to dynamicly genarate!!!!!-->
<?php require_once('private/initialize.php'); ?>

<!--page title-->
<?php
$page_title = 'Events Happening Around You';
$page_sub = 'All Kind Agricultural Event Happening Around Your Area';
$moto = 'There are many variations of passages of available but the majority have suffered alteration in some form, by injected humou or randomised words which don’t look even slightly believable.';

$event_dtl = get_evets();
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

<section class="event_gallery bottom_gap top_gap">
    <ul class="event_wrapper container event_gal_cards prod_port">
        <?php while ($event = mysqli_fetch_assoc($event_dtl)) { ?>
            <li class="event_gal_col">
                <div class="event_gal_wrapper">
                    <div style="background-image: url('data:image/jpg;base64,<?php echo base64_encode($event["event_banner"]); ?>');
                            height: inherit; background-position: left; background-repeat: no-repeat;
                            background-size: cover; height: 225px"></div>
                    <div>
                        <p style="margin-top: 12px; color: #056f05"><i
                                    class="fas fa-map-marker-alt"></i><?php echo $event['location'] ?></p>
                        <a class="event-link" style="position: relative; top: 0; left: 0; color: #000000"
                           href="<?php echo url_for('/shared/show.php?page=' . base64_encode(xss('events')) . '&item=' . base64_encode(xss($event['id']))); ?>">
                            <?php echo $event['headline'] ?>
                        </a>
                        <p style="margin-top: 4px; margin-bottom: 2px; color: #656464">cover
                            by <?php echo $event['cover_by'] ?></p>
                        <p style="margin-top: 2px; margin-bottom: 4px; color: #656464"><?php echo $event['event_date'] ?></p>
                    </div>
                </div>
            </li>
        <?php } ?>
    </ul>
</section>

<!--call footer hook-->
<?php include(SHARED_PATH . '/public_footer.php'); ?>