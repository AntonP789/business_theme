<?php
    $contactLight++;
?>
<section class="contact_form_light" id="contactLight-<?php echo $contactLight;?>">
    <?php if($contactLight < 2):?>
        <style>
            .contact_form_light{
                background-color: #fff;
                padding: 50px 0;
            }
            .contact_form_light > div{
                background-color: inherit;
            }
            .contact_form_light .form > div{
                padding-bottom: 10px;
            }
            .contact_form_light .form > div:nth-child(odd){
                padding-right: 5px;
            }
            .contact_form_light .form > div:nth-child(even){
                padding-left: 5px;
            }
            .contact_form_light .form > div:last-child{
                padding-left: 0px;
                padding-right: 0px;
                padding-bottom: 0;
            }
            .contact_form_light .contact-form {
                position: relative;
                display: flex;
                justify-content: center;
            }
            .contact_form_light .form-box {
                width: 50%;
                position: relative;
                z-index: 2;
                padding: 50px 20px;
            }
            .contact_form_light .form-img {
                position: absolute;
                z-index: 2;
                top: 0;
                bottom: 0;
                left: 0;
                width: 100%;
                background-color: var(--overlay-img-color);
            }
            .contact_form_light .form-img img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                opacity: .6;
            }
            .contact_form_light .form-box h3 {
                color: #ffffff;
                text-transform: uppercase;
                font: 400 22px 'Fira Sans Condensed', sans-serif;
                text-align: center;
                margin: 0 0 40px;
                letter-spacing: 0.1em;
            }
            .contact_form_light [class*="-width"] input,
            .contact_form_light textarea {
                color: rgba(255, 255, 255, 0.8);
                text-transform: capitalize;
                font: 300 16px 'Rubik';
                font-style: italic;
                background: rgba(255, 255, 255, 0.25);
                padding: 17px 24px;
                width: 100%;
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
            }
            .contact_form_light .form input::placeholder,
            .contact_form_light .form textarea::placeholder {
                color: rgba(255, 255, 255, 0.8);
            }
            .contact_form_light .form {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }
            .contact_form_light .form .half-width {
                width: 50%;
            }
            .contact_form_light .form .full-width {
                width: 100%;
                padding: 0!important;
            }
            .contact_form_light .form textarea {
                max-height: 150px;
            }
            .contact_form_light .form-submit{
                padding: 0!important;
            }
            .contact_form_light .form-submit input {
                background-color: var(--main-color);
                color: #fff;
                text-transform: uppercase;
                border-radius: 50px;
                width: 200px;
                height: 50px;
                margin-top: 30px;
                cursor: pointer;
                box-shadow: 0 3px 15px rgba(52,52,52, .5);
            }
            .contact_form_light .form-submit input:hover {
                background-color: #fff;
                color: var(--main-color);
            }
            .contact_form_light .form-submit {
                position: relative;
            }
            .contact_form_light .form-submit .ajax-loader {
                position: absolute;
                z-index: 2;
                right: -22px;
                top: 12px;
            }
            .contact_form_light div.wpcf7-validation-errors {
                border-color: red;
                text-align: center;
                color: #fff;
            }
            /*Responsivness*//*Responsivness*//*Responsivness*/
            @media(max-width:991px){
                .contact_form_light .contact-form{
                    margin: 0 -15px;
                }
                .contact_form_light .form-box{
                    width: 100%;
                    max-width: 600px;
                    margin: 0 auto;
                }
            }
            @media(max-width:767px){
                .contact_form_light {
                    padding: 30px 0 50px;
                }
            }
            @media(max-width:600px){
                .contact_form_light .form .half-width{
                    width: 100%;
                    padding-right: 0!important;
                    padding-left: 0!important;
                }
            }
        </style>
    <?php endif; ?>
    <div class="container-custom">
        <div class="title-wrap">
            <div class="title-box">
                <span class="title-line"></span>
                <span class="subtitle-text"><?php echo get_sub_field('form_light_title'); ?></span>
                <h2 class="title-text"><?php echo get_sub_field('form_light_subtitle'); ?></h2>
            </div>
        </div>
        <div class="contact-form">
            <div class="form-img">
                <?php if (get_sub_field('form_light_bg') == ''): ?>
                    <img src="/wp-content/uploads/2019/03/contact.jpg" alt="form_background" title=""/>
                <?php else: ?>
                    <?php $contact_bg = get_sub_field('form_light_bg'); ?>
                    <img src="<?=$contact_bg['url'];?>" alt="<?=$contact_bg['alt'];?>">
                <?php endif; ?>
            </div>
            <div class="form-box">
                <h3><?php echo get_sub_field('form_light_slogan'); ?></h3>
                <div class="contact-form-wrap">
                    <?php echo get_sub_field('form_light_shorcode'); ?>
                </div>
            </div>
        </div><!-- end contact-form -->
    </div><!-- end container-custom -->
</section><!-- end contact_form_light -->