<?php
    $contact_info_map++;
?>
<section class="contact_info_map" id="contact_info_map-<?php echo $contact_info_map;?>">
    <?php if($contact_info_map < 2):?>
        <style>
        .contact_info_map{
            padding-bottom: 50px;
        }
        .contact_info_map .contact-box {
            display: flex;
            padding: 0 15px;
        }
        .contact_info_map .contact-info {
            border: 1px solid #e6e6e6;
            display: flex;
            padding: 30px 100px 30px 50px;
            flex-direction: column;
            justify-content: center;
            width: calc(50% + 50px);
            margin-right: -50px;
        }
        .contact_info_map .map {
            margin: 30px 0;
            height: 400px;
            width: 50%;
            padding: 10px;
            background: #fff;
            z-index: 5;
            box-shadow: 0 0 20px 0 rgba(0,0,0,0.2);
            overflow: hidden;
        }
        .contact_info_map .map iframe{
            width: 100%;
            height: 100%;
            display: block;
        }
        .contact_info_map .info-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 16px;
            font-family: 'Rubik',sans-serif;
        }
        .contact_info_map .info-item:not(:last-child) {
            margin-bottom: 80px;
        }
        .contact_info_map .info-item-title {
            display: flex;
            align-items: center;
            text-transform: uppercase;
            font-weight: 300;
            width: 50%;
        }
        .contact_info_map .info-item-icon {
            width: 40px;
            height: 40px;
            background-position: center;
            background-repeat: no-repeat;
            margin-right: 26px;
        }
        .contact_info_map .info-item-title img{
            margin-right: 20px;
        }
        .contact_info_map .info-item p,
        .contact_info_map .info-item p a{
            font-weight: 700;
            color: #141414;
            margin: 0;
            text-align: right;
        }
        .contact_info_map .info-item a:hover {
            color: #4495f8;
        }
        /*Responsiveness*//*Responsiveness*//*Responsiveness*/
        @media(max-width:991px){
            .contact_info_map .contact-box{
                flex-direction: column;
                justify-content: center;
            }
            .contact_info_map .contact-info {
                padding: 50px 30px 100px;
                width: 100%;
                margin-right: auto;
                margin-bottom: -50px;
            }
            .contact_info_map .map {
                margin: 0 30px;
                height: 400px;
                width: calc(100% - 60px);
            }
            .contact_info_map .info-item:not(:last-child) {
                margin-bottom: 50px;
            }
        }
        @media(max-width:600px){
            .contact_info_map .map {
                margin: 0 20px;
                height: 300px;
                width: calc(100% - 40px);
            }
            .contact_info_map .contact-box{
                padding: 0;
            }
        }
        </style>
    <?php endif; ?>
    <div class="container-custom">
        <div class="contact-box">
            <div class="contact-info">
                <?php if (get_sub_field('show_phone') == 'yes'): ?>
                    <div class="info-item">
                        <div class="info-item-title">
                            <?php $phone_icon = get_sub_field('phone_icon'); ?>
                            <img src="<?=$phone_icon['url']; ?>" alt="<?=$phone_icon['alt']; ?>">
                            <span>Phone</span>
                        </div>
                        <p><a href="tel:<?php the_sub_field('phone_link'); ?>"><?php the_sub_field('phone_value'); ?></a></p>
                    </div>
                <?php endif ?>
                <?php if (get_sub_field('show_mail') == 'yes'): ?>
                    <div class="info-item">
                        <div class="info-item-title">
                            <?php $mail_icon = get_sub_field('mail_icon'); ?>
                            <img src="<?=$mail_icon['url']; ?>" alt="<?=$mail_icon['alt']; ?>">
                            <span>Mail</span>
                        </div>
                        <p><a href="mailto:<?php the_sub_field('mail_link'); ?>"><?php the_sub_field('mail_value'); ?></a></p>
                    </div>
                <?php endif ?>
                <?php if (get_sub_field('show_address') == 'yes'): ?>
                    <div class="info-item">
                        <div class="info-item-title">
                            <?php $address_icon = get_sub_field('address_icon'); ?>
                            <img src="<?=$address_icon['url']; ?>" alt="<?=$address_icon['alt']; ?>">
                            <span>Address</span>
                        </div>
                        <p><?php the_sub_field('address_value'); ?></p>
                    </div>
                <?php endif ?>
            </div><!-- end contact-info -->
            <div class="map">
                <?php the_sub_field('map'); ?>
            </div><!-- end map -->
        </div>
    </div><!-- end container-custom -->
</section><!-- end contact-info-wrap -->