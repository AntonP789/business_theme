<?php
    $testimonials++;
    $slick++;
?>
<section id="testimonials-<?php echo $testimonials;?>" class="testimonials testimonials-<?php echo $testimonials;?>">
    <?php if($testimonials < 2):?>
        <style>
            .testimonials{
                padding: 50px 0 70px;
                overflow: hidden;   
                background: #F2F2F2;     
            }
            .testimonials .container-custom{
                position: relative;
            }
            .testimonials .flex-custom-box:before, .testimonials .flex-custom-box:after{
                content:"";
                display:block;
                height:0;
                overflow:hidden;    
                clear:both;
            }
            .testimonials .item{
                position: relative;
                height: 100%;
            }
            .testimonials .description article p{
                font-weight: 30;
                color: var(--p-color);
                padding: 50px 0 0px;
                margin: 0;
                display: -webkit-box;
                -webkit-line-clamp: 5;
                -webkit-box-orient: vertical;
                text-overflow: ellipsis;
                overflow: hidden;
            }
            .testimonials .description article h4{
                width: 100%;
                font-size: 18px;
                font-weight: bold;
                text-align: center;
                position: absolute;
                bottom: -10px;
                margin: 0;
            }
            .testimonials .description article h4 span{
                display: inline-block;
                padding: 0 20px;
                color: var(--title-color);
                position: relative;
            }
            .testimonials .description article h4 span:before{
                content: "";
                display: block;
                width: 40%;
                height: 1px;
                background: var(--title-color);
                position: absolute;
                top: 50%;
                left: 100%;
                transform: translateY(-50%);
            }
            .testimonials .description article h4 span:after{
                content: "";
                display: block;
                width: 40%;
                height: 1px;
                background: var(--title-color);
                position: absolute;
                top: 50%;
                right: 100%;
                transform: translateY(-50%);
            }
            .testimonials .wrap-slick{
                position: relative;
                width: 65%;
                margin: 0 auto;
            }
            /*animation*/
            .testimonials .flex-custom-box{
                margin: 0;
                width: 100%;
                padding: 60px;
                background: #fff;
                position: absolute;
                box-shadow: 0 7px 20px rgba(0,0,0,0.2);
                transition: transform 1s, left 1s, right 1s;
                left: 0;
                text-align: center;
            }
            .testimonials.rightMove .flex-custom-box{
                left: auto;
                right: 0;
            }
            .testimonials .arrowtestimonials{
                top: calc(50% - 37px);
                position: absolute;
                z-index: 5;
                display: block;
                cursor: pointer;
                transition: opacity 0.3s;
            }
            .testimonials .arrowtestimonials img {
                height: 70px;
                filter: invert(100%);
            }
            .testimonials .arrowtestimonials.turnRight{
                right: 10px;
                transform: rotateY(180deg);
            }
            .testimonials .arrowtestimonials.turnLeft{
                left: 10px;
            }
            .testimonials .flex-custom-box.next{
                transform: scale(1.08, 0.9);
                z-index: 2;
            }
            .testimonials .flex-custom-box.last{
                transform: scale(1.15, 0.8);
                z-index: 1;
            }
            .testimonials .flex-custom-box.view{
                z-index: 3;
            }

            /* Responsiveness *//* Responsiveness *//* Responsiveness */
            @media (max-width: 1440px) {
                .testimonials .flex-custom-box {
                    width: 100% ;
                    right: 0;
                }
                .testimonials .description article p {
                    padding-top: 20px;
                    font-size: 14px;
                }
                .testimonials .arrowtestimonials.turnRight {
                    right: 70px;
                }
                .testimonials .arrowtestimonials.turnLeft {
                    left: 70px;
                }
            }
            @media (max-width: 1199px) {
                .testimonials{
                    padding: 50px 0 120px;
                }
                .testimonials .description article{
                    max-height: none;
                }
                .testimonials .flex-custom-box {
                    position: relative;
                    box-shadow: none;
                    margin: 0 auto;
                }
                .testimonials .flex-custom-box{
                    padding: 60px 80px;
                }
                .testimonials .arrowtestimonials.turnRight,
                .testimonials .arrowtestimonials.turnLeft {
                    display: none;
                }
                .testimonials .flex-custom-box.next,
                .testimonials .flex-custom-box.last {
                    transform: none;
                }
                .testimonials .description article {
                    padding-right: 10px;
                }
                .testimonials .description article h4 {
                    position: static;
                    margin-top: 15px;
                }
                .testimonials .slick-prev {
                    left: -35px;
                } 
                .testimonials .slick-next {
                    right: -35px;
                }  
                .testimonials .slick-next img{
                    transform: rotateZ(180deg);
                }
                .testimonials .slick-arrow{
                    position: absolute;
                    top: calc(50% - 35px);
                    outline: none;
                    margin: 0;
                    padding: 0;
                    width: 70px;
                    height: 70px;
                    border-radius: 50%;
                    background: var(--main-color);
                    z-index: 2;
                    border: none;
                }
                .testimonials .slick-arrow img{
                    width: 20px;
                }
                .testimonials .slick-slide img{
                    width: auto;
                    display: inline-block;
                    margin-bottom: 30px;
                }
                .testimonials .item{
                    text-align: center;
                }
                .testimonials .description article p{
                    margin-bottom: 40px;
                }
                .testimonials .slick-dots li:not(:last-child) {
                    margin-right: 15px;
                }
                .testimonials .slick-dots li {
                    border-radius: 50%;
                    display: inline-block;
                }
                .testimonials .slick-dots .slick-active button {
                    background-color: var(--main-color);
                }
                .testimonials .slick-dots{
                    position: absolute;
                    bottom: -50px;
                    left: 50%;
                    transform: translateX(-50%);
                    margin: 0;
                    padding: 0;
                }
                .testimonials .slick-dots button {
                    width: 30px;
                    height: 30px;
                    background-color: #959595;
                    border-radius: 50%;
                    border: none;
                    transition: .3s;
                    font-size: 0;
                }
                .testimonials .wrap-slick {
                    width: 80%;
                }
                .testimonials .testimonials .slick-slider .slick-arrow{
                    display: block;
                    width: 34px;
                }
                .testimonials .testimonials .slick-slider .slick-arrow img{
                    filter: invert(100%);
                }
            }
            @media (max-width: 991px) {
                .testimonials .wrap {
                    width: 100%;
                }
                .testimonials .rating {
                    top: 35px;
                    right: 45px;
                }
                .testimonials .flex-custom-box {
                    padding-right: 45px;
                }
            }
            @media (max-width: 767px) {
                .testimonials .slick-arrow{
                    display: none!important;
                }
                .testimonials .rating p.angle {
                    top: calc(100% + 17px);
                }
                .testimonials {
                    max-width: 100%;
                    padding: 30px 0 90px;
                }
                .testimonials .slick-dots button{
                    width: 15px;
                    height: 15px;
                }
                .testimonials .flex-custom-box {
                    padding: 40px 30px;
                }
                .testimonials .wrap-slick {
                    width: 100%;
                }
                .testimonials .slick-slide img {
                    margin-bottom: 10px;
                }
            }
        </style>
    <?php endif; ?>
    <div class="title-wrap">
		<div class="title-box">
			<span class="title-line"></span>
			<span class="subtitle-text"><?php echo get_sub_field('testimonials_subtitle'); ?></span>
			<h2 class="title-text"><?php echo get_sub_field('testimonials_title'); ?></h2>
		</div>
	</div>
    <div class="container-custom">
        <span class="arrowtestimonials turnRight">
            <img src="/wp-content/themes/business/images/slick-arrow.svg" alt="slick-arrow">
        </span>
        <span class="arrowtestimonials turnLeft">
            <img src="/wp-content/themes/business/images/slick-arrow.svg" alt="slick-arrow">
        </span>

        <div class="wrap-slick">
            <div class="flex-custom-box view">
                <div class="wrap texted">
                    <div class="item description">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/quotes.svg" alt="quotes">
                        <article>
                            <p><?php echo get_sub_field('slide_1_text'); ?></p>
                            <h4><span><?php echo get_sub_field('slide_1_author'); ?></span></h4>
                        </article>
                    </div>
                </div>
            </div><!--End flex-custom-box-->
            <div class="flex-custom-box next">
                <div class="wrap texted">
                    <div class="item description">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/quotes.svg" alt="quotes">
                        <article>
                            <p><?php echo get_sub_field('slide_2_text'); ?></p>
                            <h4><span><?php echo get_sub_field('slide_2_author'); ?></span></h4>
                        </article>
                    </div>
                </div>
            </div><!--End flex-custom-box-->
            <div class="flex-custom-box last">
                <div class="wrap texted">
                    <div class="item description">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/quotes.svg" alt="quotes">
                        <article>
                            <p><?php echo get_sub_field('slide_3_text'); ?></p>
                            <h4><span><?php echo get_sub_field('slide_3_author'); ?></span></h4>
                        </article>
                    </div>
                </div>
            </div><!--End flex-custom-box-->
        </div>
    </div><!--End container-custom-->

    <?php if($slick < 2):?>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
    <?php endif;?>  
    <script>
        jQuery(document).ready(function() { /*testimonials slider*/
            if (jQuery(window).innerWidth() < 1200) {
                jQuery('.testimonials-<?php echo $testimonials;?> .wrap-slick').slick({
                    dots: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    adaptiveHeight: true,
                    prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button"><img src="/wp-content/themes/business/images/slick-arrow.svg" alt="slick-arrow"></button>',
                    nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Previous" tabindex="0" role="button"><img src="/wp-content/themes/business/images/slick-arrow.svg" alt="slick-arrow"></button>'
                });
            }
            if (jQuery(window).innerWidth() > 1199) { /*review us section*/
                function biggerItems<?php echo $testimonials;?>() {
                    var bI = jQuery('.testimonials-<?php echo $testimonials;?> .wrap.texted').width() / 480 * 220;
                    jQuery('.testimonials-<?php echo $testimonials;?> .wrap.texted').height(bI);
                    var hei = jQuery('.testimonials-<?php echo $testimonials;?> .flex-custom-box').innerHeight();
                    jQuery('.testimonials-<?php echo $testimonials;?> .container-custom').height(hei);
                }
                biggerItems<?php echo $testimonials;?>();
                jQuery(window).resize(function() {
                    biggerItems<?php echo $testimonials;?>();
                });
                testimonialsArray<?php echo $testimonials;?> = [];
                jQuery('.testimonials-<?php echo $testimonials;?> .flex-custom-box').each(function(index) {
                    var thisElement = jQuery(this);
                    var addArr = [thisElement, index];
                    testimonialsArray<?php echo $testimonials;?>.push(addArr);
                    rewArrLenght<?php echo $testimonials;?> = index + 1;
                });
                jQuery('.testimonials-<?php echo $testimonials;?> .arrowtestimonials.turnRight').click(function() {
                    var hzCL = jQuery('.testimonials-<?php echo $testimonials;?>').hasClass('activeArrow');
                    if (hzCL == false) {
                        jQuery('.testimonials-<?php echo $testimonials;?>').addClass('activeArrow');
                        jQuery('.testimonials-<?php echo $testimonials;?> .flex-custom-box.view').css({
                            'left': '115%',
                            'transform': 'scale(1.05, 0.85)'
                        });
                        setTimeout(function() {

                            i = 0;
                            do {
                                if (testimonialsArray<?php echo $testimonials;?>[i][1] == 0) {
                                    testimonialsArray<?php echo $testimonials;?>[i][1] = 2;
                                    jQuery(testimonialsArray<?php echo $testimonials;?>[i][0]).attr('style', '').css({
                                        'left': 0
                                    }).removeClass('view').addClass('last');
                                } else if (testimonialsArray<?php echo $testimonials;?>[i][1] == 1) {
                                    testimonialsArray<?php echo $testimonials;?>[i][1] = 0;
                                    jQuery(testimonialsArray<?php echo $testimonials;?>[i][0]).removeClass('next').addClass('view');
                                } else {
                                    testimonialsArray<?php echo $testimonials;?>[i][1] = 1;
                                    jQuery(testimonialsArray<?php echo $testimonials;?>[i][0]).removeClass('last').addClass('next');
                                }
                                i++;
                            } while (i < rewArrLenght<?php echo $testimonials;?>);
                            setTimeout(function() {
                                jQuery('.testimonials-<?php echo $testimonials;?>').removeClass('activeArrow');
                            }, 1100);
                        }, 1000);
                    }
                });
                jQuery('.testimonials-<?php echo $testimonials;?> .arrowtestimonials.turnLeft').click(function() {
                    var hzCL = jQuery('.testimonials-<?php echo $testimonials;?>').hasClass('activeArrow');
                    if (hzCL == false) {
                        jQuery('.testimonials-<?php echo $testimonials;?>').addClass('activeArrow').addClass('rightMove');
                        jQuery('.testimonials-<?php echo $testimonials;?> .flex-custom-box').stop().attr('style', '');
                        setTimeout(function() {
                            jQuery('.testimonials-<?php echo $testimonials;?> .flex-custom-box.view').stop().css({
                                'right': '115%',
                                'transform': 'scale(1.05, 0.85)'
                            });
                            setTimeout(function() {
                                i = 0;
                                do {
                                    if (testimonialsArray<?php echo $testimonials;?>[i][1] == 0) {
                                        testimonialsArray<?php echo $testimonials;?>[i][1] = 2;
                                        jQuery(testimonialsArray<?php echo $testimonials;?>[i][0]).attr('style', '').css({
                                            'right': 0
                                        }).removeClass('view').addClass('last');
                                    } else if (testimonialsArray<?php echo $testimonials;?>[i][1] == 1) {
                                        testimonialsArray<?php echo $testimonials;?>[i][1] = 0;
                                        jQuery(testimonialsArray<?php echo $testimonials;?>[i][0]).removeClass('next').addClass('view');
                                    } else {
                                        testimonialsArray<?php echo $testimonials;?>[i][1] = 1;
                                        jQuery(testimonialsArray<?php echo $testimonials;?>[i][0]).removeClass('last').addClass('next');
                                    }
                                    i++;
                                } while (i < rewArrLenght<?php echo $testimonials;?>);
                                setTimeout(function() {
                                    jQuery('.testimonials-<?php echo $testimonials;?>').removeClass('activeArrow').removeClass('rightMove');
                                }, 1200);
                            }, 1200);
                        }, 30);
                    }
                });
            } /*end testimonials slider*/
        }); /* end document ready*/
    </script>
</section><!--End testimonials-->