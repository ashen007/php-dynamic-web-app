<!--don't change this path to dynamicly genarate!!!!!-->
<?php require_once('../../../private/initialize.php'); ?>

<!--call header hook-->
<?php include(SHARED_PATH . '/profile_header.php'); ?>
<?php $id = $_GET['id']; ?>

<div class="content">
    <section id="landing_img">
        <div id="header_bg_img"
             style="background-image: url('<?php echo url_for('/images/member_landing.jpg'); ?>')">
        </div>
        <div id="headline">
            <div class="innertext">
                <ul id="news_list">
                    <li class="news_item"><h1>this come from headline table</h1>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</div>

<!--call footer hook-->
<?php include(SHARED_PATH . '/members_footer.php'); ?>