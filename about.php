<!--don't change this path to dynamicly genarate!!!!!-->
<?php require_once('private/initialize.php'); ?>

<!--page title-->
<?php
$page_title = 'About Crop Foundation';
$page_sub = 'WHO WE ARE';
$moto = 'Beautiful landscapes and the farmers Who bring us our food';
?>

<!--call header hook-->
<?php include(SHARED_PATH . '/public_header.php'); ?>

<!--body-->

<section class="landing_bg bottom_gap">
    <div class="event_land_img"
         style="background-image: url('<?php echo url_for('/images/tumblr_mdo83xsqnv1rn3wcfo1_1280.jpg'); ?>')">
        <ul class="landing_header valign">
            <li class="header_content"><h1><?php echo $page_title ?></h1></li>
            <li class="header_content"><h2><?php echo $page_sub ?></h2></li>
            <li class="header_content">
                <p><?php echo $moto ?></p>
            </li>
        </ul>
    </div>
</section>

<section class="about_info top_gap bottom_gap">
    <div class="about_wrapper">
        <ul class="about_content_wrapper">
            <li class="about_content">
                <div>
                    <h2>We are Agriculture Farm</h2>
                    <h4>Smells racy free announcing than durable zesty smart exotic far feel. Screamin' affordable
                        secret way absolutely.</h4>
                    <p>Stimulates vast a real proven works discount secure care. Market invigorate a awesome handcrafted
                        bigger comes newer recommended lifetime.<br>
                        <br>
                        Evulates vast a real proven works discount secure care. Market invigorate a awesome handcrafted
                        bigger comes newer recommended lifetime. Odor to yummy high racy bonus soaking mouthwatering.
                        First superior full-bodied drink. Like outstanding odor economical deal clinically<br>
                        <br>
                        Evulates vast a real proven works discount secure care. Market invigorate a awesome handcrafted
                        bigger comes newer recommended lifetime. Odor to yummy high racy bonus soaking mouthwatering.
                        First superior<br>
                        <br>
                        Delectable absorbent ordinary full-bodied out durable whopping value when. Coming supreme
                        tropical dual locked-in sharpest effervescent zesty bigger. Opportunity and affordable
                        clinically. Ordinary whenever appearance first first unlimited compact.
                    </p>
                </div>
            </li>
        </ul>
        <div class="org-logo">
            <img src="<?php echo url_for('images/WT_logo-1.png'); ?>">
        </div>
    </div>
</section>

<!--call footer hook-->
<?php include(SHARED_PATH . '/public_footer.php'); ?>
