<?php include( 'template-parts/features/modals/modal-window.php' ); ?>
<?php include( 'template-parts/features/modals/modal-window-1.php' ); ?>
<footer>
	<div class="footer-top">
		<div class="container-custom footer-top-box">
			<div class="footer-top-link">	
                <h3>Navigation</h3>	
                <?php wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'items_wrap' => '<ul>%3$s</ul>',
                )); ?>                    
			</div>
			<div class="footer-top-social">
                <?php $image = get_field('logo_image', get_homePageId($home_id));?>
                <img src="<?php echo $image['url']?>" alt="<?php echo $image['alt']?>" />
				<ul class="social container-flex">
					<?php
                        $icons = get_field('general_social_icons' , get_homePageId($home_id));
                        if($icons):
                            foreach($icons as $icon):
                        ?>
                              <li>
                                <a href="<?=$icon['general_social_icon_link']?>" class="container-flex">
                                    <img src="<?=$icon['general_social_icon']['url']?>" alt="<?=$icon['general_social_icon']['alt']?>"/>
                                    <img src="<?=$icon['general_social_icon_hover']['url']?>" alt="<?=$icon['general_social_icon_hover']['alt']?>"/>
                                </a>
                            </li>  
                        <?php
                            endforeach;
                        endif;
                    ?>
				</ul>
			</div>
			<div class="footer-top-contact">
				<h3>Contact</h3>
                <ul>
					<li><?php echo get_field('address', get_homePageId($home_id))?></li>
					<li>
                        <a href="tel:<?php echo get_field('phone_link', get_homePageId($home_id))?>">
                            tel: <?php echo get_field('phone_number', get_homePageId($home_id))?>
                        </a>
                    </li>
					<li>
                        <a href="mailto:<?php echo get_field('email_link', get_homePageId($home_id))?>">
                            <?php echo get_field('email_text', get_homePageId($home_id))?>
                        </a>
                    </li>
				</ul>
			</div>
		</div>
	</div><!-- end footer-top -->
	<div class="footer-bottom">
		<p>COPYRIGHT 2019 © COMPANY NAME ALL RIGHTS RESERVED</p>
	</div><!-- end footer-bottom -->

    <script>
        <?php if(get_field('header_settings')=='Header Landing'): ?>
            let height_div = jQuery('.bottom-header').height();
            function scrollToAnchor(someButton){
                jQuery(someButton).click(function(event){
                    event.preventDefault();
                    var getValue = jQuery(this).attr('href');
                    var topHei = jQuery(getValue).offset().top - height_div;
                    if(jQuery('body').hasClass('admin-bar')){
                        var topHei = jQuery(getValue).offset().top - height_div - 32;
                        console.log(topHei)
                    }
                    jQuery('html, body').animate({scrollTop: topHei}, 1000);
                });
            }
            scrollToAnchor('header nav > div > ul > li > a , .footer-top-link nav a');
            <?php endif; ?>
    </script>

</footer>
<?php include( 'template-parts/css-parts/footerStyles.php' ); ?>
<?php wp_footer(); ?>
</body>
</html>