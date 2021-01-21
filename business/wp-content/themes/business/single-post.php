<style type="text/css">
    .banner{
        height: 500px;
        background: #000;
        overflow: hidden;
        position: relative;
    }
    .banner .banner-img{
        width: 100%;
        opacity: 0.6;
        object-fit: cover;
        height: 100%;
    }
    .banner h1{
        max-width: 1000px;
        color:#fff;
        text-align: center;
        text-transform: uppercase;
        font-size:60px;
        width: 100%;
        position: absolute;
        left: 50%;
        top: 55%;
        transform: translate(-50%, -50%);
        margin-top: 0;
        font-weight: 400!important;
        line-height: 1;
    }
    .main-content{
        padding: 50px 0;
        min-height: 500px;
        font-weight: 400!important;       
    }
    .social-author{
        display: flex;
        justify-content: space-between;
        align-items: center;
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
    .main-content .single-post{
        padding: 30px 0;
    }
    .main-content .single-post img{
        width: 100%;
        height: auto;
    }
    @media(max-width:767px){
        .banner h1{
            font-size:30px;
        }
        .banner{
            height: 350px;
        }
    }
    @media (max-width: 600px){
    .logo img {
        height: 55px;
    }
    }
</style>

<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post() ?>
        <?php wpb_set_post_views(get_the_ID()); ?>
        <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'post-thumbnails'); ?>
        <section class="banner container-fluid">
            <div class="row">
                <?php
                if($thumb[0]==''){
                    echo '<img src="'.$default_banner_img_url.'" alt="" class="banner-img"/>';
                }else{
                    echo '<img src="'.$thumb[0].'" alt="" class="banner-img"/>';
                }
                ?>
                <h1><?php the_title(); ?></h1>
            </div>
        </section><!-- end banner -->

    <?php endwhile; ?>
<?php endif; ?>

<section class="main-content">

    <div class="container-custom">
        <div class="social-author">
            <div class="calendar-item">
                <span><?php the_time('j F, Y'); ?></span>
            </div>
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
        <div class="single-post">            
            <?php the_content(); ?>            
        </div>
    </div>
</section>

<?php get_footer(); ?>