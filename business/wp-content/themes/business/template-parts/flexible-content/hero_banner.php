<?php
	$slick++;
	$heroBanner++;
?>
<section class="hero_banner">
	<?php if ($heroBanner < 2): ?>
		<style>
			.hero_banner {
				width: 100%;
				overflow: hidden;
				position: relative;
				height: 850px;
				margin-bottom: 30px;
			}
			.hero_banner .home-banner {
				height: 100%;
				width: 100%;
				background: var(--overlay-img-color);
			}
			.hero_banner .home-banner > img {
				height: 100%;
				width: 100%;
				object-fit: cover;
				opacity: .6;
			}
			.hero_banner .home-banner video {
				object-fit: cover;
				width: 100%;
				height: 100%;
				opacity: .6;
			}
			.hero_banner .home-banner .item {
				height: 100%;
				width: 100%;
			}
			.hero_banner .home-banner .slick-slide > div {
				height: 100%;
			}
			.hero_banner .home-banner .item img {
				height: 100%;
				width: 100%;
				object-fit: cover;
				opacity: 0.6;
			}
			.hero_banner > img {
				width: 100% !important;
				height: 100% !important;
				object-fit: cover;
			}
			.hero_banner .videoSearch {
				position: absolute;
				width: 100%;
				left: 50%;
				top: 55%;
				transform: translate(-50%, -50%);
				text-align: center;
			}
			.hero_banner .videoSearch .container-custom {
				max-width: 940px;
				margin: 0 auto;
			}
			.hero_banner .videoSearch h1 {
				text-align: center;
				color: #fff;
				text-transform: uppercase;
				text-shadow: 0 10px 16px rgba(0, 0, 0, .5);
				padding: 0 15px;
				margin: 0;
			}
			.hero_banner .videoSearch h1 span {
				margin: 10px 0 30px;
				font: 300 36px 'Fira Sans Condensed';
				color: #fff;
				letter-spacing: 0.2em;
				text-transform: uppercase;
				display: block;
			}
			.hero_banner .customView {
				width: 100%;
				display: flex;
			}
			.hero_banner .customView .item {
				width: 25%;
			}
			.hero_banner .videoSearch .button-box {
				text-align: center;
			}
			.hero_banner .videoSearch .button-box a:first-child{
				margin-right: 30px;
			}
			.hero_banner .home-banner .slick-list,
			.hero_banner .home-banner .slick-track{
				height: 100%;
			}
			.hero_banner .home-banner .slick-dots{
				position: absolute;
				bottom: 40px;
				left: 50%;
				transform: translateX(-50%);
				display: flex;
				list-style: none;
				margin: 0;
				padding: 0;
			}
			.hero_banner .home-banner .slick-dots li button{
				opacity: 0;
				width: 100%;
				height: 100%;
				margin: 0;
				padding: 0;
			}
			.hero_banner .home-banner .slick-dots li{
				width: 15px;
				height: 15px;
				border-radius: 50%;
				background: rgba(255,255,255, .5);
				cursor: pointer;
				flex-shrink: 0;
			}
			.hero_banner .home-banner .slick-dots li.slick-active{
				background: #fff;
			}
			.hero_banner .home-banner .slick-dots li:not(:last-child){
				margin-right: 15px;
			}
			/*Responsivness*//*Responsivness*//*Responsivness*/
			@media (max-width: 1199px) {
				.hero_banner {
					height: 650px;
				}
			}
			@media (max-width: 991px) {
				.hero_banner .videoSearch .container-custom {
					margin: 0 10px;
				}
				.hero_banner .customView {
					flex-wrap: wrap;
				}
				.hero_banner .customView .item {
					width: 100%;
				}
				.hero_banner .videoSearch .button-box a:first-child {
					margin-right: 40px;
				}
			}
			@media (max-width: 600px) {
				.hero_banner .home-banner .slick-dots{
					bottom: 20px;
				}
				.hero_banner .home-banner .slick-dots li{
					width: 7px;
					height: 7px;
				}
				.hero_banner {
					height: 450px;
					margin-bottom: 20px;
				}
				.hero_banner .logo img {
					height: 55px;
				}
				.hero_banner .bottom-header {
					padding: 10px 15px;
				}
				.hero_banner .videoSearch h1 {
					font-size: 52px;
				}
				.hero_banner .videoSearch h1 span {
					margin-top: 0;
					font-size: 24px;
				}
				.hero_banner .videoSearch .button-box a{
					padding: 12px 25px;
				}
				.hero_banner .videoSearch {
					top: 62%;
				}
				.hero_banner .videoSearch .button-box {
					display: flex;
					flex-direction: column;
					align-items: center;
				}
				.hero_banner .videoSearch .button-box a:first-child {
					margin: 0 0 10px;
				}
				.hero_banner .social li:not(:last-child) {
					margin-right: 7px;
				}
				.hero_banner .top-banner {
					height: 350px;
				}
				.hero_banner .top-banner h1 {
					font-size: 40px;
				}
			}
		</style>
    <?php endif; ?>
	<div class="home-banner">
        <?php if (get_sub_field('choose_content_to_display') == 'Video'): ?>
            <?php if (get_sub_field('video') == ''): ?>
				<video autoplay loop muted>
					<source src="<?php echo get_template_directory_uri(); ?>/images/testVideo.mp4" type="video/mp4"/>
				</video>
            <?php else: ?>
				<video autoplay loop muted>
					<source src="<?php echo get_sub_field('video'); ?>" type="video/mp4"/>
				</video>
            <?php endif; ?>
        <?php elseif (get_sub_field('choose_content_to_display') == 'Slider'): ?>
            <?php $rows = get_sub_field('slider_images');
            if ($rows) {
                foreach ($rows as $row) {
                    echo '<div class="item">
					<img src="' . $row['slider_image']['url'] . '" alt="' . $row['slider_image']['alt'] . '" title=""/> 
					</div>';
                }
            }
            ?>
        <?php else: ?>
            <?php $image = get_sub_field('image'); ?>
			<img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
        <?php endif; ?>
	</div><!--End home-banner-->
	<div class="videoSearch">
		<h1><?php echo get_sub_field('title'); ?>
			<span><?php echo get_sub_field('subtitle'); ?></span>
		</h1>
		<div class="button-box">
			<a href="<?php echo get_sub_field('button_link_#1'); ?>" class="standard_button modal_btn"><?php echo get_sub_field('button_text_#1'); ?></a>
			<a href="<?php echo get_sub_field('button_link_#2'); ?>" class="button_second"><?php echo get_sub_field('button_text_#2'); ?></a>
		</div>
	</div><!--End videoSearch-->
	<?php if($slick < 2):?>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
    <?php endif;?>  
	<script>
        /*Start Banner Slider*/
        var calcItem = jQuery('.home-banner .item');
        var calcItemLG = calcItem.length;
        if(calcItemLG > 1){
			document.addEventListener("DOMContentLoaded", function (event) {
				jQuery('.home-banner').slick({
					dots: true,
					centerMode: false,
					infinite: true,
					fade: true,
					arrows: false,
					autoplay: true,
					pauseOnHover: false,
					slidesToShow: 1,
					autoplaySpeed: 2000,
					slidesToScroll: 1
				});
			});
        }
        /*IE fix for object fit videos*/
        // if (/MSIE 10/i.test(navigator.userAgent)) {
        //     // This is internet explorer 10
        //     jQuery('#slider').addClass('ieFix');
        //     jQuery('.about-area').addClass('ieFix');
        // }
        // if (/MSIE 9/i.test(navigator.userAgent) || /rv:11.0/i.test(navigator.userAgent)) {
        //     // This is internet explorer 9 or 11
        //     jQuery('#slider').addClass('ieFix');
        //     jQuery('.about-area').addClass('ieFix');
        // }
        // if (/Edge\/\d./i.test(navigator.userAgent)) {
        //     // This is Microsoft Edge
        //     jQuery('#slider').addClass('ieFix');
        //     jQuery('.about-area').addClass('ieFix');
	</script>
</section><!--End hero_banner-->
