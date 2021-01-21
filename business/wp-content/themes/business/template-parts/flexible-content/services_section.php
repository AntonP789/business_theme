<?php
$services++;
?>
<section class="services" id="services-<?php echo $services; ?>">
    <?php if ($services < 2): ?>
		<style>
			.services {
				text-align: center;
				background-color: #fff;
				padding: 50px 0;
				position: relative;
			}
			.services .title-wrap {
				margin-bottom: 30px;
			}
			.services .what-bg {
				position: absolute;
				width: 100%;
				top: 140px;
				bottom: 20px;
				padding: 0 7%;
			}
			.services .what-bg img {
				width: 100%;
				height: 100%;
				object-fit: contain;
			}
			.services .what-box {
				display: flex;
				justify-content: center;
				flex-wrap: wrap;
				position: relative;
			}
			.services .what-margin {
				display: flex;
				flex-direction: column;
				width: 33.333%;
				height: auto;
				text-align: center;
				padding: 25px;
				box-sizing: border-box;
			}
			.services .what-block {
				background-color: #fff;
				padding: 45px 30px;
				height: 100%;
				box-shadow: 0px 7px 35px 0px rgba(0, 0, 0, 0.15);
			}
			.services .what-block img {
				margin-bottom: 35px;
				height: 95px;
			}
			.services .what-block h3 {
				margin-top: 0;
				margin-bottom: 1.1em;
				display: block;
				color: var(--main-color);
				text-transform: uppercase;
				font-weight: bold;
			}
			.services .what-block p {
				text-align: center;
			}
			/*RESPONSIVENESS*//*RESPONSIVENESS*//*RESPONSIVENESS*/
			@media (max-width: 1199px) {
				.services .what-margin {
					width: 50%;
				}
				.services .what-bg {
					padding: 0;
				}
				.services .what-bg img {
					object-fit: cover;
					width: 90%;
					height: 90%;
				}
			}
			@media (max-width: 767px) {
				.services .what-margin {
					width: 100%;
				}
				.services .what-bg {
					display: none;
				}
			}
			@media (max-width: 600px) {
				.services{
					padding: 30px 0;
				}
				.services .what-margin {
					padding: 10px 5px;
				}
			}
		</style>
    <?php endif; ?>
	<div class="what-bg">
		<img src="<?php echo get_template_directory_uri(); ?>/images/world-dots-map.svg" alt="map_dots">
	</div>
	<div class="title-wrap">
		<div class="title-box">
			<span class="title-line"></span>
			<span class="subtitle-text"><?php echo get_sub_field('services_subtitle'); ?></span>
			<h2 class="title-text"><?php echo get_sub_field('services_title'); ?></h2>
		</div>
	</div>
	<div class="container-custom">
		<div class="what-box">
            <?php if (have_rows('single_service')): ?>
                <?php while (have_rows('single_service')): the_row(); ?>
					<div class="what-margin">
						<div class="what-block">
							<?php $single_service_img = get_sub_field('single_service_img'); ?>
							<img src="<?=$single_service_img['url']; ?>" alt="<?=$single_service_img['alt']; ?>">
							<h3><?php echo get_sub_field('single_service_title'); ?></h3>
							<p><?php echo get_sub_field('single_service_text'); ?></p>
						</div>
					</div>
                <?php endwhile; ?>
            <?php endif; ?>
		</div>
	</div><!-- end what-box -->
</section><!-- end service -->