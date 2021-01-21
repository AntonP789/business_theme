<?php
    $video_section++;
?>
<section class="video" id="video-<?php echo $video_section;?>">
    <?php if($video_section < 2):?>
        <style>
            .video {
                padding: 60px 0;
                position: relative;
            }
            .video-bg{
                background: var(--overlay-img-color);
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
            }
            .video-bg img{
                opacity: 0.3;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            .video > .container-custom {
                max-width: 1500px;
            }
            .video-area {
                display: flex;
                position: relative;
                align-items: center;
            }
            .video-left {
                width: 50%;
                padding: 30px 60px 30px 30px;
                display: flex;
                align-items: center;
            }
            .video-left iframe{
                width: 100%;
                height: 100%;
            }
            .video-text {
                padding: 0 15px;
                width: 50%;
                align-self: center;
            }
            .video-text h3 {
                font-size: 48px;
                text-transform: capitalize;
                color: var(--main-color);
                margin-top: 0;
                margin-bottom: 60px;
                line-height: 1.1;
            }
            .video-text p {
                font-size: 16px;
                color: #fff;
                margin-top: 0;
            }
            /*video-box*/
            .video-box{
                position: relative;
                width: 100%;
                background: #000;
            }
            .video-box video{
                border: 3px solid #464545;
                z-index: 2;
                position: relative;
                box-shadow: 0 0 50px rgba(0,0,0,.8);
                width: 100%;
                object-fit: cover;
                display: block;
            }
            /*pulse play*/
            .play-btn-pos{
                position: absolute;
                width: 100%;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                text-align: center; 
                z-index: 3;
                transition: 0.3s;
            }
            .play-btn-item{
                position: relative;
                margin: 70px;
                display: inline-block;
            }
            .btn-blue-circle{
                position: relative;
                width: 100px;
                height: 100px;
                border-radius: 100%;
                background: rgba(255,255,255,0.5);
                transition: 0.3s;
                cursor: pointer;
            }
            .btn-blue-circle:hover{
                background: rgba(255,255,255,1);
            }
            .btn-blue-circle img{
                transition: 0.3s;
                color: #fff;
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
            }
            .btn-blue-circle img:first-child{
                z-index: 1;
                opacity: 0;
            }
            .btn-blue-circle img:last-child{
                left: 55%;
                z-index: 2;
                opacity: 1;
            }
            .btn-first-circle{
                width: 100px;
                height: 100px;
                border-radius: 100%;
                position: absolute;
                top: 0;
                left: 0;
                background: rgba(255,255,255,0.15);
                animation: first-circle 2s infinite;
                animation-timing-function: ease;
            }
            .btn-second-circle{    
                width: 100px;
                height: 100px;
                border-radius: 100%;
                position: absolute;
                top: 0;
                left: 0;
                background: rgba(255,255,255,0.08);
                animation: second-circle 2s infinite;
                animation-timing-function: ease;
            }
            .animation-stop{
                animation: none!important;
            }
            @keyframes first-circle {
                0% {
                    transform: scale(1);
                    background: rgba(255,255,255,0.1); 
                }
                100% {
                    transform: scale(1.8);
                    background: rgba(255,255,255,0);
                }
            }
            @keyframes second-circle {
                0% {
                    transform: scale(1);
                    background: rgba(255,255,255,0.06); 
                }
                100% {
                    transform: scale(2.8);
                    background: rgba(255,255,255,0);
                }
            }
            /*end video*/
            /*Responsiveness*//*Responsiveness*//*Responsiveness*/
            @media(max-width:991px){
                .video-area {
                    flex-direction: column;
                }
                .video-text,
                .video-left{
                    width: 100%;
                }
                .video-left{
                    padding: 15px;
                    margin-bottom: 20px;
                    max-width: 600px;
                }
                .video-text h3{
                    margin-bottom: 30px;
                    text-align: center;
                }
            }
            @media(max-width:600px){
                .video-text h3{
                    font-size: 36px;
                }
                .video{
                    padding: 30px 0;
                }
                .btn-blue-circle,
                .btn-first-circle,
                .btn-second-circle{
                    width: 50px;
                    height: 50px;
                }
            }
        </style>
    <?php endif; ?>

    <div class="video-bg">
        <?php if (get_sub_field('video_bg') == ''): ?>
            <img src="/wp-content/uploads/2019/03/video-bg.jpg" alt="video_bg"/>
        <?php else: ?>
            <?php $video_bg = get_sub_field('video_bg'); ?>
            <img src="<?=$video_bg['url']; ?>" alt="<?=$video_bg['alt']; ?>">
        <?php endif; ?>
    </div>
    <div class="container-custom video-area">
        <div class="video-left">
            <div class="video-box">
                <video id="video-box-<?php echo $video_section;?>" poster="<?php echo get_sub_field('video_preview_img'); ?>">
                    <source src="<?php echo get_sub_field('video_video'); ?>" type="video/mp4">
                </video>
                <div class="play-btn-pos">
                    <div class="play-btn-item">
                        <div class="btn-second-circle"></div>
                        <div class="btn-first-circle"></div>
                        <div class="btn-blue-circle" id="btn-play">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/pause.svg" alt="pause_button"/>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/play.svg" alt="play_button"/>
                        </div>
                    </div>
                </div>                
            </div>  
        </div>
        <div class="video-text">
            <h3><?php echo get_sub_field('video_title'); ?></h3>
            <p><?php echo get_sub_field('video_text'); ?></p>
        </div>
    </div><!-- end video-area -->

    <script>
        jQuery('.btn-blue-circle').hover(function(){
            jQuery('.btn-first-circle').css('animation', 'first-circle 2s');
            }, function(){
            jQuery('.btn-first-circle').css('animation', 'first-circle 2s infinite');
        });
        jQuery('#btn-play').click(function(){
            var video = jQuery('#video-box-<?php echo $video_section;?>')[0];
            console.log(video)
            if(video.paused){
                jQuery('.play-btn-pos').css('top', '100%');
                jQuery('.btn-blue-circle img:last-child').css({'opacity': '0', 'z-index': '1'});
                jQuery('.btn-blue-circle img:first-child').css({'opacity': '1', 'z-index': '2'});
                jQuery('.play-btn-item .btn-first-circle').addClass('animation-stop');
                jQuery('.play-btn-item .btn-second-circle').addClass('animation-stop');
                video.play();
            }else{
                jQuery('.play-btn-pos').css('top', '50%');
                jQuery('.btn-blue-circle img:last-child').css({'opacity': '1', 'z-index': '2'});
                jQuery('.btn-blue-circle img:first-child').css({'opacity': '0', 'z-index': '1'});
                jQuery('.play-btn-item .btn-first-circle').removeClass('animation-stop');
                jQuery('.play-btn-item .btn-second-circle').removeClass('animation-stop');
                video.pause();
            }
        });
    </script>
</section><!-- end video -->