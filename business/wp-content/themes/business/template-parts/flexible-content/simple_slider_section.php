<?php
$simple_slider++;
?>
<section class="simple_slider" id="simple_slider-<?php echo $simple_slider; ?>">
    <?php if ($simple_slider < 2): ?>
		<style>
			.simple_slider {
				background-color: #fff;
				text-align: center;
				padding: 50px 0;
			}
			.simple_slider .title-wrap {
				margin: 0 auto 20px;
			}
			.simple_slider .slick-list {
				padding: 50px 25% 70px;
			}
			.simple_slider .slick-slide{
				height: 450px;
				position: relative;
				transition: 0.3s;
				transform: scale(1);
			}
			.simple_slider .slick-slide > div,
			.simple_slider .latest-block{
				height: 100%;
			}
			.simple_slider .slick-current img {
				opacity: 1!important;
			}
			.simple_slider .latest-block img {
				opacity: 0.3;
				width: 100%;
				height: 100%;
				object-fit: cover;
				transition: 0.3s;
				display: block;
			}
			.simple_slider .slider-wrap .slick-list .slick-slide.slick-active {
				box-shadow: 0 7px 25px rgba(0, 0, 0, .3);
				transform: scale(1.1);
				z-index: 9999;
			}
			.simple_slider .slick-slider:focus {
				outline: none;
			}
			.simple_slider .slick-prev {
				width: 70px;
				height: 140px;
				border-radius: 0 100% 100% 0 / 0 50% 50% 0;
				background: #fff;
				left: 0;
				border: none;
			}
			.simple_slider .slick-next {
				width: 70px;
				height: 140px;
				border-radius: 100% 0 0 100% / 50% 0 0 50%;
				background: #fff;
				right: 0;
				border: none;
			}
			.simple_slider .slick-arrow {
				top: calc(50% - 105px);
				transition: 0.3s;
				outline: none;
				cursor: pointer;
				position: absolute;
				z-index: 999;
			}
			.simple_slider .slick-arrow img {
				height: 35px;
				filter: invert(100%);
				padding-right: 15px;
			}
			.simple_slider .slick-next img {
				transform: rotate(180deg);
			}
			.simple_slider .slick-arrow:hover {
				background-color: var(--main-color);
			}
			.simple_slider .slick-arrow:hover img {
				filter: none;
			}
			.simple_slider .slick-dots {
				margin-top: 0px;
				display: flex;
				justify-content: center;
				padding-left: 0;
			}
			.simple_slider .slick-dots button {
				width: 30px;
				height: 30px;
				background-color: var(--p-color);
				border-radius: 50%;
				border: none;
				transition: .3s;
				cursor: pointer;
				font-size: 0;
			}
			.simple_slider .slick-dots button:hover {
				background-color: var(--main-color);
			}
			.simple_slider .slick-dots .slick-active button {
				background-color: var(--main-color);
			}

			.simple_slider .slick-dots li {
				list-style: none;
			}
			.simple_slider .slick-dots li:not(:last-child) {
				margin-right: 15px;
			}
			/*RESPONSIVENESS*//*RESPONSIVENESS*//*RESPONSIVENESS*/
			@media (max-width: 1200px) {
				.simple_slider .slick-active button {
					background: var(--main-color) !important;
				}
			}
			@media (max-width: 991px) {
				.simple_slider .slick-slide{
					height: 400px;
				}
			}
			@media (max-width: 767px) {
				.simple_slider {
					padding: 30px 0;
				}
				.simple_slider .slick-list {
					padding: 0 !important;
				}
				.simple_slider .slick-slide{
					height: 300px;
				}
				.simple_slider .slick-dots{
					margin-top: 30px;
				}
				.simple_slider .slick-arrow{
					width: 40px;
					height: 80px;
					top: calc(50% - 80px);
				}
			}
			@media (max-width: 600px) {

				.simple_slider .slick-dots button {
					width: 20px;
					height: 20px;
				}
			}
		</style>
    <?php endif; ?>
	<div class="title-wrap">
		<div class="title-box">
			<span class="title-line"></span>
			<span class="subtitle-text"><?php echo get_sub_field('simple_slider_subtitle'); ?></span>
			<h2 class="title-text"><?php echo get_sub_field('simple_slider_title'); ?></h2>
		</div>
	</div>
	<div class="container-custom">
		<div class="slider-wrap">
            <?php if (have_rows('simple_slider_repeater')): ?>
                <?php while (have_rows('simple_slider_repeater')): the_row(); ?>
					<div class="latest-block">
						<?php $simple_slider_image = get_sub_field('simple_slider_repeater_image'); ?>
						echo '<img src="<?=$simple_slider_image['url']; ?>" alt="<?=$simple_slider_image['alt']; ?>">';
					</div>
                <?php endwhile; ?>
            <?php endif; ?>
		</div>
	</div><!-- end container-custom -->
	<script>
	
        jQuery(document).ready(function () {
            jQuery('#simple_slider-<?php echo $simple_slider;?> .slider-wrap').slick({
                dots: true,
                autoplay: false,
                infinite: true,
                slidesToShow: 1,
                prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="10" role="button"><img src="/wp-content/themes/business/images/slick-arrow.svg" alt="slick-arrow"></button>',
                nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="10" role="button"><img src="/wp-content/themes/business/images/slick-arrow.svg" alt="slick-arrow"></button>',
                slidesToScroll: 1
            });

            /*lining functions*/
            function heightLining(heiLine) {
                var highest = 0;
                jQuery(heiLine).each(function () {
                    var currentHei = jQuery(this).height();
                    if (currentHei > highest) {
                        highest = currentHei;
                    }
                });
                jQuery(heiLine).height(highest);
            }

            setTimeout(function () {
                heightLining('#simple_slider-<?php echo $simple_slider;?> .latest-block');
            }, 100);
            jQuery(window).resize(function () {
                heightLining('#simple_slider-<?php echo $simple_slider;?> .latest-block');
            })
        });
	</script>
</section><!-- end simple_slider -->
