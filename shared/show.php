<?php require_once('../private/initialize.php'); ?>
<?php
$page = xss(base64_decode($_GET['page']));
$id = xss(base64_decode($_GET['item']));
$content = get_content($page, $id)
?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<?php if ($page == 'product') { ?>
<?php } ?>

<?php if ($page == 'events') { ?>
<?php } ?>

<?php if ($page == 'blog') { ?>
<?php } ?>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
