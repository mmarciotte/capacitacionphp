
                    
<?php slot(
  'menu',
'<ul id="navigation">
                        <li class="selected"><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                    </ul>');
?>

<div id="main">
    <?php include_partial('addbox', array('add' => 'sale.jpg'));?>
</div>

<?php include_component('home', 'news', array('newss' => $newss));?>

<div id="featured">
    <ul>
        <li><?php echo image_tag($image1, array('alt' => "imagen")) ?></li>
        <li><?php echo image_tag($image2) ?></li>
        <li><?php echo image_tag('shirt-green.jpg') ?></li>
        <li class="last"><?php echo image_tag('shirt-blue.jpg') ?></li>
    </ul>
    <a href="shop.html" class="button">shop here!</a> 
</div>