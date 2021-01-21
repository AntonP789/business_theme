<?php
    $blog_posts++;
?>

<section id="blog-<?php echo $blog_posts;?>" class="blog_posts">
    <?php if($blog_posts < 2):?>
        <style>
            .blog_posts {
                padding: 50px 0;
                background: #fff;
            }
            .blog_posts .blog-single-img {
                position: relative;
            }
            .blog_posts .blog-single-img img {
                width: 100%;
                height: 400px;
                object-fit: cover;
            }
            .blog_posts .blog-box {
                display: flex;
                justify-content: center;
            }
            .blog_posts .blog-single {
                width: 50%;
            }
            .blog_posts .blog-items {
                width: 50%;
                padding-left: 40px;
            }
            .blog_posts .blog-single-data {
                width: 90px;
                position: absolute;
                top: 0;
                left: 0;
            }
            .blog_posts .blog-single-data p {
                display: flex;
                height: 90px;
                justify-content: center;
                align-items: center;
                margin: 0;
            }
            .blog_posts .blog-single-data p:first-child {
                background-color: #ddd;
                color: #000;
                font-size: 30px;
            }
            .blog_posts .blog-single-data p:last-child {
                color: #fff;
                font-size: 20px;
                background-color: var(--main-color);
            }
            .blog_posts .blog-single-text {
                padding: 30px;
                width: 90%;
                margin: -58px auto 0;
                position: relative;
                box-sizing: border-box;
                border: 1px solid #e6e6e6;
                background-color: #fff;
            }
            .blog_posts .blog-single-text p {
                margin-bottom: 20px;
                margin-top: 0;
                display: -webkit-box;
                -webkit-line-clamp: 4;
                -webkit-box-orient: vertical;
                text-overflow: ellipsis;
                overflow: hidden;
            }
            .blog_posts .blog-single-title {
                display: flex;
                align-items: center;
                margin-bottom: 15px;
                justify-content: space-between;
            }            
            .share-post{
                display: flex;
                align-items: center;
            }
            .share-post a:not(:last-child){
                margin-right: 10px;
            }
            .share-post a{
                position: relative;
                display: flex;
                align-items: center;
                justify-content: center;        
                width: 17px;
                height: 17px;
            }
            .share-post a img{
                position: absolute;
                width: 100%;
                height: 100%;
                object-fit: contain;
            }
            .share-post a img:first-child {
                opacity: 1;
            }
            .share-post a img:last-child{
                opacity: 0;
            }
            .share-post a:hover img{
                transform: rotateY(360deg);
            }
            .share-post a:hover img:last-child{
                opacity: 1;
            }
            .share-post a:hover img:first-child{
                opacity: 0;
            }
            .blog_posts .blog-single-title h3 {
                width: 70%;
                margin: 0;
            }
            .blog_posts .blog-single-title h3 a {
                font-size: 30px;
                color: var(--title-color);
                text-transform: uppercase;
                display: block;
                max-height: 70px;
                overflow: hidden;
            }
            .blog_posts .blog-single-title h3 a:hover {
                color: var(--main-color);
            }
            .blog_posts .blog-single-btn {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            .blog_posts .blog-single-btn a {
                text-decoration: none;
                text-transform: uppercase;
                display: inline-block;
                font: bold 16px 'Fira Sans Condensed', sans-serif;
                padding: 0.7em 1.8em;
                color: #fff;
                letter-spacing: 0.08em;
                border-radius: 30px;
                background-color: var(--active-color);
            }
            .blog_posts .blog-single-btn a:hover {
                background-color: var(--main-color);
            }
            .blog_posts .blog-single-views {
                display: flex;
                justify-content: center;
                align-items: center;
                font-weight: bold;
                color: #959595;
                font-size: 12px;
            }
            .blog_posts .blog-single-views img {
                padding-right: 5px;
            }
            .blog_posts .blog-item {
                text-decoration: none;
                margin: 0 0 40px 0;
                display: flex;
                align-items: center;
            }
            .blog_posts .recent-posts ul {
                list-style: none;
                margin: 0;
                padding: 0;
            }
            .blog_posts .recent-posts li {
                margin-bottom: 30px;
            }
            .blog_posts .blog-item:hover .blog-item-text h3 {
                color: var(--main-color);
            }
            .blog_posts .recent-posts-img {
                flex-shrink: 0;
                width: 200px;
                height: 150px;
                margin-right: 30px;
                background: #03021f;
            }
            .blog_posts .recent-posts-img img {
                object-fit: cover;
                width: 100%;
                height: 100%;
                transition: .3s;
            }
            .blog_posts .recent-posts a {
                display: flex;
                align-items: center;
            }
            .blog_posts .blog-item-text {
                padding-left: 20px;
            }
            .blog_posts .recent-posts h3 {
                max-height: 80px;
                transition: all linear .3s;
                font: bold 18px/1.3 'Rubik', sans-serif;
                color: var(--main-color);
                text-transform: uppercase;
                margin: 0;
            }
            .blog_posts .recent-posts a:hover h3 {
                color: var(--active-color);
            }
            .blog_posts .recent-posts a:hover img {
                opacity: .7;
            }
            .blog_posts .recent-posts p {
                color: var(--p-color);
                margin: 0;
            }
            .blog_posts a.all-posts {
                display: flex;
                text-decoration: none;
                text-transform: uppercase;
                overflow: hidden;
                color: #fff;
                align-items: center;
                background-color: var(--title-color);
                font-family: 'Fira Sans Condensed', sans-serif;
                font-weight: bold;
                height: 90px;
            }
            .blog_posts a.all-posts span:last-child img {
                transition: all linear .3s;
                margin-left: 20px;
            }
            .blog_posts a.all-posts:hover {
                background: var(--main-color);
            }
            .blog_posts a.all-posts:hover span:last-child {
                background: var(--title-color);
            }
            .blog_posts a.all-posts:hover span:last-child img {
                transform: rotate(180deg);
            }
            .blog_posts a.all-posts:hover span:first-child::after {
                border-left: 30px solid var(--main-color);
            }
            .blog_posts  a.all-posts span {
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .blog_posts a.all-posts span:first-child {
                justify-content: center;
                position: relative;
                letter-spacing: 2px;
                font-size: 24px;
                width: 80%;
            }
            .blog_posts a.all-posts span:first-child::after {
                content: '';
                position: absolute;
                right: -30px;
                top: 0px;
                width: 0;
                height: 0;
                transition: all linear .3s;
                border-top: 45px solid transparent;
                border-left: 30px solid var(--title-color);
                border-bottom: 45px solid transparent;
            }
            .blog_posts a.all-posts span:last-child {
                width: 20%;
                background-color: var(--main-color);
                flex-shrink: 0;
                min-width: 100px;
            }
            /*Responsivness*//*Responsivness*//*Responsivness*/
            @media(max-width:1199px) {
                .blog_posts .blog-items {
                    width: 100%;
                    padding-left: 0;
                    max-width: 600px;
                }
                .blog_posts .blog-single {
                    width: 100%;
                    margin-bottom: 30px;
                    max-width: 600px;
                }
                .blog_posts .blog-box {
                    flex-direction: column;
                    align-items: center;
                }
            }
            @media(max-width:767px) {
                .blog_posts {
                    padding: 30px 0;
                }
            }
            @media(max-width:600px) {
                .blog_posts a.all-posts span:first-child {
                    font-size: 20px;
                }
                .blog_posts .blog-single-title h3 {
                    width: 100%;
                    margin-bottom: 25px;
                    text-align: center;
                }
                .blog_posts .blog-single-title ul.social-blog {
                    width: 100%;
                    justify-content: center;
                }
                .blog_posts .blog-single-title {
                    flex-direction: column;
                }
                .blog_posts .blog-single-title ul.social-blog li {
                    margin-left: 0;
                }
                .blog_posts .blog-single-title ul.social-blog li:not(:last-child) {
                    margin-right: 15px;
                }
                .blog_posts .recent-posts-img {
                    width: 120px;
                    height: 100px;
                    margin-right: 20px;
                }
                .blog_posts .blog-single-text {
                    padding: 30px 20px;
                }
            }
        </style>
    <?php endif; ?>
    <div class="title-wrap">
		<div class="title-box">
			<span class="title-line"></span>
			<span class="subtitle-text"><?php echo get_sub_field('section_subtitle'); ?></span>
			<h2 class="title-text"><?php echo get_sub_field('section_title'); ?></h2>
		</div>
	</div>
	<div class="container-custom blog-box">
    <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 1,
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
            while ($query->have_posts()): $query->the_post();
                $img_url = (get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : $default_unit_img_url;
                ?>
            		<div class="blog-single">
            			<div class="blog-single-img">
            				<img src="<?=$img_url?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
            				<div class="blog-single-data">
            					<p><?php the_time('j'); ?></p>
            					<p><?php the_time('M'); ?></p>
            				</div>
            			</div>
            			<div class="blog-single-text">
            				<div class="blog-single-title">
            					<h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
            					<div class="share-post">
                                    <?php
                                        $items = get_field('social_icons', get_homePageId($home_id));
                                        if($items):
                                            foreach($items as $item):
                                        ?>
                                        <a target="_blank" href="<?php echo $item['social_link'];?><?php echo get_permalink(); ?>">
                                            <?php $image = $item['icon'];?>
                                            <img src="<?php echo $image['url']?>" alt="<?php echo $image['alt']?>" />
                                            <?php $image = $item['icon_hover'];?>
                                            <img src="<?php echo $image['url']?>" alt="<?php echo $image['alt']?>" />
                                        </a>
                                        <?php
                                            endforeach;
                                        endif;
                                    ?>
                                </div>
            				</div>
            				<p><?php echo get_the_excerpt(); ?></p>
            				<div class="blog-single-btn">
            					<div class="blog-single-views">
            						<img src="<?php echo get_template_directory_uri(); ?>/images/icon-view.png" alt="view">
            						<span><?php echo wpb_get_post_views(get_the_ID()); ?></span>
            					</div>
            					<a href="<?php echo get_permalink(); ?>">read more</a>
            				</div>
            			</div>
            		</div><!-- end blog-single -->
                <?php
                endwhile;
            endif;
        wp_reset_postdata();
        ?>                    
		<div class="blog-items">
            <div class="recent-posts">
                <ul>
                    <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                        );
                        $query = new WP_Query($args);
                        if ($query->have_posts()) :
                            while ($query->have_posts()): $query->the_post();
                                $img_url = (get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : $default_unit_img_url;
                                ?>
                        <li>                                
                            <a href="<?php echo get_permalink(); ?>">
                                <div class="recent-posts-img">
                                    <img src="<?=$img_url?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
                                </div>
                                <div>
                                    <h3><?php the_title(); ?></h3>
                                    <p><?php the_time('j/m/Y'); ?></p>
                                </div>  
                            </a>                                                                                     
                        </li>
                    <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </ul>
            </div>				
			<a href="<?php echo get_sub_field('action_button_link'); ?>" class="all-posts">
				<span>go to all posts</span>
				<span><img src="<?php echo get_template_directory_uri(); ?>/images/icon-all.png" alt="arrow"></span>
			</a>
		</div><!-- end blog-items -->
	</div><!-- end blog-box -->
</section><!-- end blog -->