<?php
    $img_and_text++;
?>
<section class="img_and_text" id="img_and_text-<?php echo $img_and_text;?>">
    <?php if($img_and_text < 2):?>
        <style>       
            .img_and_text {
                padding: 50px 0;
                background-color: #fff;
            }
            .img_and_text .container-custom .story-box:nth-child(even){
                flex-direction: row-reverse;
            }
            .img_and_text .container-custom .story-box:nth-child(even) .story-text{
                margin-left: auto;
                margin-right: -50px;
            }
            .img_and_text .container-custom .story-box:not(:last-child){
                margin-bottom: 50px;
            }
            .img_and_text .story-box {
                display: flex;
                position: relative;
            }
            .img_and_text .story-img {
                width: 50%;
                position: relative;
            }
            .img_and_text .story-img img {
                position: absolute;
                top: 0;
                height: 100%;
                width: 100%;
                object-fit: cover;
            }
            .img_and_text .story-text {
                flex-direction: column;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                position: relative;
                margin: 45px 0;
                box-sizing: border-box;
                padding: 50px;
                width: calc(50% + 50px);
                margin-left: -50px;
                border: 1px solid #E7E7E7;
                background-color: #fff;
            }
            .img_and_text .story-text h3 {
                text-align: center;
                color: var(--main-color);
                font-family: 'Rubik', sans-serif;
                text-transform: uppercase;
                font-size: 30px;
                margin: 0;
                margin-bottom: 30px;
            }
            .img_and_text .story-text p{
                margin-top: 0;
            }
            /*Responsivness*//*Responsivness*//*Responsivness*/
            @media(max-width:1199px){
                .img_and_text{
                    padding: 50px 15px;
                }
            }
            @media(max-width:991px){
                .img_and_text .story-box {
                    flex-direction: column;
                    align-items: center;
                }
                .img_and_text .story-img {
                    width: 100%;
                }
                .img_and_text .container-custom .story-box:nth-child(even) {
                    flex-direction: column;
                }
                .img_and_text .container-custom .story-box:nth-child(even) .story-text{
                    margin: -40px 0 0!important;
                }
                .img_and_text .story-img img{
                    height: 370px;
                    position: relative;
                }
                .img_and_text .story-text{
                    width: calc(100% - 50px);
                    margin: -40px 0 0;
                }
            }
            @media(max-width:767px){
                .img_and_text {
                    padding: 30px 15px;
                }
                .img_and_text .story-text {
                    padding: 40px;
                }
            }
            @media(max-width:600px){
                .img_and_text .story-img img {
                    height: 280px;
                }
                .img_and_text {
                    padding: 30px 0;
                }
                .img_and_text .story-text {
                    padding: 30px 20px;
                    width: calc(100% - 40px);
                }
                .img_and_text .story-text h3 span{
                    font-size: 36px;
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
    <div class="container-custom">
        <?php if( have_rows('content_repeater') ): ?>
            <?php while( have_rows('content_repeater') ): the_row(); ?>
                <div class="story-box">
                    <div class="story-img">
                        <?php $image = get_sub_field('item_image');?>
                        <img src="<?php echo $image['url']?>" alt="<?php echo $image['alt']?>" />
                    </div>
                    <div class="story-text">
                        <h3><?php echo get_sub_field('item_title'); ?></h3>
                        <p><?php echo get_sub_field('item_text'); ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div><!-- end container-custom -->
</section><!-- end image_and_text_section -->