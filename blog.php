<!--don't change this path to dynamicly genarate!!!!!-->
<?php require_once('private/initialize.php'); ?>

<!--page title-->
<?php
$page_title = 'Crop Foundation Blog';
$page_sub = 'News & Trends';
$moto = '';

$blog_dtl = get_blog_posts()
?>

<!--call header hook-->
<?php include(SHARED_PATH . '/public_header.php'); ?>

<!--body-->

<section class="landing_bg bottom_gap">
    <div class="event_land_img"
         style="background-image: url('<?php echo url_for('/images/precision_agriculture.jpg'); ?>')">
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
    <ul class="event_wrapper container event_gal_cards prod_port blog_card">
        <?php while ($blog_post = mysqli_fetch_assoc($blog_dtl)) { ?>
            <li class="event_gal_col" style="height: 52vh;">
                <div class="event_gal_wrapper">
                    <div style="background-image: url('data:image/jpg;base64,<?php echo base64_encode($blog_post["post_banner"]); ?>');
                            height: inherit; background-position: left; background-repeat: no-repeat;
                            background-size: cover; height: 225px"></div>
                    <div>
                        <a class="event-link" style="position: relative; top: 0; left: 0; color: #000000"
                           href="<?php echo url_for('/shared/show.php?page=' . base64_encode(xss('blog')) . '&item=' . base64_encode(xss($blog_post['id']))); ?>">
                            <?php echo $blog_post['post_headline'] ?>
                        </a>
                        <p style="margin-top: 12px; color: #181c18">
                            <?php echo substr($blog_post['content'], 0, 300) ?></p>
                        <p style="margin-top: 4px; margin-bottom: 2px; color: #656464">
                            author <?php echo $blog_post['author'] ?></p>
                        <p style="margin-top: 2px; margin-bottom: 4px; color: #656464"><?php echo $blog_post['publish_at'] ?></p>
                    </div>
                </div>
            </li>
        <?php } ?>
    </ul>
</section>

<!--call footer hook-->
<?php include(SHARED_PATH . '/public_footer.php'); ?>
