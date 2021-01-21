<?php 
/**
 * Template Name: Boxed Banner
 */
get_header(); ?>
<?php include( get_theme_root().'/'.get_option('stylesheet').'/template-parts/css-parts/bannerStyles.php'); ?>
<div class="content">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post() ?>
            <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'post-thumbnails'); ?> 
                <section class="top-banner">
                    <div class="top-banner-img">
                        <?php if($thumb[0]==''){
                            echo '<img style="width: 100%;" src="/wp-content/themes/BusinessTheme/images/about-banner.jpg" alt="" class="banner-img"/>';
                        }else{
                            echo '<img style="width: 100%;" src="'.$thumb[0].'" alt="" class="banner-img"/>';
                        }
                        ?>
                    </div>
                    <div class="top-banner-content">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </section>

                <div class="boxed">
                    <div class="container">
                        <?php include( get_theme_root().'/'.get_option('stylesheet').'/template-parts/flexible-main.php'); ?>
                    </div>
                </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>