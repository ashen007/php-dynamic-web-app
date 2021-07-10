<!--don't change this path to dynamicly genarate!!!!!-->
<?php require_once('private/initialize.php'); ?>

<!--page title-->
<?php
$page_title = 'Crop Foundation';
$event_dtl = get_top_events();
$product_dtl = get_top_products();

if (request_is_post()) {
    $result = add_comment($_POST);

    if ($result !== true) {
        $errors = $result;
    }
}
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
                </div>
            </div>
            <div class="land_img">
                <img src="<?php echo url_for('/images/public_landing.png') ?>" alt="landing image">
            </div>
        </div>
    </div>
</section>

<section class="services top_gap bottom_gap">
    <div class="container">
        <div class="serv_card_inner">
            <div class="serv_card_header">Crop Foundation<br> Farm Ecology Products</div>
            <div class="serv-cover">
                <div class="cow-img">
                    <img src="<?php echo url_for('/images/79cb8a70129685.5b990b414065d.jpg') ?>" alt="landing image">
                </div>
                <div class="serv_card_content">
                    <h4> Smells racy free announcing than durable zesty smart exotic
                        far feel. Screamin' affordable secret way absolutely.</h4>
                    <p>Evaluates vast a real proven works discount secure care. Market invigorate a awesome
                        handcrafted bigger comes newer recommended lifetime. Odor to yummy high racy bonus soaking
                        mouthwatering. First superior full-bodied drink. Like outstanding odor economical deal
                        clinically.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about top_gap bottom_gap">
    <div class="container">
        <div class="serv_card_inner">
            <div class="serv_card_header">The Largest Crop Ever</div>
            <div class="serv-cover">
                <div class="serv_card_content">
                    <h4> Smells racy free announcing than durable zesty smart exotic far feel.
                        Screamin' affordable secret way absolutely.</h4>
                    <p>Stimulates vast a real proven works discount secure care. Market invigorate a awesome handcrafted
                        bigger comes newer recommended lifetime.<br><br>
                        Stimulates vast a real proven works discount secure care. Market invigorate a awesome
                        handcrafted bigger comes newer recommended lifetime. Evulates vast a real proven works discount
                        secure care. Market invigorate a awesome handcrafted bigger comes newer recommended lifetime.
                        Odor to yummy high racy bonus soaking mouthwatering. First superior
                    </p>
                </div>
                <div class="services-list">
                    <div class="valign" style="display: flex;">
                        <div style="height: fit-content; width: fit-content; text-align: center">
                            <div class="service-img"
                                 style="background-image: url('<?php echo url_for('/images/ico_1-77x77.png') ?>');
                                         width:90px; height:90px;"></div>
                            <label>Agriculture<br>Products</label>
                        </div>
                        <div style="height: fit-content; width: fit-content; text-align: center">
                            <div class="service-img"
                                 style="background-image: url('<?php echo url_for('/images/ico_2-77x77.png') ?>');
                                         width:90px; height:90px;"></div>
                            <label>Fresh<br>Vegatables</label>
                        </div>
                        <div style="height: fit-content; width: fit-content; text-align: center">
                            <div class="service-img"
                                 style="background-image: url('<?php echo url_for('/images/ico_3-90x77.png') ?>');
                                         width:90px; height:90px;"></div>
                            <label>Different<br>Livestock</label>
                        </div>
                        <div style="height: fit-content; width: fit-content; text-align: center">
                            <div class="service-img"
                                 style="background-image: url('<?php echo url_for('/images/ico_4-90x77.png') ?>');
                                         width:90px; height:90px;"></div>
                            <label>Modern<br>Technique</label>
                        </div>
                        <div style="height: fit-content; width: fit-content; text-align: center">
                            <div class="service-img"
                                 style="background-image: url('<?php echo url_for('/images/ico_5-77x77.png') ?>');
                                         width:90px; height:90px;"></div>
                            <label>Farm<br>Factory</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="comp_status bottom_gap">
    <div class="product-gallery container valign">
        <ul class="status_list section_wrapper">
            <li class="stat ">
                <ul class="stat_cont">
                    <li class="stat_year"><h3>Our Products</h3></li>
                    <li class="stat_title"><p>Appetizing luscious savor hot senses.
                            Effervescent the secure special. Kids spicey chance</p></li>
                </ul>
            </li>
            <li class="stat top_layer"
                style="background-image: url('<?php echo url_for('/images/products/frutes.jpg') ?>');">
                <ul class="stat_cont">
                    <li class="stat_title">Oranges</li>
                </ul>
            </li>
            <li class="stat top_layer"
                style="background-image: url('<?php echo url_for('/images/products/green_apple.jpg') ?>');">
                <ul class="stat_cont">
                    <li class="stat_title">Green Apples</li>
                </ul>
            </li>
            <li class="stat top_layer"
                style="background-image: url('<?php echo url_for('/images/products/tea.jpg') ?>');">
                <ul class="stat_cont">
                    <li class="stat_title">Tea</li>
                </ul>
            </li>
        </ul>
        <ul class="status_list section_wrapper">
            <li class="stat top_layer"
                style="background-image: url('<?php echo url_for('/images/products/cabage.jpg') ?>');">
                <ul class="stat_cont">
                    <li class="stat_title">Lettuce</li>
                </ul>
            </li>
            <li class="stat top_layer"
                style="background-image: url('<?php echo url_for('/images/products/carrots.jpg') ?>');">
                <ul class="stat_cont">
                    <li class="stat_title">Carrot</li>
                </ul>
            </li>
            <li class="stat top_layer"
                style="background-image: url('<?php echo url_for('/images/products/potato.jpg') ?>');">
                <ul class="stat_cont">
                    <li class="stat_title">Potato</li>
                </ul>
            </li>
            <li class="stat top_layer"
                style="background-image: url('<?php echo url_for('/images/products/tomato.jpg') ?>');">
                <ul class="stat_cont">
                    <li class="stat_title">Tomato</li>
                </ul>
            </li>
        </ul>
    </div>
