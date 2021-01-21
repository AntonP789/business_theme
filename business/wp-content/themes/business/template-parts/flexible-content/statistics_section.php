<?php
    $statistics++;
?>
<section id="statistics-<?php echo $statistics;?>" class="statistics <?php if(get_field('animate_statistics')!=''): ?>animatedStats<?php endif; ?> ">
    <?php if($statistics < 2):?>
        <style>
            .statistics {
                padding: 30px 0;
                display: flex;
            }
            .statistics-block{
                width: 25%;
            }
            .statistics-square {
                padding: 25px;
                background-color: var(--main-color);
                width: 370px;
                margin: -30px 0;
                z-index: 99;
            }
            .statistics-square-wrap {
                display: flex;
                padding: 30px 25px;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                position: relative;
                border: 1px solid var(--active-color);
                height: 100%;
                width: 100%;
            }
            .statistics-square-wrap > a {
                position: relative;
                z-index: 2;
                display: flex;
                align-items: center;
                justify-content: center;
                text-decoration: none;
                height: 55px;
                font: bold 18px 'Fira Sans Condensed', sans-serif;
                text-transform: uppercase;
                letter-spacing: 0.1em;
                margin-bottom: 25px;
                color: var(--active-color);
                padding: 0 25px;
                background-color: #fff;
                border-radius: 30px;
                box-shadow: 0 5px 15px rgba(11,9,65, .3)
            }
            .statistics-square-wrap > a:hover {
                color: #fff;
                background-color: var(--active-color);
            }
            .statistics-square-wrap h3 {
                text-align: center;
                text-transform: uppercase;
                font-size: 42px;
                font-weight: bold;
                color: #fff;
                line-height: 1.1;
            }
            .statistics-square-wrap h3 span {
                margin-bottom: 25px;
                display: block;
                font-weight: 300;
            }
            .statistics-text {
                display: flex;
                align-items: stretch;
                justify-content: center;
                width: 100%;	
                padding: 30px 25px 30px 0;
            }
            .statistic-text-wrap{
                position: relative;
                width: calc(100% - 370px);
                flex-grow: 1;
				display: flex;
				align-items: center;
            }
            .statistic-text-img{
                position: absolute;
                width: 100%;
                height: 100%;    
                top: 0;
                background: var(--overlay-img-color);
            }
            .statistic-text-img img{
                object-fit: cover;
                width: 100%;
                height: 100%;
                opacity: 0.3;
            }
            .statistics-text h4 {
                font: 300 18px 'Fira Sans Condensed';
                letter-spacing: 0.1em;
                padding: 55px 20px 55px 60px;
                border-right: 3px solid rgba(255,255,255,.15);
                border-top: 3px solid rgba(255,255,255,.15);
                border-bottom: 3px solid rgba(255,255,255,.15);
                position: relative;
                color: #fff;
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0 0 0 70px;
            }
            .statistics-text h4::before {
                position: absolute;
                content: '';
                left: 0;
                bottom: 0;
                width: 3px;
                height: 25%;
                background-color: rgba(255,255,255,.15);
            }
            .statistics-text h4::after {
                position: absolute;
                content: '';
                left: 0;
                top: 0;
                width: 3px;
                height: 25%;
                background-color: rgba(255,255,255,.15);
            }
            .statistics-text h4 > span {
                position: absolute;
                left: 0;
                top: 50%;
                transform: translate(-50%, -50%);
                font: bold 48px 'Rubik', sans-serif;
                color: var(--active-color);
                max-width: 125px;
                overflow: hidden;
            }
            /*end statistics*/
            /*RESPONSIVENESS*//*RESPONSIVENESS*//*RESPONSIVENESS*/
            @media(max-width: 1720px) and (min-width: 1500px) {
                .statistics-text h4 {
                    font-size: 16px;
                    padding-right: 15px;
                }
                .statistics-text h4 > span {
                    font-size: 44px;
                }
            }
            @media(max-width:1500px){
                .statistics-square h3{
                    font-size: 32px;
                }
                .statistics-square h3 span{
                    margin-bottom: 15px;
                }
                .statistics-text{
                    flex-wrap: wrap;        
                }
                .statistic-text-wrap{
                    width: calc(100% - 330px);
                }
                .statistics-block{
                    width: 50%;
					margin-bottom: 15px;
					margin-top: 15px;
                }
                .statistics-square {
                    width: 330px;
                }
                .statistics-text h4{
                    margin-left: 80px;
                    padding: 40px 0 40px 60px;
                }
            }
            @media(max-width: 1199px) {
                .statistics-text h4 {
                    margin-left: 65px;
                }
            }
            @media(max-width: 991px) {
                .statistics {
                    flex-wrap: wrap;
                }
                .statistics-square {
                    padding: 15px;
                    margin: 0;
                }
                .statistics-square-wrap {
                    flex-direction: row-reverse;
                    justify-content: space-between;
                    align-items: center;
                    padding: 15px;
                }
                .statistics-square h3 span {
                    display: inline-block;
                    margin: 0 5px 0 0;
                }
                .statistics-square-wrap > a {
                    margin: 0;
                }
                .statistic-text-wrap, .statistics-square {
                    width: 100%;
                    height: auto;
                }
                .statistics-text {
                    padding: 15px 15px;
                }

            }
            @media(max-width: 750px) {
                .statistics-block{
                    width: 100%;
                    max-width: 370px;
                }
                .statistics-text h4 {
                    padding-left: 80px;
                }
            }
            @media(max-width: 550px) {
                .statistics-text h4 {
                    margin-left: 40px;
                }
                .statistics-text h4 > span {
                    font-size: 42px;
                }
                .statistics-square h3 {
                    font-size: 24px;
                }
                .statistics-square-wrap > a {
                    padding: 7px 15px;
                    font-size: 14px;
                }
            }
            @media(max-width: 420px) {
                .statistics-square-wrap, .statistics-square {
                    padding: 15px 10px; 
                }
                .statistics-text h4 {
                    padding-left: 60px;
                }
                .statistics-square h3 {
                    font-size: 20px;
                }
                .statistics-square-wrap > a {
                    padding: 5px 10px;
                    font-size: 12px;
                }
            }
        </style>
    <?php endif; ?>  

    <?php if (get_sub_field('show_action_form') == 'yes'): ?>
        <div class="statistics-square">
            <div class="statistics-square-wrap">
                <a href="<?php echo get_sub_field('stat_button_link'); ?>"><?php echo get_sub_field('stat_button_text'); ?></a>
                <h3><span><?php echo get_sub_field('stat_light_title'); ?></span><?php echo get_sub_field('stat_bold_title'); ?></h3>
            </div>
        </div><!--end statistics-square -->
    <?php endif ?>
    <div class="statistic-text-wrap">
        <div class="statistic-text-img">
            <?php if (get_sub_field('stat_bg') == ''): ?>
                <img src="/wp-content/uploads/2019/03/stat-bg.jpg" alt="stat_bg"/>
            <?php else: ?>
                <?php $stat_bg = get_sub_field('stat_bg'); ?>
                <img src="<?=$stat_bg['url']; ?>" alt="<?=$stat_bg['alt']; ?>"/>
            <?php endif; ?>
        </div>
        <div class="statistics-text">
            <?php if( have_rows('stat_item') ): ?>
                <?php while( have_rows('stat_item') ): the_row(); ?>
                    <div class="statistics-block">
                        <h4><span><span class="count opacity"><?php echo get_sub_field('stat_item_value'); ?></span><?php echo get_sub_field('stat_item_value_symbol'); ?></span><?php echo get_sub_field('stat_item_title'); ?></h4>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div><!--end statistics-text -->
    </div> 

    <script>
        var break_count = 0;
        $(window).scroll(function() {
            var section_scroll = $(window).scrollTop();
            var section_pos = $('#statistics-<?php echo $statistics;?>').offset().top - ($(window).innerHeight() * 0.8);
            if (section_pos < section_scroll && break_count < 1) {
                $('.count').each(function () {
                    var len=this.innerHTML.length;
                    var z=this.innerHTML[len-1];
                    var num=(parseInt(this.innerHTML)+'').length;
                    if(num !==len) {
                        this.innerHTML=parseInt(this.innerHTML);
                        $(this.parentNode).append('<span>'+ z+'</span>');
                    }
                    $(this).prop('Counter',0).animate({
                        Counter: $(this).text()
                    }, {
                        duration: 4000,
                        easing: 'swing',
                        step: function (now) {
                            $(this).text(Math.ceil(now));
                        }
                    });
                });
                break_count++;
            }
        })
        // if(jQuery('.statistics').hasClass('animatedStats')){
        //     var takeInfo = jQuery('.statistics h4 span');
        //     var takeInfo = jQuery.makeArray(takeInfo);
        //     var takeInfoLG = takeInfo.length;
        //     /*Take and check text*/
        //     itemsStatistickArray[];
        //     i = 0;
        //     do {
        //         var takeText = takeInfoLG;
        //         i++;	       
        //     } while (i < takeInfoLG);    
        // }
    </script>
</section><!-- end statistics -->