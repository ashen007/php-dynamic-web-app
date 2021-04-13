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
                    <h2 style="color: #5f5b5b">community of modern farmers</h2>
                    <h2 style="color: #5f5b5b">community of modern farmers</h2>
                    <h2 style="color: #5f5b5b">community of modern farmers</h2>
                    <h2 style="color: #5f5b5b">community of modern farmers</h2>
                    <h2 style="color: #5f5b5b">community of modern farmers</h2>
                    <h2 style="color: #5f5b5b">community of modern farmers</h2>
                    <h2 style="color: #76A793">community of modern farmers</h2>
                    <h2 style="color: #76A793">community of modern farmers</h2>
                    <h2 style="color: #76A793">community of modern farmers</h2>
                    <h2 style="color: #76A793">community of modern farmers</h2>
                    <h2 style="color: #76A793">community of modern farmers</h2>
                    <h2 style="color: #76A793">community of modern farmers</h2>
                    <h2 style="color: #F2AB01">community of modern farmers</h2>
                    <h2 style="color: #F2AB01">community of modern farmers</h2>
                    <h2 style="color: #F2AB01">community of modern farmers</h2>
                    <h2 style="color: #F2AB01">community of modern farmers</h2>
                    <h2 style="color: #F2AB01">community of modern farmers</h2>
                    <h2 style="color: #F2AB01">community of modern farmers</h2>
                </div>
            </div>
            <div class="land_img">
                <img src="<?php echo url_for('/images/public_landing.png') ?>">
            </div>
        </div>
    </div>
</section>

<section class="services top_gap bottom_gap"
         style="background-image: url('<?php echo url_for('/images/services.jpg') ?>')">
    <div class="container">
        <ul>
            <li class="serv_card">
                <ul class="serv_card_inner valign">
                    <li class="serv_card_header">AgriCom Farm Ecology Products</li>
                    <li class="serv_card_content"><span style="font-weight: bolder"> Smells racy free announcing than durable zesty smart exotic far feel. Screamin' affordable
                        secret way absolutely.</span>
                        <p>Evaluates vast a real proven works discount secure care. Market invigorate a awesome
                            handcrafted
                            bigger comes newer recommended lifetime. Odor to yummy high racy bonus soaking
                            mouthwatering.
                            First superior full-bodied drink. Like outstanding odor economical deal clinically.
                        </p>
                        <ul class="services_list">
                            <li class="serv_card_img">
                                <img src="<?php echo url_for('/images/ico_1-77x77.png'); ?>" alt="services">
                            </li>
                            <li class="serv_card_img">
                                <img src="<?php echo url_for('/images/ico_2-77x77.png'); ?>" alt="services">
                            </li>
                            <li class="serv_card_img" style="width: 77px; height: 60px">
                                <img src="<?php echo url_for('/images/ico_3-90x77.png'); ?>" alt="services">
                            </li>
                            <li class="serv_card_img" style="width: 77px; height: 60px">
                                <img src="<?php echo url_for('/images/ico_4-90x77.png'); ?>" alt="services">
                            </li>
                            <li class="serv_card_img">
                                <img src="<?php echo url_for('/images/ico_5-77x77.png'); ?>" alt="services">
                            </li>
                            <li class="serv_card_img">
                                <img src="<?php echo url_for('/images/ico_1-77x77.png'); ?>" alt="services">
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</section>


<!--call footer hook-->
<?php include(SHARED_PATH . '/public_footer.php'); ?>
