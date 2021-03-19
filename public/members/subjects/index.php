<!--don't change this path to dynamicly genarate!!!!!-->
<?php require_once('../../../private/initialize.php'); ?>

<!--page title-->
<?php
$page_title = 'Subjects';
$id = 1111
?>

<!--call header hook-->
<?php include(SHARED_PATH . '/members_header.php'); ?>

<div class="content">
    <ul>
        <li><a href="<?php echo url_for('/members/subjects/show.php?id=' . $id); ?>">show</a></li>
    </ul>
</div>

<!--call footer hook-->
<?php include(SHARED_PATH . '/members_footer.php'); ?>