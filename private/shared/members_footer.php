<footer>
    <span class="container">&copy;<?php echo date('Y'); ?> CropFoundation</span>
</footer>
<script rel="script" type="text/javascript" src="<?php echo url_for('/scripts/members.js') ?>"></script>
</body>
</html>

<?php
db_close($db);
?>