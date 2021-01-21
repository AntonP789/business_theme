<?php
    $blog_title = 'OUR BLOG';
    $banner_img_url = $default_banner_img_url;
    $default_unit_img_url = $default_banner_img_url;
    $main_color = '#343434';
    $second_color = '#3ededc';
    if(is_category()){
        $blog_sub_title = 'Category - '.single_term_title('', 0);
    }elseif(is_search()){
        $blog_sub_title = 'You searched - '.get_search_query();
    }else{
        $blog_sub_title = 'BLOG POST';
    }
?>
<style>
/*general settings*/
a, a:hover, a:focus {
    text-decoration: none;
}
.leftFloat{
    float: left;
}
.rightFloat{
    float: right;
}
a, button, input[type="submit"], .itemHover img{
    transition: all 0.4s;
}
.customClear:before, .customClear:after{
    content:"";
    display:block;
    height:0;
    overflow:hidden;
    clear:both;
}
input::-moz-placeholder, textarea::-moz-placeholder{
    opacity: 1!important;
}
select{
    -webkit-appearance: none;
    -moz-appearance: none;
    position: relative;
    z-index: 2;
}
.form-group{
    position: relative;
}
.form-group .caret{
    position: absolute;
}
/*general settings*/
/*top-banner-blog*/
.top-banner{
    position: relative;
    background: var(--overlay-img-color);
    height: 600px;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
}
.top-banner .top-banner-img{
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
}
.top-banner .top-banner-img img{
    height: 100%;
    width: 100%;
    object-fit: cover;
    opacity: 0.5;
}
.top-banner .top-banner-content{
    position: relative;
}
.top-banner h1{
    font: 600 72px 'Rubik';
    color: #fff;
    text-transform: uppercase;
    text-shadow: 0 10px 16px rgba(0, 0, 0, .5);
    padding: 0 15px;
    padding-top: 20px;
    margin: 0;
}
/*end top-banner-blog*/
/*blog-content*/
.blog-content{
    padding: 30px 0;
    background: #f2f2f2;
}
.blog-content-box{
    max-width: 1520px;
    margin: 0 auto;
    overflow: hidden;
    padding: 0 15px;
}
h2.blog-title{
    width: 100%;
    text-align: center;
    font: 700 30px 'Fira Sans Condensed';
    color: <?=$main_color?>;
    text-transform: uppercase;
    margin: 0 0 28px 0;
    padding-bottom: 18px;
    border-bottom: 1px solid #cbcbcb;
}
h2.blog-title i{
    margin-right: 10px;
}
h2.blog-title a{
    color: <?=$main_color?>;
    font-weight: 400;
}
h2.blog-title a:hover{
    color: <?=$second_color?>;    
}
.blog-posts{
    padding: 0 15px;
    width: calc(100% - 400px);
    float: left;
}
.blog-sidebar{
    padding: 0 15px;
    width: 400px;
    float: left;
}
.single-post{
    background: #fff;
    margin-bottom: 40px;
    box-shadow: 0 0 25px 0 rgba(0,0,0,0.2);
}
.single-post.popular {
    padding: 0 10px 0 0;
    background: transparent;
    box-shadow: none;
}
.single-post-img{
    max-width: 320px;
    position: relative;
    overflow: hidden;
}
.single-post-img img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: 0.3s;
}
.single-post-img a:hover img{
    -webkit-filter: brightness(80%);
}
.single-post-calendar{
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    background: rgba(0,0,0,0.6);
    padding: 10px;
}
.single-post-categories{
    text-align: center;
    font: 300 18px 'Rubik';
    color: #fff;
}
.single-post-text{
    position: relative;
    padding: 32px;
    width: calc(100% - 320px);
}
.single-post-text h3{
    margin: 0;
    text-transform: uppercase;
}
.single-post-text h3 a{
    color: #000;
    font-size: 30px;
    font-weight: 400;
    font-family: 'Rubik',sans-serif;
    display: block;
    overflow: hidden;
}
.single-post-text h3 a:hover{    
    color: var(--main-color);
}
.single-post-text article p{
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    text-overflow: ellipsis;
    overflow: hidden;
    margin: 0;
}
.single-post-text article{
    margin-bottom: 28px;
}
.social-author{
    padding: 20px 0;
    overflow: hidden;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.single-post-box{
    display: flex;
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
.post-author,
.share-post span {
    color: <?=$main_color?>;
}
.more-article{
    background: <?=$second_color?>;
    padding: 8px 20px;
    color: #fff;
    font: 700 16px 'Fira Sans Condensed';
    letter-spacing: 1px;
    line-height: 16px;
    text-transform: uppercase;
    border-radius: 50px;
    min-width: 154px;
    text-align: center;
}
.more-article:hover{
    background: #4495F8;
    color: #fff!important;
}
.views{
    overflow: hidden;
    width: 100%;
    background: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.views-views{
    display: flex;
    align-items: center;
}
.views-views svg {
    padding-right: 5px;
    height: 15px;
    width: 30px;
}
.views-views svg path{
    fill: var(--active-color);
}
.views-views span {
    font: 700 16px 'Fira Sans Condensed';
}
.popular-single:not(:last-child){
    margin-bottom: 25px;
}
.popular-single{
    overflow: hidden;
    display: flex;
    align-items: center;
    color: var(--title-color);
}
.popular-single .img_wrap{
    margin-right: 20px;
    width: 150px;
    height: 150px;
    object-fit: cover;
    background: var(--title-color);
    position: relative;
    flex-shrink: 0;
}
.popular-single .img_wrap img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: .3s ease-in-out;
}
.popular-single:hover .img_wrap img{
    opacity: 0.5;
}
.popular-post-text h4{
    font-size: 18px;
    line-height: 1.2;
    margin:  0 0 5px;
    color: var(--title-color);
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    text-overflow: ellipsis;
    overflow: hidden;
    transition: .3s ease-in-out;
}
.popular-single:hover h4{
    color: var(--main-color);
}
.popular-stars{
    margin-bottom: 10px;
}
.popular-stars img{
    height: 15px;
}
.search-post{
    margin-bottom: 50px;
    height: 85px;
    width: 100%;
    display: flex;
    box-shadow: 0 0 20px 0 rgba(0,0,0,0.2);
}
.submit-area{
    position: relative;
    width: 80px;
    height: 85px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #fff;
}
.submit-area:hover img{
    filter: brightness(100%);
}
.submit-area img{
    width: 35px;
    position: absolute;
    filter: brightness(-100%);
    transition: 0.3s;
}
.submit-field{
    width: 80px;
    height: 100%;
    transition: 0.3s;
    border: none;
    position: relative;
    background: transparent;
    cursor: pointer;
}
.search-icon{
    background: #fff;
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    right: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 0.3s;
}
.search-icon i{
    font-size: 30px;
    color: #141414;
}
.search-field{
    padding-left: 20px;
    width: calc(100% - 80px);
    font: 700 16px 'Fira Sans Condensed';
    color: #141414;
    text-transform: capitalize;
}
input.search-field::-moz-placeholder{
    font: 700 18px 'Fira Sans Condensed';
    color: #141414;
    opacity: 1;
    letter-spacing: 1px;
}
input.search-field::-webkit-input-placeholder{
    font: 700 18px 'Fira Sans Condensed';
    color: #141414;
    letter-spacing: 1px;
}
/*pagination*/
.paginationPosts{
    margin-top: 30px;
    padding: 15px;
    border-top: 2px solid <?=$main_color?>;
}
.paginationPosts span, .paginationPosts a.page-numbers{
    cursor: pointer;
    font-family: 'Fira Sans Condensed', sans-serif;
    font-size: 14px;
    font-weight: 500;
    color: <?=$main_color?>;
    border: 2px solid <?=$main_color?>;
    display: inline-block;
    line-height: 30px;
    width: 35px;
    height: 35px;
    text-align: center;
}
.paginationPosts .next.page-numbers, .paginationPosts .next.page-numbers span,
.paginationPosts .prev.page-numbers, .paginationPosts .prev.page-numbers span{
    border: none;
    width: auto;
    color: <?=$main_color?>!important;
    background: none!important;
}
.paginationPosts .next.page-numbers{
    margin-left: 10px;
}
.paginationPosts .prev.page-numbers{
    margin-right: 10px;
}
.paginationPosts .prev.page-numbers:hover span, .paginationPosts .next.page-numbers:hover span{
    color: <?=$main_color?>!important;
}
.paginationPosts .page-numbers.current, .paginationPosts .page-numbers:hover{
    background: <?=$main_color?>;
    color: #fff;
}
nav.pagination {
    width: 100%;
    margin: 0 0 30px;
    padding-top: 10px;
    border-top: 1px solid #cbcbcb;
}
.nav-links {
    height: 100%;
    font: 700 24px 'Fira Sans Condensed';
}
.nav-links > a{
    color: #4495F8;
}
.nav-links > a:hover{
    color: <?=$second_color?>;
}
.nav-links .current{
    color: #141414;
}
.nav-links a,
.nav-links span{
    margin-right: 10px;
}
h2.screen-reader-text {
    display: none!important;
}
/*end pagination*/
.post-categories{
    display: flex;
    flex-direction: column;
    align-items: center;
}
.cat-list{
    margin: 0;
    padding: 10px;
}
.cat-list li {
    margin-bottom: 16px;
    list-style: none;
    position: relative;
    padding-left: 45px;
    line-height: 1;
}
.cat-list li a {
    color: #000;
    font: 300 24px 'Rubik';
}
.cat-list li:before {
    content: '';
    z-index: 5;
    display: inline-block;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background-color: #000;
    margin-right: 30px;
    position: absolute;
    left: 0;
    top: calc(50% - 6px);
    bottom: 0;
}
.cat-list a{
    font-size: 16px;
    color: <?=$main_color?>;
    font-weight: 700;
}
.cat-list a:hover{
    color: <?=$second_color?>;
}
/*end blog-content*/
/*------RESPONSIVENESS//RESPONSIVENESS//RESPONSIVENESS---------*/
@media(max-width:1199px){
    .top-banner-blog h1{
        font-size: 50px;
    }
    .blog-sidebar{
        width: 340px;
    }
    .blog-posts {
        width: calc(100% - 340px);
    }
    .single-post-img img{
        width: 250px;
    }
    .single-post-text {
        width: calc(100% - 250px);
    }
}
@media(max-width:991px){
    .top-banner-blog {
        height: 450px;
    }
    .blog-posts,
    .blog-sidebar{
        width: 100%;
    }
    .blog-sidebar{
        margin-top: 20px;
    }
    .search-post{
        max-width: 400px;
        margin: 20px auto;
    }
    h2.blog-title{
        text-align: center;
    }
}
@media(max-width:767px){
    .top-banner-blog h1 {
        font-size: 40px;
    }  
    .single-post-box{
        flex-direction: column;
    } 
    .single-post-text{
        width: 100%;
    }
    .single-post-text h3 a{
        text-align: center;
    }
    .single-post-img{        
        margin: 0 auto;
        max-width: none;
        width: 100%;
        height: 350px;
    }
    .single-post-img img{
        width: 100%;
    }
    .single-post-text article{
        max-height: 170px;
    }
    .views{
        padding-left: 0;
        position: relative;
    }    
}
@media(max-width: 600px) {
    .top-banner{
        height: 350px;
    }
    .top-banner h1{
        font-size: 40px;
    }
}
@media(max-width:480px){
    .single-post-img{
        height: 300px;
    }
    .views {
        flex-direction: column;
    }
    .more-article{
        width: 100%;
        text-align: center;
        margin-top: 15px;
    }
    .blog-content-box{
        padding: 0;
    }
    .single-post-text {
        padding: 20px;
        text-align: justify;
    }
}
</style>
<section class="blog">
    <section class="top-banner">
        <div class="top-banner-img">
        <?php $link_banner_image = ( get_the_post_thumbnail_url( get_option( 'page_for_posts' ) ) ) ?  get_the_post_thumbnail_url( get_option( 'page_for_posts' ) ) : $banner_img_url; ?>
            <img src="<?=$link_banner_image?>" alt="" />
        </div>
        <div class="top-banner-content">
            <h1><?=$blog_title?></h1>
        </div>
    </section>
    <section class="blog-content">
        <div class="container-fluid">
            <div class="row">
                <div class="blog-content-box">
                    <div class="blog-posts">
                        <h2 class="blog-title"><?=$blog_sub_title?></h2>        
                        <?php
                        if ( have_posts() ) :
                            query_posts('post_type=post');
                            while ( have_posts() ) : the_post();
                                $img_url = (get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : $default_unit_img_url;
                                ?>
                            <div class="single-post">
                                <div class="single-post-box">
                                    <div class="single-post-img">
                                        <a href="<?php echo get_permalink(); ?>">
                                            <img src="<?=$img_url?>" alt="" title=""/>
                                        </a>
                                        <div class="single-post-calendar">
                                            <div class="single-post-categories">                                                    
                                                <?= get_the_category()[0]->name ?>                                                    
                                            </div>
                                        </div>
                                    </div><!-- end single-post-img -->
                                    <div class="single-post-text">
                                        <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
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
                                        <article>
                                            <p><?php echo get_the_excerpt(); ?></p>
                                        </article>
                                        <div class="views">
                                            <div class="views-item">
                                                <div class="views-views">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        width="116.4px" height="62.4px" viewBox="0 0 116.4 62.4" style="enable-background:new 0 0 116.4 62.4;" xml:space="preserve">
                                                    <style type="text/css">
                                                        .st0{fill:#8FC63D;}
                                                    </style>
                                                    <g>
                                                        <g>
                                                            <path class="st0" d="M58.2,0C29.8,0,2.3,27.1,1.2,28.3C0.4,29.1,0,30.1,0,31.2s0.4,2.1,1.2,2.9c1.2,1.2,28.6,28.3,57,28.3
                                                                s55.9-27.1,57-28.3c0.8-0.8,1.2-1.8,1.2-2.9s-0.4-2.1-1.2-2.9C114.1,27.1,86.7,0,58.2,0z M58.2,54.1c-19.9,0-40.4-16.2-48.1-23
                                                                c7.7-6.8,28.2-23,48.1-23s40.4,16.2,48.1,23C98.6,37.9,78.1,54.1,58.2,54.1z"/>
                                                            <path class="st0" d="M43.5,31.1c0,8.1,6.6,14.8,14.8,14.8s14.8-6.6,14.8-14.8s-6.6-14.8-14.8-14.8S43.5,23,43.5,31.1z"/>
                                                        </g>
                                                    </g>
                                                    </svg>
                                                    <span><?php echo wpb_get_post_views(get_the_ID()); ?></span>
                                                </div>
                                            </div>
                                            <a class="more-article" href="<?php echo get_permalink(); ?>">Read more</a>
                                        </div>                                               
                                    </div><!-- end single-post-text -->
                                </div><!-- end single-post-box --> 
                            </div><!-- end single-post -->        
                            <?php
                            endwhile;
                            echo '<div class="clearfix"></div>';
                            the_posts_pagination( array(
                                'prev_text'          => '<span>< Prev</span>',
                                'next_text'          => '<span>Next ></span>',
                            ) );
                            endif;
                            ?>
                    </div><!-- end blog-posts -->
                    <div class="blog-sidebar">
                        <div class="popular-posts">
                            <h2 class="blog-title">Popular Posts</h2>
                            <div class="single-post popular">
                            <?php
                            $popularpost = new WP_Query( array( 'posts_per_page' => 3, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
                            while ($popularpost->have_posts()) : $popularpost->the_post();
                                $img_url = (get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : $default_unit_img_url;
                                ?>
                                <a href="<?php echo get_permalink(); ?>" class="popular-single">
                                    <div class="img_wrap">
                                        <img src="<?=$img_url?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
                                    </div>                                    
                                    <div class="popular-post-text">
                                        <h4><?php the_title(); ?></h4>
                                        <div class="popular-stars">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Star%2011.svg" title="" alt=""/>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Star%2011.svg" title="" alt=""/>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Star%2011.svg" title="" alt=""/>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Star%2011.svg" title="" alt=""/>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Star%2011.svg" title="" alt=""/>
                                        </div>
                                        <div class="calendar-item">
                                            <span><?php the_time('j F, Y'); ?></span>
                                        </div>
                                    </div>
                                </a>
                                <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
                            </div>
                        </div>
                        <?php get_search_form(); ?>
                        <div class="post-categories">
                            <h2 class="blog-title">Categories</h2>
                            <ul class="cat-list">
                                <?php wp_list_categories( array(
                                    'orderby'  => 'name',
                                    'title_li' => '',
                                ) ); ?>
                            </ul>
                        </div>
                    </div><!-- end blog-sidebar -->
                </div><!-- end blog-content-box -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </section><!-- end blog-content -->
</section><!-- end blog -->