<!--don't change this path to dynamicly genarate!!!!!-->
<?php require_once('../../private/initialize.php'); ?>

<!--call header hook-->
<?php include(SHARED_PATH . '/profile_header.php'); ?>
<?php
$id = $_GET['id'];
$page = xss(base64_decode($_GET['page']));
?>

<?php
if ($page == 'researches') {
    ?>
    <section class="container-fluid">
        <div class="dtl_row col-8 row" style="margin: 0 auto; padding-top: 24px">
            <div style="background-image: url('<?php echo url_for('/images/research/IMG_4979-min-scaled.jpg') ?>');width: 376px;height: 268px;background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
            <p class="row_content col-8" style="text-align: center">
                <span style="margin-bottom: 24px; display: block;">Bejo Mexico conducts many vegetable trials each year. QuickTrials has helped to double the number
                    of traits collected while greatly reducing the time and effort required to obtain the data.</span>
                <span style="margin-bottom: 24px; display: block;">“We can now analyse data in ways that was not possible before”</span>
                <span style="margin-bottom: 24px; display: block;">Adrián Carvajal Alvízar</span>
                <a class="contacts col-2" href="<?php echo url_for('/contacts.php'); ?>">more details</a>
            </p>
        </div>
        <div class="dtl_row col-8 row" style="margin: 0 auto; padding-top: 24px">
            <div style="background-image: url('<?php echo url_for('/images/research/3P2A7247.jpg') ?>');width: 376px;height: 268px;background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
            <p class="row_content col-8" style="text-align: center">
                <span style="margin-bottom: 24px; display: block;">The Syngenta Foundation conducts trials of 20 different crops across 9 countries using QuickTrials
                    to streamline its operations.</span>
                <span style="margin-bottom: 24px; display: block;">“QuickTrials allows us to follow a target-driven approach that makes experimentation a lot more
                    efficient.”</span>
                <span style="margin-bottom: 24px; display: block;">Ye Pyae Kyaw</span>
                <a class="contacts col-2" href="<?php echo url_for('/contacts.php'); ?>">more details</a>
            </p>
        </div>
        <div class="dtl_row col-8 row" style="margin: 0 auto; padding-top: 24px;">
            <div style="background-image: url('<?php echo url_for('/images/research/Schermata-men.jpg') ?>');width: 376px;height: 268px;background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
            <p class="row_content col-8" style="text-align: center">
                <span style="margin-bottom: 24px; display: block;">Crop Nutrition Laboratory Services Ltd (Cropnuts) is Africa’s leading independent laboratory for
                    agricultural and environmental testing.</span>
                <span style="margin-bottom: 24px; display: block;">“Managing trials became a lot easier and less stressful, thanks to QuickTrials.”</span>
                <span style="margin-bottom: 24px; display: block;">Jacopo Parigiani</span>
                <a class="contacts col-2" href="<?php echo url_for('/contacts.php'); ?>">more details</a>
            </p>
        </div>
        <div class="dtl_row col-8 row" style="margin: 0 auto; padding-top: 24px">
            <div style="background-image: url('<?php echo url_for('/images/research/IMG_7904-scaled.jpg') ?>');width: 376px;height: 268px;background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
            <p class="row_content col-8" style="text-align: center">
                <span style="margin-bottom: 24px; display: block;">AgCall provides product, fertiliser and variety trials for over 40 crops across the USA and Canada</span>
                <span style="margin-bottom: 24px; display: block;">““I’m impressed by the flexibility provided by QuickTrials. It allows us to capture data beyond
                    field trials, for things like site assessments, product inquires and audits””</span>
                <span style="margin-bottom: 24px; display: block;">Ken Robertson</span>
                <a class="contacts col-2" href="<?php echo url_for('/contacts.php'); ?>">more details</a>
            </p>
        </div>
    </section>
<?php } ?>

<?php
if ($page == 'disease reports') {
    ?>
    <section class="container-fluid">
        <div class="dtl_row col-8 row" style="margin: 0 auto;">
            <div style="background-image: url('<?php echo url_for('/images/ico_2-77x77.png') ?>');"></div>
            <p class="row_content col-6"></p>
            <a class="contacts col-2" href="<?php echo url_for('/contacts.php'); ?>">more details</a>
        </div>
        <div class="dtl_row col-8 row" style="margin: 0 auto;">
            <div style="background-image: url('<?php echo url_for('/images/ico_2-77x77.png') ?>');"></div>
            <p class="row_content col-6"></p>
            <a class="contacts col-2" href="<?php echo url_for('/contacts.php'); ?>">more details</a>
        </div>
        <div class="dtl_row col-8 row" style="margin: 0 auto;">
            <div style="background-image: url('<?php echo url_for('/images/ico_2-77x77.png') ?>');"></div>
            <p class="row_content col-6"></p>
            <a class="contacts col-2" href="<?php echo url_for('/contacts.php'); ?>">more details</a>
        </div>
        <div class="dtl_row col-8 row" style="margin: 0 auto;">
            <div style="background-image: url('<?php echo url_for('/images/ico_2-77x77.png') ?>');"></div>
            <p class="row_content col-6"></p>
            <a class="contacts col-2" href="<?php echo url_for('/contacts.php'); ?>">more details</a>
        </div>
        <div class="dtl_row col-8 row" style="margin: 0 auto;">
            <div style="background-image: url('<?php echo url_for('/images/ico_2-77x77.png') ?>');"></div>
            <p class="row_content col-6"></p>
            <a class="contacts col-2" href="<?php echo url_for('/contacts.php'); ?>">more details</a>
        </div>
    </section>
<?php } ?>

<!--call footer hook-->
<?php include(SHARED_PATH . '/profile_footer.php'); ?>