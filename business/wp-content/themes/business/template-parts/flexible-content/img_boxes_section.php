<?php
    $img_boxes++;
?>
<section class="img_boxes" id="img_boxes-<?php echo $img_boxes;?>">
    <?php if($img_boxes < 2):?>
        <style>
            .img_boxes {
                text-align: center;
                background-color: #fff;
                padding: 50px 0;
            }
            .img_boxes .approach-box {
                justify-content: center;
                display: flex;
                flex-wrap: wrap;
                margin: 0 -20px;
            }
            .img_boxes .approach-margin {
                width: 33.3%;
                padding: 20px;
            }
            .img_boxes .approach-block {
                height: 100%;
                box-shadow: 0px 10px 35px 0px rgba(0,0,0,0.2);
            }
            .img_boxes .approach-img {
                height: 240px;
                overflow: hidden;
                width: 100%;
            }
            .img_boxes .approach-img img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            .img_boxes .approach-text h3 {
                font: bold 18px 'Fira Sans Condensed', sans-serif;
                text-align: center;
                letter-spacing: 0.1em;
                padding: 25px;
                color: #fff;
                background-color: var(--main-color);
                margin: 0;
            }
            .img_boxes .approach-text p {
                padding: 25px;
            }

            /*RESPONSIVENESS*//*RESPONSIVENESS*//*RESPONSIVENESS*/
            @media(max-width:1280px){
                .img_boxes .approach-box{
                    margin: 0;
                }
            }
            @media(max-width:1199px){
                .img_boxes .approach-box {
                    justify-content: center;
                    flex-wrap: wrap;
                    padding: 0;
                    margin: 0 -10px;
                }
                .img_boxes .approach-margin {
                    padding: 0 25px 50px;
                    width: 50%;
                    max-width: none;
                }
                .img_boxes{
                    padding-bottom: 0;
                }
            }
            @media(max-width:767px){
                .img_boxes{
                    padding: 30px 0;
                }
                .img_boxes .approach-margin{
                    width: 100%;
                    max-width: 450px;
                }
                .img_boxes .approach-box {
                    margin: 0;
                }
            }
            @media(max-width:600px){
                .img_boxes .approach-img{
                    height: 180px;
                }
                .img_boxes .approach-margin{
                    padding: 0 0 30px;
                }
            }
        </style>
    <?php endif; ?>
    <div class="title-wrap">
        <div class="title-box">
            <span class="title-line"></span>
            <span class="subtitle-text"><?php echo get_sub_field('img_boxes_subtitle'); ?></span>
            <h2 class="title-text"><?php echo get_sub_field('img_boxes_title'); ?></h2>
        </div>
    </div>
    <div class="container-custom">
        <div class="approach-box">
            <?php if( have_rows('single_img_box') ): ?>
                <?php while( have_rows('single_img_box') ): the_row(); ?>
                    <div class="approach-margin">
                        <div class="approach-block">
                            <div class="approach-img">
                                <?php $single_box_img = get_sub_field('single_box_img'); ?>
                                <img src="<?=$single_box_img['url']; ?>" alt="<?=$single_box_img['alt']; ?>">
                            </div>
                            <div class="approach-text">
                                <h3><?php echo get_sub_field('single_box_title'); ?></h3>
                                <p><?php echo get_sub_field('single_box_text'); ?></p>
                            </div>
                        </div><!-- end approach-block -->
                    </div><!-- end approach-margin -->
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div><!-- end approach-box -->
</section><!-- end img_boxes -->