<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
    </head>
    <body>

        <div id="background">
            <div id="page">
                <div id="header">
                    <span id="connect">
                        <a href="http://facebook.com/freewebsitetemplates" target="_blank" class="facebook"></a>
                        <a href="http://twitter.com/fwtemplates" target="_blank" class="twitter"></a>
                        <a href="http://www.youtube.com/fwtemplates" target="_blank" class="vimeo"></a>
                    </span>
                    <span id="infos">
                        <a href="">View Bags</a>|<a href="">Checkout</a>
                    </span>
                    <a href="index.html" id="logo"></a> <!-- /#logo -->
                    <?php include_slot('menu') ?>
                </div> <!-- /#header -->
                <div id="contents">
                    <?php echo $sf_content ?>
                </div> <!-- /#contents -->
                <div id="footer">
                    <div id="description">
                        <div>
                            <a href="index.html" class="logo"></a>
                            <span>&copy; Copyright &copy; 2011. <a href="index.html">Company name</a> All rights reserved</span>
                        </div>
                        <p>
                            This website template has been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> for you, for free. You can replace all this text with your own text.
                            You can remove any link to our website from this website template, you're free to use this website template without linking back to us.
                            If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forum/">Forum</a>.
                        </p>
                    </div>
                    <div class="navigation">
                        <a href="index.html">Home</a>|
                        <a href="about.html">About</a>|
                        <a href="blog.html">Blog</a>|
                        <a href="shop.html">Shop</a>|
                        <a href="contact-us.html">Contact Us</a>
                    </div>
                </div> <!-- /#footer -->
            </div> <!-- /#page -->
        </div> <!-- /#background -->
    </body>
</html>
