<?php $social_icon++; ?>
<section class="social-icon" id="social-icon-<?php echo $social_icon; ?>">
    <?php if($social_icon < 2):?>
        <style>
            .social-icon{
                padding-bottom: 35px;
            }
            .social-icon .social-icons a{
                flex-shrink: 0;
                width: 70px;
                height: 70px;
                border-radius: 50%;
                background: var(--active-color);
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .social-icon .social-icons a:not(:last-child){
                margin-right: 15px;
            }
            .social-icon .social-icons-item{
                padding: 0 7.5px 15px;
            }
            .social-icon .social-icons a img{
                height: 25px;
                position: absolute;
            }
            .social-icon .social-icons a img:last-child,
            .social-icon .social-icons a:hover img:first-child{
                opacity: 0;
            }
            .social-icon .social-icons {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-wrap: wrap;
                position: relative;
            }
            .social-icon .social-icons a:hover {
                background-color: var(--title-color);
            }
            .social-icon .social-icons a:hover img:last-child,
            .social-icon .social-icons a img:first-child{
                opacity: 1;
            }
        </style>
    <?php endif; ?>
    <div class="container-custom">
        <div class="social-icons">
            <?php if( have_rows('social_icon_item') ): ?>
                <?php while( have_rows('social_icon_item') ): the_row(); ?>
                    <div class="social-icons-item">
                        <a href="<?php echo get_sub_field('social_icon_link'); ?>">
                            <?php $social_fav_icon = get_sub_field('social_fav_icon'); ?>
                            <img src="<?=$social_fav_icon['url']; ?>" alt="<?=$social_fav_icon['alt']; ?>">
                            <?php $social_fav_icon_hover = get_sub_field('social_fav_icon_hover'); ?>
                            <img src="<?=$social_fav_icon_hover['url']; ?>" alt="<?=$social_fav_icon_hover['alt']; ?>">
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div><!-- end container-custom --> 
 </section><!-- end social-icon -->