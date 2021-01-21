<?php
    $gallerySection++;
?>
<section id="gallerySection-<?php echo $gallerySection;?>" class="gallerySection <?php if(get_sub_field('gallery_section_layouts')=='Masonry'): ?>masonry<?php endif; ?>">
    <?php if(get_sub_field('gallery_section_layouts')=='Masonry'): ?>
        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
        <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <?php endif; ?>
    <?php if($gallerySection < 2):?>
        <style>
            .gallerySection{
                padding: 50px 0;
                background: <?php echo get_sub_field('gallery_section_background'); ?>;
            }
            .gallerySection .section-container{
                max-width: 100%;
                margin: 0 auto;
                width: <?php echo get_sub_field('gallery_section_container_width'); ?>;
            }
            .gallerySection .galleryCategory:not(:first-child){
                margin-top: 30px;
            }
            .gallerySection .galleryCategory h3{
                text-align: center;
                padding-bottom: 20px;
                margin: 0;
            }
            .gallerySection .galleryCategory .list:before, 
            .gallerySection .galleryCategory .list:after{
                content:"";
                display:block;
                height:0;
                overflow:hidden;    
                clear:both;
            }
            .gallerySection .galleryCategory .list{
                padding: 0 3px;
            }
            .gallerySection .list .item{
                width: calc((100%/<?php echo get_sub_field('gallery_images_per_line'); ?>) - 6px);
                margin: 0 3px 6px;
                cursor: pointer;
                float: left;
                <?php if(get_sub_field('gallery_section_image_hover_effect')=='Scale'): ?>
                    overflow: hidden;
                <?php endif; ?>
            }
            .gallerySection .galleryCategory .item:hover img{
                <?php if(get_sub_field('gallery_section_image_hover_effect')=='Scale'): ?>
                        transform: scale(1.1);    
                    <?php else: ?>
                        box-shadow: 0 0 25px rgba(0,0,0,0.7);
                <?php endif; ?>  
            }
            .gallerySection .item img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: all 0.3s;
            }
            .loadMoreImages{
                width: 200px;
                height: 40px;
                border-radius: 5px;
                cursor: pointer;
                color: #fff;
                background: var(--main_color);
                margin: 15px auto 25px;
                transition: 0.3s;
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: 600;
                text-transform: uppercase;
                font-size: 16px;
                line-height: 1;
                padding-top: 1px;
            }
            .loadMoreImages:hover{
                background: var(--hover_color);
            }
            /*masonry*/
            .masonry.gallerySection .list{
                padding: 0;
            }
            /*Modal*/
            .gallerySection #sectionGalleryModal{
                position: fixed;
                width: 100%;
                height: 100%;
                top: 0;
                bottom: 0;
                left: 0;
                z-index: 9999;
                display: none;
            }
            .gallerySection #sectionGalleryModal .overlapWindow{
                position: absolute;
                width: 100%;
                top: 0;
                bottom: 0;
                background: rgba(0,0,0,.7);    
            }
            .gallerySection #sectionGalleryModal .modalWindowHeader .close{
                cursor: pointer;
                color: #fff;
                position: absolute;
                right: -15px;
                top: -15px;
                z-index: 9;
                line-height: 1;
                font-size: 24px;
                opacity: 1!important;
                background: var(--main_color);
                height: 30px;
                width: 30px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 50%;
                padding-bottom: 5px;
                transition: 0.3s;
            }
            .gallerySection #sectionGalleryModal .modalWindowHeader .close:hover{
                background: #000;
            }
            .gallerySection #sectionGalleryModal .contentWindow{
                position: relative;
                width: 700px;
                height: 700px;
                margin: 0 auto;
                background: inherit;
                z-index: 2;
                top: -1000px;
                max-width: 90%;
                max-height: calc(100% - 200px);
            }
            .gallerySection #sectionGalleryModal .contentPart{
                height: 100%;
            }
            .gallerySection #sectionGalleryModal .slider{
                height: calc(100% - 60px);
            }
            .gallerySection #sectionGalleryModal .slider .item{
                height: 100%!important;
            }
            .gallerySection #sectionGalleryModal .control-buttons{
                background: #fff;
                height: 60px;
            }
            .gallerySection #sectionGalleryModal .slider .item img{
                height:100%;
                width:100%;
                overflow:hidden;
                object-fit: cover;
            }
            .gallerySection #sectionGalleryModal .slick-arrow{
                color:#fff;
                opacity: 0.6;
                font-size:50px;
                width:auto;
                height:auto;
                top:calc(50% - 35px);
            }
            .gallerySection #sectionGalleryModal .slick-arrow:hover{
                opacity: 1;
            }
            .gallerySection #sectionGalleryModal .control-buttons{
                padding: 10px;
            }
            .gallerySection #sectionGalleryModal .control-buttons .control{
                border: 0;
                background: transparent;
                color:#777;
            }
            .gallerySection #sectionGalleryModal .control-buttons .control:hover{
                color: var(--main_color);
            }
            .gallerySection #sectionGalleryModal .control-buttons .play_button{
                font-size:28px;
                margin-right: 2px;
            }
            .gallerySection #sectionGalleryModal .control-buttons .prev_button,
            .gallerySection #sectionGalleryModal .control-buttons .next_button{
                font-size:20px;
                margin: 0 2px;
                position:relative;
                top:-2px;
            }
            /*fullImage Variant*/
            #sectionGalleryModal.fullImage .control-buttons{
                display: none!important;
            }
            #sectionGalleryModal.fullImage .slider{
                height: 100%!important;
            }
            #sectionGalleryModal.fullImage .contentWindow{
                height: 90%;
                width: 90%;
                margin: 5% auto;
            }
            #sectionGalleryModal.fullImage .slider .item img{
                object-fit: contain!important;
            }
            #sectionGalleryModal.fullImage .modalWindowHeader .close{
                height: 60px;
                width: 60px;
            }
            /*End Modal*/
            /*** RESPONSIVNESS *** RESPONSIVNESS *** RESPONSIVNESS ***/
            @media(max-width:1024px){
                .gallerySection .list .item {
                    width: calc((100%/3) - 6px);
                }    
            }

            @media(max-width:768px){
                .gallerySection .list .item {
                    width: calc((100%/2) - 6px);
                }
            }

            @media(max-width:500px){
                .gallerySection .list .item {
                    width: calc(100% - 6px);
                }
            }
        </style>
    <?php endif; ?>
    <!--Receive JS Array From DB-->
    <?php
        $gallery_category_repeater = get_sub_field('gallery_category_repeater');
        $gallery_category_new_array = [];

        foreach( $gallery_category_repeater as $key => $gallery_category_single ){
            $gallery_category_new_array[$key]['category_title'] = $gallery_category_single['gallery_category_title'];
            foreach ( $gallery_category_single['section_gallery_images'] as $key_image => $gallery_single_image ){
                $gallery_category_new_array[$key]['images'][$key_image]['url'] = $gallery_single_image['url'];
                $gallery_category_new_array[$key]['images'][$key_image]['alt'] = $gallery_single_image['alt'];
            }
        }
        
        /*set used images*/
        $itemsGC = get_sub_field('gallery_images_per_line') * get_sub_field('gallery_images_lines');
        if($itemsGC < 4){
            $itemsGC = 4;    
        }
    ?>
    <script>
        galleryArray = JSON.parse('<?php echo JSON_encode($gallery_category_new_array);?>');
        //alert(JSON.stringify(galleryArray, null, 4));
        //alert(JSON.stringify(galleryArray[1].images[0].url, null, 4));
    </script>                
    <div class="section-container">
        <?php $gal = 0; ?>
        <?php if( have_rows('gallery_category_repeater') ): ?>
            <?php while( have_rows('gallery_category_repeater') ): the_row(); ?>
                <div id="gal-<?php echo $gal;?>" class="galleryCategory">
                    <?php if(get_sub_field('gallery_category_title')!=''): ?>
                        <h3><?php echo get_sub_field('gallery_category_title'); ?></h3>
                    <?php endif; ?>
                    <div class="list">                                        
                	<?php
                        $images = get_sub_field('section_gallery_images');                   
                        if( $images ):
                            $i=0;?>
                            <?php foreach( $images as $image ): ?>
                                <?php if($i < $itemsGC): ?>
                            	        <div class="item" onclick="slider(this)" id="image-<?=$i?>">
                            	            <img src="<?=$image['url']?>" alt="<?=$image['alt']?>" title=""/>
                            	        </div>
                                    <?php elseif($i == $itemsGC + 1): ?>
                                        </div><!--End list-->
                                        <div class="clear"></div>   
                                        <div onclick="loadGalleryImages(this)" class="loadMoreImages">Load More</div>
                                <?php endif; ?> 
                            <?php
                            $i++;
                        	endforeach;
                       	endif; 
                    ?>                    
                </div>
                <?php $gal++; ?>
            <?php endwhile;?>           
        <?php endif;?>
    </div><!--End section-container-->
    <div id="sectionGalleryModal" class="<?php if(get_sub_field('gallery_section_modal_layouts')=='Full Width'): ?>fullImage<?php endif; ?>">
        <div class="overlapWindow">
        </div>
        <div class="contentWindow">
            <div class="modalWindowHeader">
                <div class="close right">
                    x
                </div>
            </div>
            <div class="contentPart">
                <div class="slider">
                </div>          
            </div>                        
        </div><!--End contentWindow-->
    </div><!--End sectionGalleryModal-->
    <script>
        /*Item Sizing*/
        var imageRatio = '<?php echo get_sub_field('gallery_images_aspect_ratio'); ?>';
        var masonryIS = jQuery('.gallerySection').hasClass('masonry');
        var imageRatio = imageRatio.split('/');
        function galleryItems(){
            if(masonryIS == true){
                jQuery('.gallerySection.masonry .list').masonry({});
                jQuery('.gallerySection.masonry .list').imagesLoaded().progress( function() {
                    jQuery('.gallerySection.masonry .list').masonry();
                });               
            }else{
                var bI = jQuery('.gallerySection .item').width()/(+imageRatio[0]) * (+imageRatio[1]);
                jQuery('.gallerySection .item').height(bI);            
            }                     
        }
        galleryItems();
        
        jQuery(window).resize(function(){ 
            if(masonryIS == false){    
                galleryItems();
            }
        });/*End resize function*/
        /*End Item Sizing*/
        
        /*Modal*/
        jQuery('#sectionGalleryModal .overlapWindow, #sectionGalleryModal .close').click(function(){  	
            setTimeout(function(){
                jQuery('#sectionGalleryModal').css({'display': 'none'});             
            }, 190);
            setTimeout(function(){
                jQuery('#sectionGalleryModal .contentWindow').attr({'style': ''});
                jQuery('#sectionGalleryModal .slider').slick('unslick');
                jQuery('#sectionGalleryModal .slider').empty();
            }, 250)                        
        });
        
        function galleryModalLaunch(){   	
            jQuery('#sectionGalleryModal').css({'display': 'block'});
            if(jQuery('#sectionGalleryModal').hasClass('fullImage')){
                topPos = 0;    
            }else{
                topPos = '100px';
            }
            setTimeout(function(){
                jQuery('#sectionGalleryModal .contentWindow').css({'top':topPos, 'transition': 'all 0.4s ease-in'});
            }, 10);         
        }   
        /*End Modals*/

        jQuery('#sectionGalleryModal .prev_button').on('click', function() {
            jQuery('#sectionGalleryModal .slider').slick('slickPrev');
        });
        jQuery('#sectionGalleryModal .next_button').on('click', function() {
            jQuery('#sectionGalleryModal .slider').slick('slickNext');
        });
        
        /*add images to Modal*/
        function modalImageAppender(takeArray){
            i = 0;
            //alert(takeArray)
            var catImages = Object.keys(galleryArray[takeArray].images).length;
            do {
                var appendItem = '<div class="item"><img src="'+ galleryArray[takeArray].images[i].url +'" alt="'+ galleryArray[takeArray].images[i].alt +'" /></div>';
                jQuery('#sectionGalleryModal .slider').append(appendItem);        
                i++;	   
            } while (i < catImages);
        }
        
        /*Run Slider in Modal*/
        function slider(elem){
            var takeID = jQuery(elem).parents('.galleryCategory').attr('id');
            var takeID = takeID.split('-');
            var takeArray = takeID[1];
            modalImageAppender(takeArray);
            galleryModalLaunch();
            
            jQuery('#sectionGalleryModal .play_button').html('<i class="far fa-play-circle"></i>');
            var imgNum = jQuery(elem).attr('id');
            imgNum = imgNum.split('-');
            imgNum = (+imgNum[1]) + 1;
            //alert(imgNum)
            jQuery("#sectionGalleryModal .slider").slick({
                dots: false,
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplaySpeed: 2000,
                pauseOnHover: false,
                initialSlide: imgNum,
                prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button"><img src="/wp-content/themes/BisunessTheme/images/slick-arrow.svg" alt="arrow-left"></button>',
                nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><img src="/wp-content/themes/BisunessTheme/images/slick-arrow.svg" alt="arrow-right"></button>',
            });
            jQuery('#sectionGalleryModal .slick-prev').trigger('click');
        }
        
        /*Append New Images*/
        function loadNextImages(category, categoryNum, countLoad, startLoad){
            //alert(startLoad)
            i = startLoad;
            loadEnd = startLoad + countLoad;
            appendItem2 = ''; 
            do {
                appendItem = '<div class="item" onclick="slider(this)" id="image-'+ i +'"><img src="'+ galleryArray[categoryNum].images[i].url +'" alt="'+ galleryArray[categoryNum].images[i].alt +'" /></div>';
                if(masonryIS == true){
                    appendItem2 = appendItem2 + appendItem;    
                }else{
                    jQuery(category).append(appendItem);    
                }           
                i++;            
            } while (i < loadEnd);
            
            if(removeLoad < 1){
                jQuery(category).parent().find('.loadMoreImages').remove();    
            }
            if(masonryIS == false){
                galleryItems();    
            }else{
                $appendItem2 = jQuery(appendItem2);
                jQuery('.gallerySection.masonry .list:first').append($appendItem2).masonry( 'appended', $appendItem2 );
                jQuery('.gallerySection.masonry .list:first').imagesLoaded().progress( function() {
                    jQuery('.gallerySection.masonry .list:first').masonry();
                });            
            }                             
        }
        
        var itemsToLoad = '<?php echo $itemsGC; ?>';
        var itemsToLoad = +itemsToLoad;
        function loadGalleryImages(elem){
            var takeId = jQuery(elem).parent().attr('id');
            var catNum = takeId.split('-');
            var takeItems = '#' + takeId + ' .item';
            var checkCat = jQuery(takeItems);
            var checkCatLG = checkCat.length;
            var catItemsValues = Object.keys(galleryArray[catNum[1]].images).length;
            
            var leftToLoad = catItemsValues - checkCatLG;
            if(itemsToLoad > leftToLoad){
                countLoad = leftToLoad;
                removeLoad = 0;
            }else{
                countLoad = itemsToLoad;
                removeLoad = 1;
            }
            var category = '#' + takeId + ' .list';
            var startLoad = checkCatLG;
            categoryNum = catNum[1]; 
            loadNextImages(category, categoryNum, countLoad, startLoad, removeLoad);  
        }
    </script>
</section>