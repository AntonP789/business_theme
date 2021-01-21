<?php
$LetPr++;
?>
<section class="latest_project">
    <?php if ($LetPr < 2): ?>
		<style>
			/*latest_project*/
			.latest_project {
				background-color: #Fff;
				text-align: center;
				padding: 50px 0;
			}
			.latest_project .title-wrap {
				margin: 0 auto 30px;
			}
			.latest_project .slick-list {
				padding: 33px 25% !important;
				height: 550px;
			}
			.latest_project .slick-active .latest_project-block {
				transform: scale(1.2);
				box-shadow: 0 7px 25px rgba(0, 0, 0, .3);
			}
			.latest_project .slick-active img {
				opacity: 1 !important;
			}
			.latest_project .latest_project-block {
				transition: .3s;
				min-height: 400px;
			}
			.latest_project .latest_project-block img {
				width: 100%;
				height: 100%;
				object-fit: cover;
				opacity: 0.3;
				transition: 0.3s;
			}
			/****************/
			/*.latest_project .slider-wrap .slick-list .slick-slide .latest_project-block {*/
			/*	padding: 37px 0 !important;*/
			/*	height: 450px !important;*/
			/*}*/
			/*.latest_project .slider-wrap .slick-list .slick-slide.slick-active .latest_project-block {*/
			/*	padding: 0 !important;*/
			/*	height: 450px !important;*/
			/*	box-shadow: 0 7px 25px rgba(0, 0, 0, .3);*/
			/*}*/
			/****************/
			.latest_project .slick-prev {
				width: 70px;
				height: 140px;
				border-radius: 0 100% 100% 0 / 0 50% 50% 0;
				background: #fff;
				left: 0;
			}
			.latest_project .slick-next {
				width: 70px;
				height: 140px;
				border-radius: 100% 0 0 100% / 50% 0 0 50%;
				background: #fff;
				right: 0;
			}
			.latest_project .slick-arrow {
				top: calc(50% - 105px);
				transition: 0.3s;
				outline: none;
				cursor: pointer;
				border: none;
				position: absolute;
				z-index: 999;
			}
			.latest_project .slick-arrow img {
				height: 35px;
				filter: invert(100%);
				padding-right: 15px;
			}
			.latest_project .slick-arrow:hover {
				background-color: var(--main_color);
			}
			.latest_project .slick-arrow:hover img {
				filter: none;
			}
			.latest_project .slick-arrow i {
				font-size: 48px;
				color: var(--main_color);
				position: relative;
			}
			.latest_project .slick-prev i {
				right: 10px;
			}
			.latest_project .slick-next i {
				left: 10px;
			}
			.latest_project .slick-dots {
				margin-top: 30px;
				display: flex;
				justify-content: center;
			}
			.latest_project .slick-dots li {
				list-style: none;
			}
			.latest_project .slick-dots button {
				width: 30px;
				height: 30px;
				background-color: var(--hover_color);
				border-radius: 50%;
				border: none;
				transition: .3s;
				cursor: pointer;
				font-size: 0;
			}
			.latest_project .slick-dots button:hover {
				background-color: var(--main_color);
			}
			.latest_project .slick-dots .slick-active button {
				background-color: var(--main_color);
			}
			.latest_project .slick-dots li:not(:last-child) {
				margin-right: 15px;
			}
			/*end latest_project*/
			/*RESPONSIVENESS*//*RESPONSIVENESS*//*RESPONSIVENESS*/
			@media (max-width: 1200px) {
				.latest_project .slick-active button {
					background: var(--main_color) !important;
				}
			}
			@media (max-width: 767px) {
				.latest_project {
					padding: 30px 0;
				}
				.latest_project .slick-list {
					padding: 0 !important;
				}
				.latest_project .slick-list {
					height: 350px;
				}
				.latest_project .latest_project-block {
					min-height: 300px;
				}
			}
			@media (max-width: 600px) {
				.latest_project .slick-arrow {
					width: 50px;
					height: 100px;
				}
				.latest_project .slick-arrow {
					top: calc(50% - 90px);
				}
				.latest_project .slick-dots button {
					width: 20px;
					height: 20px;
				}
			}
		</style>
    <?php endif; ?>
	<div class="title-wrap">
		<h2 class="title-box">
			<span class="title-line"></span>
			<span class="subtitle-text"><?php echo get_sub_field('simple_slider_subtitle'); ?></span>
			<span class="title-text"><?php echo get_sub_field('simple_slider_title'); ?></span>
		</h2>
	</div>
	<div class="container-custom">
		<div class="slider-wrap">
            <?php if (have_rows('simple_slider_repeater')): ?>
                <?php while (have_rows('simple_slider_repeater')): the_row(); ?>
					<div class="latest_project-block">
						<?php $center_slider_image = get_sub_field('simple_slider_repeater_image'); ?>
						<img src="<?=$center_slider_image['url'] ?>" alt="<?=$center_slider_image['alt'] ?>">' 
					</div>
                <?php endwhile; ?>
            <?php endif; ?>
		</div>
	</div><!-- end container-custom -->
	<script>
        document.addEventListener("DOMContentLoaded", function (event) {
            jQuery('.slider-wrap').slick({
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
                heightLining('.latest_project .latest_project-block');
            }, 100);
        });/*End load function*/
        jQuery(window).resize(function () {
            heightLining('.latest_project .latest_project-block');
        })
	</script>
</section><!-- end latest_project_project -->
