<!--don't change this path to dynamicly genarate!!!!!-->
<?php require_once('../../../private/initialize.php'); ?>

<!--call header hook-->
<?php include(SHARED_PATH . '/profile_header.php'); ?>
<?php
$id = $_GET['id'];
$headlines = get_top_headlines();
?>

<div class="content">
    <section id="landing_img">
        <div id="header_bg_img"
             style="background-image: url('<?php echo url_for('/images/member_landing.jpg'); ?>')">
        </div>
        <div id="headline" class="valign">
            <div class="innertext">
                <ul id="news_list">
                    <?php while ($head = mysqli_fetch_assoc($headlines)) { ?>
                        <li class="news_item">
                            <h1><?php echo $head['head_body'] ?></h1>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </section>

    <section id="basic_dash">
        <div class="sec_part">
            <section class="left"></section>
            <section class="right"></section>
        </div>
        <div class="sec_part">
            <section class="left"></section>
            <section class="right"></section>
        </div>
    </section>
</div>

<!--call footer hook-->
<?php include(SHARED_PATH . '/members_footer.php'); ?>