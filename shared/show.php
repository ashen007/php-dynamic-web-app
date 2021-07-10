<?php require_once('../private/initialize.php'); ?>
<?php
$page = xss(base64_decode($_GET['page']));
$id = xss(base64_decode($_GET['item']));
$content = mysqli_fetch_assoc(get_content($page, $id));
?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<?php
if ($page == 'product_dtl') {
    $product_dtl = get_related_products($content['category'], $content['item']);
    ?>
    <section class="product_dtl bottom_gap top_gap"
             style="padding-top: 120px;
                    display: flex;
                    justify-content: space-between;
                    width: 80%;
                    margin: 0 auto;">
        <div class="prod_img" style="width: 48%;
                                     height: fit-content;">
            <div style="
                    background-image: url('<?php echo WWW_ROOT . $content['prod_img']; ?>');
                    height: 68vh;
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;">
            </div>
        </div>

        <div class="prod_dtl" style="width: 48%">
            <ul class="prod_topics" style="box-sizing: border-box;
                                           padding: 0 24px;">
                <li class="topic">
                    <h3>category</h3>
                    <p><?php echo $content['category'] ?></p>
                </li>
                <li class="topic">
                    <h3>item</h3>
                    <p><?php echo $content['item'] ?></p>
                </li>
                <li class="topic">
                    <h3>brand</h3>
                    <p><?php echo $content['brand'] ?></p>
                </li>
                <li class="topic">
                    <h3>unit</h3>
                    <p><?php echo $content['unit'] ?></p>
                </li>
                <li class="topic">
                    <h3>lowest most usual price</h3>
                    <p><?php echo $content['lowest_most_ususal_price'] . ' &#163' ?></p>
                </li>
                <li class="topic">
                    <h3>upper most usual price</h3>
                    <p><?php echo $content['upper_most_ususal_price'] . ' &#163' ?></p>
                </li>
                <li class="topic">
                    <h3>price range</h3>
                    <p><?php echo $content['price_range'] . ' &#163' ?></p>
                </li>
                <li class="topic">
                    <h3>average price through this week</h3>
                    <p><?php echo $content['avg_price'] . ' &#163' ?></p>
                </li>
                <li class="topic">
                    <h3>previous week average price</h3>
                    <p><?php echo $content['prev_week_avg_price'] . ' &#163' ?></p>
                </li>
                <li class="topic">
                    <h3>weekly price change</h3>
                    <p><?php echo $content['weekly_price_change'] . ' &#163' ?></p>
                </li>
                <li class="topic">
                    <h3>change</h3>
                    <p><?php echo $content['weekly_change'] . '%' ?></p>
                </li>
                <li class="topic">
                    <h3>additional details</h3>
                    <p><?php echo $content['details'] ?></p>
                </li>
            </ul>
        </div>
    </section>

    <section class="top_gap bottom_gap" style="width: 80%;
                                               margin: 0 auto;">
        <h2>Related products</h2>
        <ul class="event_wrapper container event_gal_cards">
            <?php while ($product = mysqli_fetch_assoc($product_dtl)) { ?>
                <li class="event_gal_col" style="width: 20% !important;">
                    <?php
                    echo $product['prod_img'];
                    echo WWW_ROOT . $product['prod_img'];
                    ?>
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
    </section>
<?php } ?>

<?php if ($page == 'events') { ?>
    <section class="landing_bg bottom_gap">
        <div class="event_land_img"
             style="background-image: url('data:image/jpg;base64,<?php echo base64_encode($content["event_banner"]); ?>');">
            <ul class="landing_header valign">
                <li class="header_content"><h1><?php echo $content['headline']; ?></h1></li>
                <li class="header_content"><h2><?php echo $content['location']; ?></h2></li>
                <li class="header_content">
                    <p><?php echo $content['cover_by']; ?></p>
                </li>
            </ul>
        </div>
    </section>

    <section class="event_body">
        <?php echo $content['content']; ?>
    </section>
<?php } ?>

<?php if ($page == 'blog') { ?>
    <section class="landing_bg bottom_gap">
        <div class="event_land_img"
             style="background-image: url('data:image/jpg;base64,<?php echo base64_encode($content["post_banner"]); ?>');">
            <ul class="landing_header valign">
                <li class="header_content"><h1><?php echo $content['post_headline']; ?></h1></li>
                <li class="header_content"><h2><?php echo $content['publish_at']; ?></h2></li>
                <li class="header_content">
                    <p><?php echo $content['author']; ?></p>
                </li>
            </ul>
        </div>
    </section>

    <section class="event_body">
        <?php echo $content['content']; ?>
    </section>
<?php } ?>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
