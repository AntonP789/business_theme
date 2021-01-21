<?php
    $specials_slider++;
    $slick++;
?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/slick.js"></script>
<section class="specials_slider" id="specials_slider-<?php echo $specials_slider; ?>">
    <?php if($specials_slider < 2):?>
        <style>
            .specials_slider {
                position: relative;
                display: flex;
            }
            .specials_slider .proposition-slider {
                width: 50%;
            }
            .specials_slider .proposition-img {
                display: flex;
                justify-content: center;
                width: 100%;
                height: 80px;
                position: relative;
                margin-bottom: 25px;
            }
            .specials_slider .proposition-img img {
                position: relative;
                width: auto;
            }
            .specials_slider .proposition-img img:last-child {
                visibility: visible;
            }
            .specials_slider .proposition-img img:first-child {
                visibility: hidden;
                position: absolute;
            }
            .specials_slider .proposition-text {
                padding: 50px 80px;
                box-sizing: border-box;
                width: 50%;
                text-align: center;
            }
            .specials_slider .proposition-block-text h3 {
                margin-bottom: 30px;
                font-family: 'Fira Sans Condensed', sans-serif;
                text-transform: uppercase;
                color: #fff;
                font-weight: bold;
                font-size: 18px;
                letter-spacing: 1px;
            }
            .specials_slider .proposition-block-text p {
                text-align: left;
                color: #fff;
                display: -webkit-box;
                -webkit-line-clamp: 3;
                -webkit-box-orient: vertical;
                text-overflow: ellipsis;
                overflow: hidden;
            }
            .specials_slider .slider-for {
                z-index: -1;
            }
            .specials_slider .slider-for img{
                height: 700px;
                width: 100%;
                object-fit: cover;
            }
            .specials_slider .slider-nav .slick-arrow {
                top: calc(50% - 35px);
                cursor: pointer;
                outline: none;
            }
            .specials_slider .slider-nav .slick-arrow img {
                height: 70px;
                filter: invert(100%);
            }
            .specials_slider .slider-nav .slick-prev.slick-arrow {
                position: absolute;
                z-index: 22;
                left: 10px;
            }
            .specials_slider .slider-nav .slick-list.draggable {
                overflow: hidden;
            }
            .specials_slider .slider-nav .slick-next.slick-arrow {
                position: absolute;
                z-index: 22;
                right: 10px;
            }
            .specials_slider .slider-nav .slick-next img{
                transform: rotateZ(180deg);
            }
            .specials_slider .slick-initialized .slick-slide {
                overflow: hidden;
                margin: 0 15px;
            }
            .specials_slider .slider-for .slick-slide{
                margin: 0;
            }
			.specials_slider .slick-slide img {
				display: inherit;
			}
            .specials_slider .proposition-block {
                transition: all linear .3s;
                text-align: center;
                padding: 30px;
                background-color: var(--main-color);
                box-shadow: 0 7px 15px rgba(0,0,0,.25);
            }
            .specials_slider .slider-nav {
                display: flex;
                z-index: 112;
                align-items: center;
                position: absolute;
                right: 0;
                padding: 0 60px;
                bottom: 30px;
                width: 100%;
                max-width: 1600px;
            }
            .specials_slider .slider-nav .slick-track{
                padding: 20px 0;
            }
            .specials_slider .slider-nav button {
                background: none;
                border: none;
                top: calc(50% - 20px);
            }
            .specials_slider .proposition-text h2 {
                margin-bottom: 40px;
                text-transform: uppercase;
                font-weight: 300;
                color: var(--title-color);
                margin-top: 0;
            }
            .specials_slider .proposition-text h2 span {
                font-weight: bold;
                color: var(--main-color);
            }
            .specials_slider .proposition-text p {
                text-align: left;
                display: -webkit-box;
                -webkit-line-clamp: 5;
                -webkit-box-orient: vertical;
                text-overflow: ellipsis;
                overflow: hidden;
            }
            .specials_slider .slider-nav .slick-center.proposition-block {
                background-color: #fff;
            }
            .specials_slider .slider-nav .proposition-block:hover,
            .specials_slider .slick-current .proposition-block {
                background-color: #Fff;
            }
            .specials_slider .slider-nav .proposition-block:hover .proposition-block-text p,
            .specials_slider .slick-current .proposition-block .proposition-block-text p{
                color: #707070;
            }            
            .specials_slider .proposition-block:hover .proposition-block-text h3,
            .specials_slider .slick-current .proposition-block-text h3{
                color: var(--active-color);
            }
            .specials_slider .slider-nav .proposition-block:hover .proposition-img img:first-child,
            .specials_slider .slick-current .proposition-block .proposition-img img:first-child{
                visibility: visible;
            }
            .specials_slider .slider-nav .proposition-block:hover .proposition-img img:last-child,
            .specials_slider .slick-current .proposition-block .proposition-img img:last-child{
                visibility: hidden;
            }

            /*Responsivness*//*Responsivness*//*Responsivness*/
            @media(max-width:1500px){
                .specials_slider .proposition-text h2{
                    font-size: 36px;
                }
            }
            @media(max-width:1199px){
                .specials_slider{
                    flex-direction: column;
                }
                .specials_slider .slider-for{
                    display: none;
                }
                .specials_slider .proposition-text{
                    margin-bottom: 0;
                    width: 100%;
                }
                .specials_slider .slider-nav{
                    position: relative;
                }
                .specials_slider{
                    flex-direction: column;
                }
                .specials_slider .proposition-slider{
                    width: 100%;
                    order: 1;
                }
                .specials_slider .slider-nav .proposition-block:hover,
                .specials_slider .slick-current.proposition-block {
                    background-color: var(--main_color);
                }
                .specials_slider .slider-nav .proposition-block:hover .proposition-block-text p,
                .specials_slider .slick-current.proposition-block .proposition-block-text p{
                    color: #fff;
                }
                .specials_slider .slider-nav .proposition-block:hover .proposition-img img:first-child,
                .specials_slider .slick-current.proposition-block .proposition-img img:first-child{
                    visibility: hidden;
                }
                .specials_slider .slider-nav .proposition-block:hover .proposition-img img:last-child,
                .specials_slider .slick-current.proposition-block .proposition-img img:last-child{
                    visibility: visible;
                }
            }
            @media(max-width:991px){
                .specials_slider .slider-nav{
                    width: calc(100% - 30px);
                    margin: 0 auto;
                }
                .specials_slider .slider-nav .proposition-block:hover, 
                .specials_slider .slick-current .proposition-block{
                    background-color: var(--main-color);
                }
                .specials_slider .slick-current .proposition-block .proposition-img img:last-child{
                    visibility: visible;
                }
                .specials_slider .slick-current .proposition-block .proposition-img img:first-child{
                    visibility: hidden;
                }
                .specials_slider .slick-current .proposition-block .proposition-block-text p{
                    color: #fff;
                }
            }
            @media(max-width:600px){
                .specials_slider .slider-nav{
                    width: 100%;
                    padding: 0;
                }
                .specials_slider .proposition-text{
                    padding: 40px 15px;
                }
                .specials_slider .proposition-block{
                    padding: 30px 60px;
                    margin: 0;
                }
                .specials_slider .slick-next {
                    width: 50px;
                    height: 100px;
                    border-radius: 100% 0 0 100% / 50% 0 0 50%;
                    background: #fff;
                    right: 0px!important;
                }
                .specials_slider .slick-prev {
                    width: 50px;
                    height: 100px;
                    border-radius: 0 100% 100% 0 / 0 50% 50% 0;
                    background: #fff;
                    left: 0px!important;
                }
                .specials_slider .slider-nav .slick-arrow {
                    top: calc(50% - 55px);
                }
                .specials_slider .slider-nav .slick-arrow img{
                    filter: none;
                    height: 40px;
                }
                .specials_slider .slider-nav .slick-next.slick-arrow{
                    right: 0;
                }
                .specials_slider .slider-nav .slick-prev.slick-arrow{
                    left: 0;
                }
            }
        </style>
    <?php endif; ?>
    
    <div class="proposition-slider">
        <div class="slider-for">
            <?php if( have_rows('specials_slider') ): ?>
                <?php while( have_rows('specials_slider') ): the_row(); ?>
                    <div class="for-slider">
                        <?php $big_back_image = get_sub_field('big_back_image'); ?>
                        <img src="<?=$big_back_image['url']; ?>" alt="<?=$big_back_image['alt']; ?>">
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="slider-nav">
            <?php if( have_rows('specials_slider') ): ?>
                <?php while( have_rows('specials_slider') ): the_row(); ?>
                    <div class="proposition-block">
                        <div class="proposition-img">
                            <?php $item_icon = get_sub_field('item_icon'); ?>
                            <img src="<?=$item_icon['url']; ?>" alt="<?=$item_icon['alt']; ?>">
                            <?php $item_icon_hover = get_sub_field('item_icon_hover'); ?>
                            <img src="<?=$item_icon_hover['url']; ?>" alt="<?=$item_icon_hover['alt']; ?>">
                        </div>
                        <div class="proposition-block-text">
                            <h3><?php the_sub_field('item_title'); ?></h3>
                            <p><?php the_sub_field('item_text'); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div><!-- end proposition-slider -->
    <div class="proposition-text">
        <h2><?php the_sub_field('section_title'); ?></h2>
        <p><?php the_sub_field('section_text'); ?></p>
    </div>

    <?php if($slick < 2):?>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
    <?php endif;?> 
    <script>
        /*Start slick for special*/
        jQuery('#specials_slider-<?php echo $specials_slider;?> .slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '#specials_slider-<?php echo $specials_slider;?> .slider-nav'
        });
        jQuery('#specials_slider-<?php echo $specials_slider;?> .slider-nav').slick({
            centerPadding: '30px',
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '#specials_slider-<?php echo $specials_slider;?> .slider-for',
            prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button"><img src="/wp-content/themes/business/images/slick-arrow.svg" alt="slick-arrow"></button>',
            nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><img src="/wp-content/themes/business/images/slick-arrow.svg" alt="slick-arrow"></button>',
            dots: false,
            centerMode: false,
            focusOnSelect: true,
            responsive: [
                {
                breakpoint: 991,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
                }
            ]
        });
    </script>
</section><!-- end propositions -->