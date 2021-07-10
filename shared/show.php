<?php require_once('../private/initialize.php'); ?>
<?php
$page = xss(base64_decode($_GET['page']));
$id = xss(base64_decode($_GET['item']));
$content = mysqli_fetch_assoc(get_content($page, $id));
?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<?php if ($page == 'product') { ?>
<?php } ?>

<?php if ($page == 'events') { ?>
    <section class="landing_bg bottom_gap">
        <div class="event_land_img"
             style="background-image: url('data:image/jpg;base64,<?php echo base64_encode($content["event_banner"]); ?>');">
            <ul class="landing_header valign">
                <li class="header_content"><h1><?php echo $content['headline']; ?></h1></li>
                <li class="header_content"><h2><?php echo $content['location']; ?></h2></li>
                <li class="header_content">
                    <p><?php echo $content['cover_by']; ?></p>
                </li>
            </ul>
        </div>
    </section>

    <section class="event_body">
        <?php echo $content['content']; ?>
    </section>
<?php } ?>

<?php if ($page == 'blog') { ?>
    <section class="landing_bg bottom_gap">
        <div class="event_land_img"
             style="background-image: url('data:image/jpg;base64,<?php echo base64_encode($content["post_banner"]); ?>');">
            <ul class="landing_header valign">
                <li class="header_content"><h1><?php echo $content['post_headline']; ?></h1></li>
                <li class="header_content"><h2><?php echo $content['publish_at']; ?></h2></li>
                <li class="header_content">
                    <p><?php echo $content['author']; ?></p>
                </li>
            </ul>
        </div>
    </section>

    <section class="event_body">
        <?php echo $content['content']; ?>
    </section>
<?php } ?>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
