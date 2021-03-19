<!--don't change this path to dynamicly genarate!!!!!-->
<?php require_once('../../../private/initialize.php'); ?>

<!--call header hook-->
<?php include(SHARED_PATH . '/members_header.php'); ?>
<?php $id = $_GET['id']; ?>

<div class="content">
    <ul>
        <li><a href="<?php echo url_for('/members/subjects/show.php?id=' . $id); ?>">show</a></li>
        <li><?php echo $id; ?></li>
    </ul>
</div>

<!--call footer hook-->
<?php include(SHARED_PATH . '/members_footer.php'); ?>