</section>

<section class="prod_gallery bottom_gap" style="padding-top: 36px">
    <ul class="event_wrapper container event_gal_cards">
        <li class="stat ">
            <ul class="stat_cont">
                <li class="stat_year"><h3>Product Portal</h3></li>
                <li class="stat_title"><p>Appetizing luscious savor hot senses.
                        Effervescent the secure special. Kids spicey chance</p></li>
            </ul>
        </li>
        <?php while ($product = mysqli_fetch_assoc($product_dtl)) { ?>
            <li class="event_gal_col" style="width: 20% !important;">
                <div class="event_gal_wrapper">
                    <div style="background-image: url('<?php echo WWW_ROOT . $product['prod_img']; ?>');
                            height: inherit; background-position: left; background-repeat: no-repeat;
                            background-size: cover; height: 225px"></div>
                    <div>
                        <p style="margin-top: 12px; color: #056f05"><i
                                    class="fas fa-map-marker-alt"></i><?php echo $product['category'] ?></p>
                        <a class="event-link" style="position: relative; top: 0; left: 0; color: #000000"
                           href="<?php echo url_for('/shared/show.php?page=' . base64_encode(xss('product_dtl')) . '&item=' . base64_encode(xss($product['id']))); ?>">
                            <?php echo $product['item'] ?>
                        </a>
                        <p style="margin-top: 4px; margin-bottom: 2px; color: #656464"><?php echo $product['brand'] ?></p>
                        <p style="margin-top: 2px; margin-bottom: 4px; color: #656464"><?php echo $product['lowest_most_ususal_price'] . ' - ' . $product['upper_most_ususal_price'] ?></p>
                    </div>
                </div>
            </li>
        <?php } ?>
    </ul>
    <div class="prod_link">
        <a href="<?php echo url_for('/product_detail_portal.php'); ?>">Explore all</a>
    </div>
</section>

<section class="events_gal">
    <div class="event_gal_wrapper section_wrapper" style="width: 100%">
        <ul class="event_gal_list">
            <?php while ($event = mysqli_fetch_assoc($event_dtl)) { ?>
                <li class="public_events">
                    <div class="event"
                         style="background-image: url('data:image/jpg;base64,<?php echo base64_encode($event["event_banner"]); ?>');
                                 height: inherit; background-position: left; background-repeat: no-repeat;
                                 background-size: cover;">
                    </div>
                    <a class="event-link"
                       href="<?php echo url_for('/shared/show.php?page=' . base64_encode(xss('events')) . '&item=' . base64_encode(xss($event['id']))); ?>">
                        <?php echo $event['headline'] ?>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
</section>

<section class="queries bottom_gap" style="display: flex">
    <div class="comment-img"
         style="width: 50%;
                 padding: 150px 0;
                 background-image: url('<?php echo url_for('/images/fe8f81120512813.60b36e22d2ec3.jpg') ?>');
                 background-position: center;
                 background-size: cover;"></div>
    <div class="queries_wrapper section_wrapper"
         style="width: 50%;
             padding: 150px 110px;
             background-color: #000;
             color: #fff;
             box-sizing: border-box;">
        <h2>Get In Touch</h2>
        <form id="queries" action="<?php echo url_for('/index.php') ?>" method="post">
            <dl>
                <dt>Name</dt>
                <dd>
                    <input type="text" value="" name="name_of_user" style="color: #fff;">
                </dd>
                <?php
                if (isset($errors['name_error'])) {
                    echo "<span class=\"error\">{$errors['name_error']}</span>";
                }
                ?>
            </dl>
            <dl>
                <dt>Email</dt>
                <dd>
                    <input type="email" value="" name="email" style="color: #fff;">
                </dd>
                <?php
                if (isset($errors['email_error'])) {
                    echo "<span class=\"error\">{$errors['email_error']}</span>";
                }
                ?>
            </dl>
            <dl>
                <dt>Comment</dt>
                <dd>
                    <textarea rows="10" cols="50" name="comment" style="color: #fff;"></textarea>
                </dd>
            </dl>
            <dl>
                <dd>
                    <input style="background-color: #DFA58D" type="submit" value="submit">
                </dd>
            </dl>
        </form>
    </div>
</section>

<!--call footer hook-->
<?php include(SHARED_PATH . '/public_footer.php'); ?>
