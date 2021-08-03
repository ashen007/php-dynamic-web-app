<footer style="display: block !important;">
    <div class="footer__inner top_gap bottom_gap">
        <div class="container">
            <div class="row">
                <div class="widget widget_text col-md-6 col-lg-6">
                    <div class="textwidget">
                        <div class="footer__item">
                            <div id="logo">
                                <img src="<?php echo url_for('images/WT_logo-1.png'); ?>">
                            </div>
                            <p class="footer__copy"><span class="container">&copy;<?php echo date('Y') . 'CropFoundation
                                All rights reserved.'; ?></span>
                            </p></div>
                    </div>
                </div>
                <div class="widget widget_text col-md-6 col-lg-6">
                    <div class="textwidget">
                        <div class="footer__item"><h3 class="footer__title">Additional menu</h3>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <ul class="footer__menu">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="<?php echo url_for('/blog.php'); ?>">Blog</a></li>
                                        <li><a href="<?php echo url_for('/contacts.php'); ?>">Contacts</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>

<?php
db_close($db);
?>