<?php
    $offers++;
?>
<section class="offers" id="offers-<?php echo $offers;?>">
    <?php if($offers < 2):?>
        <style>
            .offers .specials{
                background: inherit;
            }
            .offers {
                background: #ffffff;
                padding: 30px 0;
                display: flex;
            }
            .offers .offer {
                box-shadow: 0 0 20px 0 rgba(0,0,0,0.2);
                font-family: 'Rubik', sans-serif;
                font-weight: 400;
                flex-wrap: wrap;
                margin-bottom: 30px;
                display: flex;
            }
            .offers .offer-img {
                width: 100%;
                order: 1;
                position: relative;
            }
            .offers .offer-img img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            .offers .offer-img > img{
                position: absolute;
                top: 0;
            }
            .offers .offer-img .offer-img-icon {
                display: block;
                z-index: 2;
                width: 130px;
                height: 130px;
                background-color: #4495f8;
                position: absolute;
                top: 50%;
                left: 0;
                transform: translate(-50%, -50%);
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .offers .offer-img .offer-img-icon img {
                width: 65px;
                height: 65px;
                object-fit: contain;
            }
            .offers .offer-left {
                width: 100%;
                padding: 40px;
                order: 3;
            }
            .offers .offer-left-title {
                color: var(--main-color);
                text-transform: capitalize;
                font-size: 30px;
                font-weight: 700;
                margin-bottom: 15px;
                text-align: center;
            }
            .offers .offer-left p {
                text-align: left;
                margin-bottom: 20px;
            }
            .offers .offer-right {
                background-color: var(--main-color);
                color: #fff;
                width: 100%;
                order: 2;
                padding: 30px 40px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            .offers .offer-right ul {
                padding: 0;
                margin: 0;
                color: #e2ecfe;
            }
            .offers .offer-right ul li {
                font-size: 16px;
                font-weight: 300;
                margin-bottom: 10px;
                list-style: none;
                line-height: 1.3;
                position: relative;
                padding-left: 30px;
            }
            .offers .offer-right ul li:before {
                content: '';
                z-index: 5;
                display: inline-block;
                width: 9px;
                height: 9px;
                border-radius: 50%;
                background-color: #fff;
                margin-right: 30px;
                position: absolute;
                left: 0;
                top: 6px;
                bottom: 0;
            }
            .offers .offer-right-title {
                font-size: 20px;
                text-transform: uppercase;
                font-weight: 700;
                margin-bottom: 30px;
                text-align: center;
            }
            .offer-left p:last-child{
                margin-bottom: 0;
            }
            /*---------------new section ends-----------------------*/
            @media(max-width: 1199px){
                .offers .offer-img .offer-img-icon {
                    transform: translate(-25%, -50%);
                }
                .offers .offer{
                    width: calc(100% - 50px);
                    margin: 0 auto 50px;
                }
            }
            @media(max-width: 991px){
                .offers .offer-img .offer-img-icon {
                    width: 100px;
                    height: 100px;
                }
                .offers .offer-img .offer-img-icon img {
                    width: 55px;
                    height: 55px;
                }
                .offers .offer-img {
                    min-height: 300px;
                }
            }
            @media (max-width: 767px){
                .offers .offer-img .offer-img-icon {
                    transform: none;
                    top: -50px;
                    left: calc(50% - 50px);
                }
                .offers .offer {
                    margin: 80px auto 50px;
                    width: 100%;
                }
                .offers .offer-img {
                    min-height: 250px;
                }
            }
            @media (min-width: 768px){
                .offers .offer-img {
                    width: 60%;
                }
                .offers .offer-img:before{
                    top: 0;
                    left: 0;
                }
                .offers .offer-right{
                    width: 40%;
                }
            }
            @media (min-width: 992px) {
                .offers {
                    padding: 50px 0;
                }
                .offers .offer-img {
                    width: 38%;
                }
                .offers .offer-left {
                    width: 42%;
                    order: 2;
                }
                .offers .offer-left-title {
                    text-align: left;
                }
                .offers .offer-right {
                    width: 20%;
                    order: 3;
                    padding: 30px 20px;
                }
            }
            @media (min-width: 1200px) {
                .offers .offer {
                    margin-bottom: 50px;
                }
                .offers .offer-left-title {
                    margin-bottom: 40px;
                }
                .offers .offer-right ul li {
                    margin-bottom: 14px;
                }
                .offers .offer-img:before {
                    width: 160px;
                    height: 160px;
                    top: calc(50% - 80px);
                    left: -80px;
                }
            }
            @media (min-width: 1200px) and (max-width: 1350px){
                .offers .container-custom.specials {
                    padding-left: 80px;
                }
            }
        </style>
    <?php endif; ?>
    <div class="container-custom specials">
        <div class="title-wrap">
            <div class="title-box">
                <span class="title-line"></span>
                <span class="subtitle-text"><?php echo get_sub_field('top_section_title'); ?></span>
                <h2 class="title-text"><?php echo get_sub_field('section_title'); ?></h2>
            </div>
        </div>
        <div class="offers-wrap">
            <?php if( have_rows('offers_repeater') ): ?>
                <?php while( have_rows('offers_repeater') ): the_row(); ?>
                    <div class="offer">
                        <div class="offer-img">
                            <?php $offer_image = get_sub_field('offer_image'); ?>
                            <img src="<?=$offer_image['url']; ?>" alt="<?=$offer_image['alt']; ?>">
                            <span class="offer-img-icon">
                                <?php $offer_icon = get_sub_field('offer_icon'); ?>
                                <img src="<?=$offer_icon['url']; ?>" alt="<?=$offer_icon['alt']; ?>">
                            </span>
                        </div>
                        <div class="offer-left">
                            <h3 class="offer-left-title"><?php the_sub_field('offer_title'); ?></h3>
                            <p><?php the_sub_field('offer_text'); ?></p>
                        </div>
                        <div class="offer-right">
                            <h4 class="offer-right-title">Package include</h4>
                            <ul>
                                <?php if( have_rows('offer_right_list') ): ?>
                                    <?php while( have_rows('offer_right_list') ): the_row(); ?>
                                        <li><?php the_sub_field('list_item'); ?></li>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>