<?php 
    $slick++;
    $trust_logos++;
?>
<section id="trust-logos-<?php echo $trust_logos;?>" class="trust_logos TS-<?php echo $trust_logos;?>" style="background: <?php the_sub_field('section_background'); ?>">
	<?php if($trust_logos < 2):?>
		<style>		
			.trust_logos {
				padding: 50px 0;
			}
			.trust_logos .slider_wrap {
				display: flex;
				justify-content: space-around;
				align-items: center;
			}
			.trust_logos .img_box {
				padding: 0 25px;
				/*flex-grow: 1;*/
				text-align: center;
			}
			.trust_logos .img_box img {
				max-height: 80px;
				object-fit: contain;
				display: inline-block;
				width: 100%;
			}
			.trust_logos .slick-track {
				display: flex;
				align-items: center;
			}

			/*Responsive*//*Responsive*//*Responsive*/
			@media(max-width: 991px) {
				.trust_logos .img_box {
					padding: 0 15px;
				}
				.trust_logos .img_box img {
					width: 85px;
				}
				.trust_logos {
					padding: 20px 0;
				}
			}
		</style>
	<?php endif; ?> 

	<div class="slider_wrap">
		<?php
			$images = get_sub_field('logos_slider');
			if( $images ):
				foreach( $images as $image ):
				?>
					<div class="img_box">
						<img src="<?=$image['url']?>" alt="<?=$image['alt']?>"/>
					</div>
				<?php
				endforeach;
			endif;
		?>
	</div>

	<?php if($slick < 2):?>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
    <?php endif;?>  
	<script>
		var logos_length = jQuery('.trust_logos.TS-<?php echo $trust_logos;?> .img_box').length;
		if(jQuery(window).innerWidth() > 767) {
			if(logos_length > 6) {
				jQuery('.trust_logos.TS-<?php echo $trust_logos;?> .slider_wrap').slick({
					slidesToShow: 6,
					slidesToScroll: 1,
					arrows: false,
					infinite: true,
					autoplay: true,
					pauseOnHover: false,
					autoplaySpeed: 2500,
					responsive: [
						{
							breakpoint: 1400,
							settings: {
								slidesToShow: 4
							}
						}
					]
				});
			}
		}
		if(jQuery(window).innerWidth() < 768) {
			if(logos_length > 4) {
				jQuery('.trust_logos.TS-<?php echo $trust_logos;?> .slider_wrap').slick({
					slidesToShow: 4,
					slidesToScroll: 1,
					arrows: false,
					infinite: true,
					autoplay: true,
					pauseOnHover: false,
					autoplaySpeed: 2500
				});
			}
		}
	</script>
</section><!-- end trust_logos_section -->

