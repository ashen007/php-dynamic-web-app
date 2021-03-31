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
        <div class="sec_top container">
            <section class="left">
                <div class="dash_text">
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                        Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                        words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in
                        classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32
                        and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero,
                        written in 45 BC. This book is a treatise on the theory of ethics, very popular during the
                        Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in
                        section 1.10.32.</p>
                </div>
            </section>
            <section class="right"></section>
        </div>
        <div class="sec_bottom container">
            <section class="left"></section>
            <section class="right"></section>
        </div>
    </section>
    <section id="brands">
        <div class="brand_wrapper container">
            <ul class="brand_list">
                <li><a class="valign" href="#">logo</a></li>
                <li><a class="valign" href="#">logo</a></li>
                <li><a class="valign" href="#">logo</a></li>
                <li><a class="valign" href="#">logo</a></li>
                <li><a class="valign" href="#">logo</a></li>
                <li><a class="valign" href="#">logo</a></li>
            </ul>
        </div>
    </section>
    <section class="basic_report">
        <div class="container">
            <section class="sec_top">
                <div class="left" style="border-right: 1px solid #000000;border-bottom: 1px solid #000000"></div>
                <div class="right"></div>
            </section>
            <section class="sec_bottom">
                <div class="left"></div>
                <div class="right"
                     style="border-left: 1px solid #000000;border-top: 1px solid #000000;margin: -1px 0px 0px -1px;"></div>
            </section>
        </div>
    </section>
    <section class="more">
        <div class="container">
            <section class="sec_top">
                <div class="left"></div>
                <div class="right" style="border-bottom: 1px solid #ffffff;"></div>
            </section>
            <section class="sec_mid">
                <div class="left"></div>
                <div class="right"></div>
            </section>
            <section class="sec_bottom">
                <div class="left"></div>
                <div class="right"></div>
            </section>
        </div>
    </section>
    <section class="news_events">
        <div class="container">
            <section class="sec_top">
                <div class="left"></div>
                <div class="right"></div>
            </section>
        </div>
    </section>
    <section class="forms">
        <div class="container">
            <section class="sec_top">
                <div class="left" style="border-bottom: none"></div>
                <div class="right"></div>
            </section>
        </div>
    </section>
</div>

<!--call footer hook-->
<?php include(SHARED_PATH . '/members_footer.php'); ?>