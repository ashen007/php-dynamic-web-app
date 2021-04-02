<!--don't change this path to dynamicly genarate!!!!!-->
<?php require_once('../private/initialize.php'); ?>

<!--page title-->
<?php
$page_title = 'Crop Foundation';
?>

<!--call header hook-->
<?php include(SHARED_PATH . '/public_header.php'); ?>

<section id="public_landing">
    <div class="wrapper container">
        <div class="landing_bg">
            <ul class="cliper">
                <li class="board"></li>
                <li class="board"></li>
                <li class="board"></li>
                <li class="board"></li>
            </ul>
        </div>
        <div class="moto valign">
            <div class="moto_content">
                <div class="public_header valign">
                    <div><h1>crop foundation</h1></div>
                </div>
                <div class="public_sub_header valign">
                    <h2>community of modern farmers</h2>
                    <h2>community of modern farmers</h2>
                    <h2>community of modern farmers</h2>
                    <h2>community of modern farmers</h2>
                    <h2>community of modern farmers</h2>
                    <h2>community of modern farmers</h2>
                    <h2>community of modern farmers</h2>
                    <h2>community of modern farmers</h2>
                    <h2>community of modern farmers</h2>
                    <h2>community of modern farmers</h2>
                    <h2>community of modern farmers</h2>
                    <h2>community of modern farmers</h2>
                    <h2>community of modern farmers</h2>
                    <h2>community of modern farmers</h2>
                    <h2>community of modern farmers</h2>
                    <h2>community of modern farmers</h2>
                    <h2>community of modern farmers</h2>
                    <h2>community of modern farmers</h2>
                </div>
            </div>
            <div class="land_img">
                <img src="<?php echo url_for('/images/public_landing.png') ?>">
            </div>
        </div>
    </div>
</section>

<section class="services">
    <div class="container valign">
        <ul>
            <li class="serv_card"></li>
            <li class="serv_card"></li>
            <li class="serv_card"></li>
            <li class="serv_card"></li>
            <li class="serv_card"></li>
        </ul>
    </div>
</section>


<!--call footer hook-->
<?php include(SHARED_PATH . '/public_footer.php'); ?>
