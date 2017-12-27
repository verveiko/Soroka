<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Soroka-kiev
 */

?>



<!-- Footer -->
		
		<section id="footer">


        <div class="container">
           <div class="row">
                <div class="col-md-1"><img alt="Майстерня стилю Soroka" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png">
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <p>Майстерня стилю Soroka © 2016<br>м. Осокорки, ул. Елизаветы Чавдар, 1<br>(096) 336-26-30</p>
                </div>
                <div class="col-md-6">
                <p>Понравилось? Поделитесь с друзьями!</p>
                 <script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
<script type="text/javascript" src="//yastatic.net/share2/share.js" charset="utf-8"></script>
<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus" data-counter=""></div>
                </div>
            </div>
        </div>

    	</section>


<?php wp_footer(); ?>

<!-- Bootstrap Javascript -->
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaz61ehJAd5i5SUQtppdOQZeONhMzUfQI"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/spy.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/gallery.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.easing.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.fittext.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/wow.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/creative.js"></script>
    </script>

</body>
</html>