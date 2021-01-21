<?php
$team++;
?>
<section class="team" id="team-<?php echo $team; ?>">
    <?php if ($team < 2): ?>
		<style>
			.team {
				text-align: center;
				padding: 50px 0;
				background-color: #f2f2f2;
			}
			.team .team-box {
				display: flex;
				justify-content: center;
				flex-wrap: wrap;
			}
			.team .team-block {
				box-shadow: 0px 7px 30px rgba(0, 0, 0, 0.2);
				border: 1px solid #fff;
				text-align: center;
				background-color: #fff;
				width: 100%;
				height: 100%;
			}
			.team .team-block-wrap {
				width: 33.3%;
				padding: 0 30px 60px;
			}
			.team .team-img img {
				width: 100%;
				height: 360px;
				object-fit: cover;
			}
			.team .team-block ul {
				margin-top: 20px;
				padding-left: 0;
				margin-bottom: 0;
			}
			.team .team-block ul li {
				display: inline-block;
				padding: 0 8px;
			}
			.team .team-block ul li a{
				display: block;
				position: relative;
				width: 25px;
				height: 25px;
			}
			.team .team-block ul li img {
				position: absolute;
				width: 100%;
				height: 100%;
				object-fit: contain;
				top: 0;
				left: 0;
			}
			.team .team-block ul li img:first-child,
			.team .team-block ul li a:hover img:last-child{
				opacity: 1;
			}
			.team .team-block ul li img:last-child,
			.team .team-block ul li a:hover img:first-child{
				opacity: 0;
			}
			.team .team-block ul li a:hover img {
				transform: scale(1.2);
			}
			.team .team-text {
				padding: 20px;
				box-sizing: border-box;
			}
			.team .team-text h3 {
				font-family: 'Rubik', sans-serif;
				font-size: 18px;
				color: var(--title-color);
				font-weight: 700;				
				line-height: 1.5em;
				margin: 0;
				margin-bottom: 10px;
			}
			.team .team-text h4 {
				font-family: 'Fira Sans Condensed', sans-serif;
				font-size: 16px;
				letter-spacing: 2px;
				text-transform: uppercase;
				font-weight: 100;
				color: #737373;
				margin: 0;
			}
			/*RESPONSIVENESS*//*RESPONSIVENESS*//*RESPONSIVENESS*/
			@media (max-width: 991px) {
				.team .team-block-wrap {
					width: 50%;
				}
			}
			@media (max-width: 767px) {
				.team .team-block-wrap {
					width: 100%;
					max-width: 360px;
				}
				.team {
					padding: 30px 0;
				}
			}
			@media (max-width: 600px) {
				.team .team-block {
					width: 100%;
				}
				.team .team-block-wrap {
					padding: 0 0 30px;
				}
			}
		</style>
    <?php endif; ?>
	<div class="title-wrap">
		<div class="title-box">
			<span class="title-line"></span>
			<span class="subtitle-text"><?php echo get_sub_field('team_subtitle'); ?></span>
			<h2 class="title-text"><?php echo get_sub_field('team_title'); ?></h2>
		</div>
	</div>
	<div class="container-custom">
		<div class="team-box">
            <?php if (have_rows('single_team')): ?>
                <?php while (have_rows('single_team')): the_row(); ?>
					<div class="team-block-wrap">
						<div class="team-block">
							<div class="team-img">
								<?php $team_photo = get_sub_field('team_photo'); ?>
								<img src="<?=$team_photo['url']; ?>" alt="<?=$team_photo['alt']; ?>">
							</div>
							<div class="team-text">
								<h3><?php echo get_sub_field('team_name'); ?></h3>
								<h4><?php echo get_sub_field('team_position'); ?></h4>
								<ul>
                                    <?php if (have_rows('team_social_contact')): ?>
                                        <?php while (have_rows('team_social_contact')): the_row(); ?>
											<li>
												<a href="<?php echo get_sub_field('team_social_link'); ?>">
													<?php $team_social_icon = get_sub_field('team_social_icon'); ?>
													<img src="<?=$team_social_icon['url']; ?>" alt="<?=$team_social_icon['alt']; ?>">
													<?php $team_social_icon_hover = get_sub_field('team_social_icon_hover'); ?>
													<img src="<?=$team_social_icon_hover['url']; ?>" alt="<?=$team_social_icon_hover['alt']; ?>">
												</a>
											</li>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
								</ul>
							</div>
						</div><!-- end team-block -->
					</div><!-- end team-block-wrap -->
                <?php endwhile; ?>
            <?php endif; ?>
		</div>
	</div>
</section><!-- end team -->