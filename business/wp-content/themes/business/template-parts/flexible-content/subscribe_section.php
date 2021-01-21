<?php
    $subscribe++;
?>
<section class="subscribe" id="subscribe-<?php echo $subscribe;?>">
    <?php if($subscribe < 2):?>
        <style>
            .subscribe {
                padding: 70px 0;
                background-color: #F2F2F2;
            }
            .subscribe-box {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            .subscribe-text {
                max-width: 430px;
                text-align: left;
                width: 50%;
            }
            .subscribe-text h2 {
                margin-top: 0;
                margin-bottom: 20px;
                color: #000;
                font-family: 'Rubik', sans-serif;
                font-weight: bold;
                font-size: 45px;
                text-transform: uppercase;
            }
            .subscribe-text h3 {
                letter-spacing: .5px;
                font: bold 18px/1.1 'Fira Sans Condensed', sans-serif;
                color: var(--main-color);
                text-transform: uppercase;
                margin: 0;
            }
            .subscribe-form {
                width: 50%;
            }
            .form-field{
                display: flex;  
                border-radius: 40px;
                overflow: hidden;
                box-shadow: 0 7px 25px rgba(0,0,0,.2);  
                background: #fff;
            }
            .form-field input{
                height: 80px;
                border-radius: 40px;
            }
            .form-field div:first-child{
                width: calc(100% - 220px);
            }
            .form-field div:last-child{
                width: 220px;
                z-index: 2;
            }
            .form-field div:first-child input{
                padding: 0 30px;    
            }
            .form-field div:last-child input{
                width: 100%;
                background-color: var(--active-color);
                color: #fff;
                font: 700 18px 'Fira Sans Condensed';
                text-transform: uppercase;
                letter-spacing: .1em;
                cursor: pointer;
                outline: none;
            }
            .form-field div:last-child input:hover{
                background-color: var(--main-color);
            }
            .form-field span{
                width: 100%;
            }
            .form-field .ajax-loader{
                display: none!important;
            }
            .form-field+div.wpcf7-validation-errors {
                display: none !important;
            }
            .form-field span.wpcf7-not-valid-tip {
                display: none;
            }
            .wpcf7-form.invalid .form-field {
                border: 2px solid red;
            }
            /*Responsivness*//*Responsivness*//*Responsivness*/
            @media(max-width:1199px){
                .subscribe-box{
                    flex-direction: column;
                }
                .subscribe-text{
                    text-align: center;
                    margin-bottom: 30px;
                    width: 100%;
                }
                .subscribe-text h2 {
                    margin-bottom: 10px;
                }
                .subscribe {
                    padding: 50px 0;
                }
                .form-field div:first-child input {
                    width: calc(100% + 70px);
                    padding: 0 30px;
                }
                .subscribe-form {
                    width: 80%;
                }
            }
            @media(max-width:991px){
                .subscribe-form {
                    width: 100%;
                }
            }
            @media(max-width:600px){
                .form-field input{
                    height: 60px;
                }
                .form-field div:last-child input{
                    font-size: 14px;
                }
                .form-field div:last-child{
                    width: 160px;
                }
                .form-field div:first-child {
                    width: calc(100% - 160px);
                }
                .subscribe-text h2{
                    font-size: 36px;
                }
            }
            @media(max-width:450px){
                .form-field{
                    flex-direction: column;
                }
                .form-field div:first-child,
                .form-field div:last-child{
                    width: 100%;
                }
                .form-field div:first-child input,
                .form-field div:last-child input{
                    border-radius: 30px;
                }
                .form-field div:first-child input{
                    border-bottom-left-radius: 0;
                    border-bottom-right-radius: 0;
                    width: 100%;
                }
                .form-field div:last-child input{
                    border-top-left-radius: 0;
                    border-top-right-radius: 0;
                    font-size: 18px;
                }
                .form-field input::-moz-placeholder{
                    text-align: center;
                }
                .form-field input::-webkit-input-placeholder{
                    text-align: center;
                }
            }
        </style>
    <?php endif; ?>

    <div class="container-custom subscribe-box">
        <div class="subscribe-text">
            <h2>STAY UP TO DATE</h2>
            <h3>Subscribe To Our Newsletter. We’ll Send email Notification Everytime We Release New Theme</h3>
        </div>
        <div class="subscribe-form">
            <?php echo do_shortcode('[contact-form-7 id="51" title="Subscribe Form"]'); ?>
        </div>
    </div><!-- end subscribe-box -->
</section><!-- end subscribe -->