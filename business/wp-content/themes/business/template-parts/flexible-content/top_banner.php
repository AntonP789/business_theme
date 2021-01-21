<?php
    $topBanner++;
?>
<section class="top-banner">
    <?php if ($topBanner < 2): ?>
        <style>
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
        /* Responsivness *//* Responsivness *//* Responsivness */
        @media(max-width: 600px){
            .top-banner{
                height: 350px;
            }
            .top-banner h1{
                font-size: 40px;
            }
        }
        </style>
    <?php endif; ?>    
    <div class="top-banner-img">
        <?php $image = get_sub_field('banner_background_image');?>
        <img src="<?php echo $image['url']?>" alt="<?php echo $image['alt']?>" />
    </div>
    <div class="top-banner-content">
        <h1><?php echo get_sub_field('section_title'); ?></h1>
    </div>
</section>
   