jQuery(document).ready(function(){
        /*prevent empty space in pages*/
        function PEPFU(){
            var pepFU = jQuery(window).innerHeight() - jQuery('footer').height() - jQuery('#wpadminbar').height();
            jQuery('body > .content').css('min-height', pepFU);   
        }
        PEPFU()
        /*Header Scripts*//*Header Scripts*//*Header Scripts*/
        /*Height header*/
        function HH(){
            var heiHeader = jQuery('.fixing').height();
            jQuery('header').height(heiHeader);            
        }
        HH();
        jQuery('.searchOpen').click(function(){ 
            jQuery('header .headerSearch').stop().slideDown(300);; 
        });
        jQuery('.headerSearch').click(function(){
            setTimeout(function(){
                jQuery("#resortpro_sw_lodging_unit").focus();
            }, 200);             
        })        
        /*Open mobile Menu*/       
        jQuery('.mobileMenu').click(function(){
            var hzcl = jQuery(this).hasClass('mobileMenuOpen');
            if(hzcl == false){
                jQuery('header nav').slideDown(400);
                jQuery(this).addClass('mobileMenuOpen');  
            }else{
                jQuery('header nav').slideUp(300);
                jQuery(this).removeClass('mobileMenuOpen');
            }
        })
        /*cacl height and position*/
        function FiH(){
            if(window.innerWidth > 600){
                var tpFH = jQuery('.fixing').height() + jQuery('#wpadminbar').height();    
            }else{
                var chCL = jQuery('.fixing').hasClass('activated');
                if(chCL == false){
                    var tpFH = jQuery('.fixing').height() + jQuery('#wpadminbar').height();    
                }else{
                    var tpFH = jQuery('.fixing').height();
                }
            }
            var formHei = jQuery(window).innerHeight() - tpFH;
            jQuery('header nav').css({'max-height': formHei});                               
        }
        FiH()        
        /*add caret to dropdown menu*/
        if(jQuery(window).innerWidth() > 1024){
            jQuery('nav .menu-item-has-children > a').each( function(){
                jQuery(this).append('<span class="caret"></span>')
            })
        }else{
            jQuery('nav .menu-item-has-children').each( function(){
                jQuery(this).append('<span class="thereCaret"><img src="/wp-content/themes/BusinessTheme/images/nav-arrow.svg" alt=""></span>')
            })
        }
        /*open on hover or click*/
        if (jQuery(window).innerWidth() > 1024) {
            jQuery('nav .menu-item-has-children').hover(function(){
                jQuery(this).find('ul:first').stop().slideDown(300);
            }, function(){
                jQuery(this).find('ul:first').stop().slideUp(200);
            });
        }else{
            jQuery('nav .menu-item-has-children .thereCaret').click(function(){
                jQuery(this).parent().find('ul:first').toggleClass('openMenu');
                jQuery(this).toggleClass('active');
            });
        }
        if(jQuery(window).innerWidth() > 600){
            var topHP = 0 + jQuery('#wpadminbar').height();    
        }else{
            var topHP = 0; 
        }
        jQuery(window).scroll(function(){
            /*header fixed pos*/                              
                if(jQuery(window).scrollTop() > 100){
                    jQuery('.fixing').addClass('activated').css({'top': topHP});
                    FiH();
                }else{
                    jQuery('.fixing').removeClass('activated').attr('style', '');
                    FiH(); 
                }
        });/*End Scroll Function*/
        jQuery(window).resize(function(){         
            FiH()
        });/*End resize function*/
        /*End Header Scripts*//*End Header Scripts*//*End Header Scripts*/
        //play-pulse hover
        jQuery('.btn-blue-circle').hover(function(){
            jQuery('.btn-first-circle').css('animation', 'first-circle 2s');
            jQuery('.btn-second-circle').css('animation', 'second-circle 2s');
            }, function(){
            jQuery('.btn-first-circle').css('animation', 'first-circle 2s infinite');
            jQuery('.btn-second-circle').css('animation', 'second-circle 2s infinite');
        });
        //empty video after close
        jQuery('#videoModal').on('hidden.bs.modal', function () {
          jQuery('#videoModal .modal-body').empty();
        })
        /*scrollAnimate*/
        jQuery(".scrollAnimate a").click(function(e){
            e.preventDefault();            
            var id  = jQuery(this).attr('href');                                
            var top = jQuery(id).offset().top - jQuery('header').height() - 20;           
            jQuery('body,html').animate({scrollTop: top}, 600);
        });

         /* Modal Windows Script */
         jQuery(document).on('click', '.modal_btn', function (e){ 
            e.preventDefault();
            var targetLink = jQuery(this).attr('href');
            jQuery(targetLink).addClass('active');
        });

        jQuery(document).on('click', '.close_modal, .overlay', function (e){       
            jQuery('.modal_window').removeClass('active');
        });
    /* End Modal Windows Script */
    
})//end document ready
