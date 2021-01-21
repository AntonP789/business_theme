<!doctype html>
<head>
    <!--=== META TAGS ===-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--=== LINK TAGS ===-->
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <title><?php wp_title('', true); ?></title>
    <!--=== WP_HEAD() ===-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="fixing">
            <div class="top-header">
                <div class="container-custom container-flex">
                    <a class="header-phone container-flex" href="tel:<?php echo get_field('phone_link', get_homePageId($home_id))?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-phone-white.svg" title="" alt=""/>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-phone.svg" title="" alt=""/>
                        <span><?php echo get_field('phone_number', get_homePageId($home_id))?></span>
                    </a>
                    <ul class="social container-flex">
                        <?php
                            $icons = get_field('general_social_icons' , get_homePageId($home_id));
                            if($icons):
                                foreach($icons as $icon):
                            ?>
                                  <li>
                                    <a href="<?=$icon['general_social_icon_link']?>" class="container-flex">
                                        <img src="<?=$icon['general_social_icon']['url']?>" alt="<?=$icon['general_social_icon']['alt']?>"/>
                                        <img src="<?=$icon['general_social_icon_hover']['url']?>" alt="<?=$icon['general_social_icon_hover']['alt']?>"/>
                                    </a>
                                </li>  
                            <?php
                                endforeach;
                            endif;
                        ?>
                    </ul>
                </div>
            </div><!--End top header-->
            <div class="bottom-header container-custom">                     
                <div class="logo">
                    <a href="/">
                        <?php $image = get_field('logo_image', get_homePageId($home_id));?>
                        <img class="logo-white" src="<?php echo $image['url']?>" alt="<?php echo $image['alt']?>" />
                    </a>                    
                </div>
                <?php if(get_field('header_settings')=='Header Standard' || get_field('header_settings')== null ): ?>
                    <nav>
                        <?php wp_nav_menu(array(
                            'theme_location' => 'header-menu',
                            'items_wrap' => '<ul>%3$s</ul>',
                        )); ?>
                    </nav>
                <?php else: ?>
                    <nav>
                        <div class="menu-menu-1-container">
                            <ul>
                                <?php include( 'template-parts/flexible-nav.php' ); ?>
                            </ul>
                        </div>
                    </nav>
                <?php endif; ?>
                <div class="mobileMenu">
                    <span class="iconAnime">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </div>                                          
            </div><!--End bottom header-->
        </div><!--End fixing-->
    </header>
<?php include( 'template-parts/css-parts/headerStyles.php' ); ?>