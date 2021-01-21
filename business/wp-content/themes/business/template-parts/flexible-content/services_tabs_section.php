<?php
    $services_tabs++;
?>
<section class="services_tabs" id="services_tabs-<?php echo $services_tabs;?>">
    <?php if($services_tabs < 2):?>
        <style>
            .services_tabs {
                padding: 60px 0;
                background: #f2f2f2;
                margin-bottom: 50px;
            }
            .services_tabs .container_custom {
                background: #fff;
                padding: 0 55px 55px;
                max-width: 1690px;
                margin: 0 auto;
            }
            .services_tabs .title-wrap {
                margin: 0 auto 160px;
            }
            .services_tabs .title-text {
                background: #f2f2f2;
            }
            .services_tabs .tabs_wrapper {
                display: flex;
                justify-content: center;
                padding: 0;
                margin: 0 -15px -30px;
                list-style-type: none;
                transform: translateY(-45%);
            }
            .services_tabs .tabs_wrapper .tab {
                height: 100%;
                position: relative;
                padding: 40px 20px 30px;
                box-shadow: 0 7px 25px rgba(0, 0, 0, 0.15);
                background: #fff;
                overflow: hidden;
                text-align: center;
                transition: .3s;
                display: flex;
                flex-direction: column;
                justify-content: space-around;
                align-items: center;
                cursor: pointer;
            }
            .services_tabs .tabs_wrapper .tab-wrap{
                width: calc(100% / 6);
                padding: 0 15px;
            }
            .services_tabs .tabs_wrapper .tab:last-child {
                margin-right: 0;
            }
            .services_tabs .tabs_wrapper .tab:hover {
                background: var(--main-color);
            }
            .services_tabs .tabs_wrapper .tab img {
                width: auto;
                height: 73px;
            }
            .services_tabs .tabs_wrapper .tab img.icon_hover {
                position: absolute;
                top: 0;
                left: 50%;
                transform: translateX(-50%);
                opacity: 0;
            }
            .services_tabs .tabs_wrapper .tab .img_wrap {
                position: relative;
                overflow: hidden;
                margin-bottom: 20px;
            }
            .services_tabs .tabs_wrapper .tab-wrap.active_tab img.icon_hover,
            .services_tabs .tabs_wrapper .tab:hover img.icon_hover {
                opacity: 1;
            }
            .services_tabs .tabs_wrapper .tab span {
                font: 700 24px/1 "Fira Sans Condensed", sans-serif;
                text-transform: uppercase;
                letter-spacing: 2.4px;
                color: var(--main-color);
                transition: .3s;
            }
            .services_tabs .tabs_wrapper .tab:hover span {
                color: var(--active-color);
            }
            .services_tabs .tabs_wrapper .tab-wrap.active_tab .tab {
                background: var(--main-color);
                transform: scale(1.1);
                box-shadow: 0 7px 30px rgba(0, 0, 0, 0.15);
                z-index: 1;
            }
            .services_tabs .tabs_wrapper .tab-wrap.active_tab span {
                color: #ffffff;
            }
            .services_tabs .mobile_tab {
                display: none;
                padding: 10px 20px;
                background: var(--title-color);
                color: #fff;
                font-size: 20px;
                text-transform: capitalize;
                border-bottom: 2px solid #fff;
            }
            .services_tabs .mobile_tab.open_content {
                background: var(--main-color);
                border-color: var(--main-color);
                pointer-events:none;
            }
            .services_tabs .tab_content {
                display: none;
            }
            .services_tabs .tab_content.show_tab {
                display: block;
            }
            .services_tabs .content_wrapper {
                position: relative;
                padding: 50px;
                border: 1px solid #bcbcbc;
            }
            .services_tabs .content_wrapper .tab_title {
                position: absolute;
                top: 0;
                left: 50%;
                transform: translate(-50%, -50%);
                margin: 0;
                padding: 0 45px;
                font-size: 30px;
                font-weight: bold;
                text-transform: uppercase;
                background: #fff;
                color: var(--main-color);
                text-align: center;
            }
            .services_tabs .content_wrapper .two_halfs_section {
                display: flex;
                justify-content: space-between;
                margin-bottom: 50px;
            }
            .services_tabs .content_wrapper .two_halfs_section .text_box {
                width: calc(50% - 30px);
                display: flex;
                align-items: center;
            }
            .services_tabs .content_wrapper .two_halfs_section .img_box {
                width: calc(50% - 30px);
                overflow: hidden;
                max-height: 500px;
            }
            .services_tabs .content_wrapper .two_halfs_section .img_box img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            .services_tabs .content_wrapper .tab_bottom {
                text-align: center;
            }
            .services_tabs .content_wrapper .tab_bottom h4 {
                margin: 0 0 50px;
                font-size: 24px;
                font-weight: 700;
                color: var(--active-color);
            }
            .services_tabs .content_wrapper .tab_bottom .items_wrap {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                margin-bottom: 15px;
            }
            .services_tabs .content_wrapper .tab_bottom .items_wrap .item {
                width: calc(100% / 3 - (70px / 3));
                margin-bottom: 30px;
                padding: 0 15px;
                overflow: hidden;
            }
            .services_tabs .content_wrapper .tab_bottom .items_wrap .item img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            .services_tabs .content_wrapper .tab_bottom .text_box {
                text-align: left;
            }
            .services_tabs .go_top {
                position: absolute;
                bottom: 0;
                left: 50%;
                width: 60px;
                height: 60px;
                border-radius: 50%;
                overflow: hidden;
                border: 1px solid #bcbcbc;
                transform: translate(-50%, 50%);
                display: inline-flex;
                justify-content: center;
                align-items: center;
                background: #fff;
            }
            .services_tabs .go_top svg {
                width: 40px;
                height: 40px;
            }
            .services_tabs .go_top svg path {
                fill: var(--main-color);
            }
            /*Responsive*//*Responsive*//*Responsive*/
            @media(max-width: 1400px) {
                .services_tabs .container_custom {
                    padding: 0 35px 55px;
                }
            }
            @media(max-width: 1300px) {
                .services_tabs .tabs_wrapper .tab span {
                    font-size: 20px;
                }
            }
            @media(max-width: 1199px) {
                .services_tabs .tabs_wrapper {
                    transform: translateY(-20%);
                    flex-wrap: wrap;
                }
                .services_tabs .tabs_wrapper .tab-wrap {
                    width: calc(100% / 3);
                    margin-bottom: 20px;
                }
                .services_tabs .tabs_wrapper .tab{
                    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
                }
                .services_tabs .tabs_wrapper .tab.active_tab {
                    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
                }
            }
            @media(max-width: 991px) {
                .services_tabs .content_wrapper .two_halfs_section {
                    flex-wrap: wrap;
                    margin-bottom: 50px;
                }
                .services_tabs .content_wrapper .two_halfs_section .text_box {
                    width: 100%;
                    order: 1;
                }
                .services_tabs .content_wrapper .two_halfs_section .img_box {
                    width: 100%;
                    margin-bottom: 20px;
                }
                .services_tabs .content_wrapper .tab_bottom h4 {
                    margin-bottom: 25px;
                }
                .services_tabs .content_wrapper .tab_bottom .items_wrap {
                    margin-bottom: 25px;
                }
            }
            @media(max-width: 767px) {
                .services_tabs {
                    padding: 30px 0;
                    margin-bottom: 30px;
                }
                .services_tabs .title-wrap {
                    margin: 0 auto 30px;
                }
                .services_tabs .tabs_wrapper {
                    display: none;
                }
                .services_tabs .mobile_tab {
                    display: block;
                }
                .services_tabs .content_wrapper .tab_title {
                    position: static;
                    padding: 0;
                    background: none;
                    transform: none;
                    margin-bottom: 30px;
                }
                .services_tabs .content_wrapper {
                    padding: 30px;
                    display: none;
                    background: #fff;
                }
                .services_tabs .tab_content {
                    display: block;
                }
                .services_tabs .h2-title {
                    margin: 60px 0;
                }
                .services_tabs .content_wrapper .tab_bottom .items_wrap {
                    flex-wrap: wrap;
                }
                .services_tabs .content_wrapper .tab_bottom .items_wrap .item {
                    width: 100%;
                    margin-bottom: 20px;
                    padding: 0;
                }
                .services_tabs .content_wrapper .tab_bottom .items_wrap .item:last-child {
                    margin-bottom: 0;
                }
                .services_tabs .container_custom {
                    padding: 0 20px;
                    background: transparent;
                }
            }
            @media(max-width: 600px) {
                .services_tabs .content_wrapper .tab_bottom h4 {
                    font-size: 21px;
                }
                .services_tabs .go_top {
                    width: 50px;
                    height: 50px;
                    font-size: 32px;
                }
            }
        </style>
    <?php endif; ?>
    <div class="title-wrap">
		<div class="title-box">
			<span class="title-line"></span>
			<span class="subtitle-text"><?php echo get_sub_field('section_title'); ?></span>
			<h2 class="title-text"><?php echo get_sub_field('section_subtitle'); ?></h2>
		</div>
	</div>
    <div class="container_custom">
        <ul class="tabs_wrapper">
            <?php if( have_rows('tabs_repeater') ): ?>
                <?php while( have_rows('tabs_repeater') ): the_row(); ?>
                    <li class="tab-wrap">
                        <div class="tab">
                            <div class="img_wrap">
                                <?php $tab_icon = get_sub_field('tab_icon'); ?>
                                <img src="<?=$tab_icon['url']; ?>" alt="<?=$tab_icon['alt']; ?>">
                                <?php $tab_icon_hover = get_sub_field('tab_icon_hover'); ?>
                                <img class="icon_hover" src="<?=$tab_icon_hover['url']; ?>" alt="<?=$tab_icon_hover['alt']; ?>">
                            </div>
                            <span><?php echo get_sub_field('tab_title'); ?></span>
                        </div>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
        <div class="tabs_content_wrapper">
            <?php if( have_rows('tabs_repeater') ): ?>
                <?php while( have_rows('tabs_repeater') ): the_row(); ?>
                    <div class="tab_content">
                        <a href="#" class="mobile_tab"><?php echo get_sub_field('tab_title'); ?></a>
                        <div class="content_wrapper">
                            <h3 class="tab_title"><?php echo get_sub_field('tab_title'); ?></h3>
                            <div class="two_halfs_section">
                                <div class="text_box">
                                    <?php echo get_sub_field('two_half_section_text'); ?>
                                </div>
                                <div class="img_box">
                                    <?php $two_half_image = get_sub_field('two_half_section_image'); ?>
                                    <img src="<?=$two_half_image['url']; ?>" alt="<?=$two_half_image['alt']; ?>">
                                </div>
                            </div>
                            <div class="tab_bottom">
                                <h4><?php echo get_sub_field('gallery_title'); ?></h4>
                                <div class="items_wrap">
                                    <?php if( have_rows('gallery') ): ?>
                                        <?php while( have_rows('gallery') ): the_row(); ?>
                                            <div class="item">
                                                <?php $gallery_image = get_sub_field('gallery_image'); ?>
                                                <img src="<?=$gallery_image['url']; ?>" alt="<?=$gallery_image['alt']; ?>">
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                                <div class="text_box">
                                    <?php echo get_sub_field('bottom_text'); ?>
                                </div>
                            </div>
                            <a href="#" class="go_top">
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-up" class="svg-inline--fa fa-chevron-up fa-w-14" role="img" viewBox="0 0 448 512"><path fill="currentColor" d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z"/></svg>
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <script>
        jQuery('#services_tabs-<?php echo $services_tabs;?> .tabs_wrapper .tab-wrap:first-child').addClass('active_tab');
        jQuery('#services_tabs-<?php echo $services_tabs;?> .tab_content:first-child').addClass('show_tab');
        jQuery('#services_tabs-<?php echo $services_tabs;?> .tabs_wrapper .tab-wrap').click(function() {
            var tab_index = jQuery(this).index();
            jQuery('#services_tabs-<?php echo $services_tabs;?> .tabs_wrapper .tab-wrap').removeClass('active_tab');
            jQuery(this).addClass('active_tab');
            jQuery('#services_tabs-<?php echo $services_tabs;?> .tab_content').fadeOut(300);
            jQuery('#services_tabs-<?php echo $services_tabs;?> .tab_content').eq(tab_index).fadeIn(300);
        })
        jQuery('#services_tabs-<?php echo $services_tabs;?> .go_top').click(function(e) {
            e.preventDefault();
            var tabs_content_top = jQuery('#services_tabs-<?php echo $services_tabs;?>').offset().top - 100;
            jQuery('body,html').animate({scrollTop: tabs_content_top}, 400);
        })
        if(jQuery(window).innerWidth() < 768) {
            jQuery('#services_tabs-<?php echo $services_tabs;?> .tab_content').removeClass('show_tab');
            jQuery('#services_tabs-<?php echo $services_tabs;?> .tab_content:first-child .mobile_tab').addClass('open_content').next('.content_wrapper').slideDown(500);
            jQuery('#services_tabs-<?php echo $services_tabs;?> .mobile_tab').click(function(e) {
                e.preventDefault();
                if(jQuery(this).hasClass('open_content')) {
                    jQuery('#services_tabs-<?php echo $services_tabs;?> .mobile_tab').removeClass('open_content');
                    jQuery('.services_tabs-<?php echo $services_tabs;?> .tab_content .content_wrapper').slideUp(300);
                } else {
                    jQuery('#services_tabs-<?php echo $services_tabs;?> .mobile_tab').removeClass('open_content');
                    jQuery(this).addClass('open_content');
                    jQuery('#services_tabs-<?php echo $services_tabs;?> .tab_content .content_wrapper').slideUp(300);
                    jQuery(this).next('.content_wrapper').slideDown(500);
                }
            })
        }
    </script>
</section>