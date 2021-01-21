<?php
    $contact_form++;
?>
<section class="contact_form" id="contact_form-<?php echo $contact_form;?>">
    <?php if($contact_form < 2):?>
        <style>
            .contact_form {
                position: relative;
            }
            .contact_form .contact-box {
                display: flex;
            }
            .contact_form .contact-box:before {
                display: block;
                content: "";
                position: absolute;
                width: 50%;
                height: 100%;
                background-color: rgba(255, 255, 255, .15);
            }
            .contact_form .contact-form {
                width: 50%;
                position: relative;
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
                padding: 70px 30px;
            }
            .contact_form .contact-wrap {
                max-width: 590px;
            }
            .contact_form .contact-form form .form-wrap span {
                width: 100%;
                display: block;
                margin-bottom: 20px;
            }
            .contact_form .contact-form form .form-wrap span input,
            .contact_form .contact-form form .form-wrap span textarea {
                width: 100%;
                height: 50px;
                background-color: rgba(255, 255, 255, .25);
                padding: 15px 20px;
                color: #fff;
            }
            .contact_form .contact-form form .form-wrap span textarea {
                height: 190px;
            }
            .contact_form .contact-form form .form-wrap span input::-moz-placeholder,
            .contact_form .contact-form form .form-wrap span textarea::-moz-placeholder {
                color: #fff;
                opacity: 1!important;
                font: 300 18px 'Rubik';
                font-style: italic;
            }
            .contact_form .contact-form form .form-wrap span input::-webkit-input-placeholder,
            .contact_form .contact-form form .form-wrap span textarea::-webkit-input-placeholder {
                color: #fff;
                font: 300 18px 'Rubik';
                font-style: italic;
            }
            .contact_form .contact-form .form-submit {
                width: 100%;
                text-align: center;
            }
            .contact_form .contact-form .form-submit input {
                width: 250px;
                background-color: var(--active-color);
                color: #fff;
                text-transform: uppercase;
                padding: 13px 0;
                border-radius: 40px;
                font: 700 18px 'Fira Sans Condensed';
                letter-spacing: 0.1em;
                box-shadow: 0 0 0 10px rgba(255, 255, 255, .2);
                transition: 0.3s;
                cursor: pointer;
            }
            .contact_form .contact-form .form-submit input:hover {
                background-color: var(--main-color);
                box-shadow: 0 0 0 3px rgba(255, 255, 255, .2);
            }
            .contact_form .contact-form .ajax-loader {
                display: none!important;
            }
            .contact_form .contact-form .half-width {
                width: 50%;
            }
            .contact_form .contact-form .full-width {
                width: 100%;
            }
            .contact_form .contact-form .form-wrap {
                display: flex;
                flex-wrap: wrap;
            }
            .contact_form .contact-form .form-wrap div:first-child {
                padding-right: 10px;
            }
            .contact_form .contact-form .form-wrap div:nth-child(2) {
                padding-left: 10px;
            }
            .contact_form .contact-logo {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 50%;
                padding: 50px 0;
            }
            .contact_form .contact-logo img {
                max-width: 100%;
            }
            .contact_form .contact-bg {
                position: absolute;
                width: 100%;
                height: 100%;
                bottom: 0;
                right: 0;
                left: 0;
                top: 0;
                z-index: -1;
                background: var(--overlay-img-color);
                overflow: hidden;
            }
            .contact_form .contact-bg img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                opacity: .3;
            }
            .contact_form .contact-form h3 {
                font: 900 48px 'Fira Sans Condensed';
                color: var(--active-color);
                text-transform: uppercase;
                text-align: center;
                line-height: 1;
                margin-bottom: 10px;
                margin-top: 0;
            }
            .contact_form .contact-form .contact-wrap p {
                color: #fff;
                font-size: 18px;
                line-height: 1.3;
                text-transform: uppercase;
                letter-spacing: 0.1em;
                text-align: center;
                margin-bottom: 30px;
            }
            .contact_form .contact-form div.wpcf7-validation-errors,
            .contact_form .contact-form div.wpcf7-acceptance-missing {
                border: 2px solid #f00;
                color: #fff;
                text-align: center;
            }
            .contact_form .contact-form div.wpcf7-mail-sent-ok {
                color: #fff;
            }
            /*Responsivness*//*Responsivness*//*Responsivness*/
            @media(max-width:991px) {
                .contact_form .contact-logo {
                    display: none;
                }
                .contact_form .contact-form,
                .contact_form .contact-box:before {
                    width: 100%;
                }
            }
            @media(max-width:600px) {
                .contact_form .contact-form {
                    padding: 40px 15px;
                }
                .contact_form .contact-form h3{
                    font-size: 38px;
                }
            }
        </style>
    <?php endif; ?>
    <div class="contact-bg">
        <?php if (get_sub_field('background_image') == ''): ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/bg-contact.jpg" alt="form_background">
        <?php else: ?>
            <?php $contact_bg = get_sub_field('background_image'); ?>
            <img src="<?=$contact_bg['url'];?>" alt="<?=$contact_bg['alt'];?>">
        <?php endif ?>
    </div>
    <div class="contact-box">
        <div class="contact-form">
            <div class="contact-wrap">
                <h3><?php the_sub_field('form_title'); ?></h3>
                <p><?php the_sub_field('form_subtitle'); ?></p>
                <?php the_sub_field('form_shortcode'); ?>
            </div>
        </div><!-- end contact-form -->
        <div class="contact-logo">
            <?php if (get_sub_field('logo') == ''): ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-big.svg" alt="logo">
            <?php else: ?>
                <?php $contact_logo = get_sub_field('logo'); ?>
                <img src="<?=$contact_logo['url'];?>" alt="<?=$contact_logo['alt'];?>">
            <?php endif ?>
        </div><!-- end contact-form -->
    </div><!-- end contact-box -->
</section><!-- end contact -->