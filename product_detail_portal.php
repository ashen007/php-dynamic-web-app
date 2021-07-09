<!--don't change this path to dynamicly genarate!!!!!-->
<?php require_once('private/initialize.php'); ?>

<!--page title-->
<?php
$page_title = 'Product Detail Portal';
$page_sub = 'Have a Question?';
$moto = '';

$product_dtl = get_products()

?>

<!--call header hook-->
<?php include(SHARED_PATH . '/public_header.php'); ?>

<!--body-->
<section class="landing_bg bottom_gap">
    <div class="event_land_img"
         style="background-image: url('<?php echo url_for('/images/insideLexington.png'); ?>')">
        <ul class="landing_header valign">
            <li class="header_content"><h1><?php echo $page_title ?></h1></li>
            <li class="header_content"><h2><?php echo $page_sub ?></h2></li>
            <li class="header_content">
                <p><?php echo $moto ?></p>
            </li>
        </ul>
    </div>
</section>

<section class="event_gallery bottom_gap">
    <ul class="event_wrapper container event_gal_cards">
        <?php while ($product = mysqli_fetch_assoc($product_dtl)) { ?>
            <li class="event_gal_col" style="width: 20% !important;">
                <div class="event_gal_wrapper">
                    <div style="background-image: url('<?php echo WWW_ROOT . $product['prod_img']; ?>');
                            height: inherit; background-position: left; background-repeat: no-repeat;
                            background-size: contain; height: 225px"></div>
                    <div>
                        <p style="margin-top: 12px; color: #056f05"><i
                                    class="fas fa-map-marker-alt"></i><?php echo $product['category'] ?></p>
                        <a class="event-link" style="position: relative; top: 0; left: 0; color: #000000"
                           href="<?php echo url_for('/shared/show.php?page=' . base64_encode(xss('product')) . '&prod=' . base64_encode(xss($product['id']))); ?>">
                            <?php echo $product['item'] ?>
                        </a>
                        <p style="margin-top: 4px; margin-bottom: 2px; color: #656464"><?php echo $product['brand'] ?></p>
                        <p style="margin-top: 2px; margin-bottom: 4px; color: #656464"><?php echo $product['lowest_most_usual_price'].' - '.$product['upper_most_ususal_price'] ?></p>
                    </div>
                </div>
            </li>
        <?php } ?>
    </ul>
</section>

<!--call footer hook-->
<?php include(SHARED_PATH . '/public_footer.php'); ?>
