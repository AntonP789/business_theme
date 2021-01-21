<?php   

    $flexCont = get_the_ID();
 	// loop through the rows of data

    while ( has_sub_field('flexible_content', $flexCont) ) :
        $layout = get_row_layout();
        if( get_row_layout() == $layout && get_sub_field('blog_posts_header_title') != '' ):
        	$blog_posts++;
        	$blogTitle = get_sub_field('blog_posts_header_title');
        	echo '<li><a href="#blog-'.$blog_posts.'">'.$blogTitle.'</a></li>';   
	   
		elseif( get_row_layout() == $layout && get_sub_field('contact_form_light_header_title') != '' ):
			$contactLight++;
			$contactLightTitle = get_sub_field('contact_form_light_header_title');
			echo '<li><a href="#contactLight-'.$contactLight.'">'.$contactLightTitle.'</a></li>';

        elseif( get_row_layout() == $layout && get_sub_field('contact_form_section_header_title') != '' ):
        	$contact_form++;
        	$contact_formTitle = get_sub_field('contact_form_section_header_title');
			echo '<li><a href="#contact_form-'.$contact_form.'">'.$contact_formTitle.'</a></li>'; 
			
		elseif( get_row_layout() == $layout && get_sub_field('contact_info_map_navigation_title') != '' ):
			$contact_info_map++;
			$contact_info_mapTitle = get_sub_field('contact_info_map_navigation_title');
			echo '<li><a href="#contact_info_map-'.$contact_info_map.'">'.$contact_info_mapTitle.'</a></li>'; 
	   
		elseif( get_row_layout() == $layout && get_sub_field('gallery_section_header_title') != '' ):
			$gallerySection++;
			$gallerySectionTitle = get_sub_field('gallery_section_header_title');
			echo '<li><a href="#gallerySection-'.$gallerySection.'">'.$gallerySectionTitle.'</a></li>'; 

		elseif( get_row_layout() == $layout && get_sub_field('section_header_title') != '' ):
			$img_and_text++;
			$sectionTitle = get_sub_field('section_header_title');
			echo '<li><a href="#img_and_text-'.$img_and_text.'">'.$sectionTitle.'</a></li>';
		
		elseif( get_row_layout() == $layout && get_sub_field('img_boxes_section_header_title') != '' ):
			$img_boxes++;
			$approachTitle = get_sub_field('img_boxes_section_header_title');
			echo '<li><a href="#img_boxes-'.$img_boxes.'">'.$approachTitle.'</a></li>'; 	

		elseif( get_row_layout() == $layout && get_sub_field('list_section_header_title') != '' ):
			$list_section++;
			$list_sectionTitle = get_sub_field('list_section_header_title');
			echo '<li><a href="#list_section-'.$list_section.'">'.$list_sectionTitle.'</a></li>';  

		elseif( get_row_layout() == $layout && get_sub_field('offers_header_title') != '' ):
			$offers++;
			$offersTitle = get_sub_field('offers_header_title');
			echo '<li><a href="#offers-'.$offers.'">'.$offersTitle.'</a></li>';

		elseif( get_row_layout() == $layout && get_sub_field('services_header_title') != '' ):
			$services++;
			$servicesTitle = get_sub_field('services_header_title');
			echo '<li><a href="#services-'.$services.'">'.$servicesTitle.'</a></li>';

		elseif( get_row_layout() == $layout && get_sub_field('services_tabs_section_header_title') != '' ):
			$services_tabs++;
			$services_tabsTitle = get_sub_field('services_tabs_section_header_title');
			echo '<li><a href="#services_tabs-'.$services_tabs.'">'.$services_tabsTitle.'</a></li>';

        elseif( get_row_layout() == $layout && get_sub_field('simple_slider_section_header_title') != '' ):
        	$simple_slider++;
        	$simple_sliderTitle = get_sub_field('simple_slider_section_header_title');
        	echo '<li><a href="#simple_slider-'.$simple_slider.'">'.$simple_sliderTitle.'</a></li>';    
    	
    	elseif( get_row_layout() == $layout && get_sub_field('social_icon_section_header_title') != '' ):
        	$social_icon++;
        	$social_iconTitle = get_sub_field('social_icon_section_header_title');
        	echo '<li><a href="#social-icon-'.$social_icon.'">'.$social_iconTitle.'</a></li>';

        elseif( get_row_layout() == $layout && get_sub_field('specials_slider_section_header_title') != '' ):
        	$specials_slider++;
        	$propositionsTitle = get_sub_field('specials_slider_section_header_title');
        	echo '<li><a href="#specials_slider-'.$specials_slider.'">'.$propositionsTitle.'</a></li>';

        elseif( get_row_layout() == $layout && get_sub_field('statistics_section_header_title') != '' ):
        	$statistics++;
        	$statisticssTitle = get_sub_field('statistics_section_header_title');
        	echo '<li><a href="#statistics-'.$statistics.'">'.$statisticssTitle.'</a></li>'; 

        elseif( get_row_layout() == $layout && get_sub_field('subscribe_section_header_title') != '' ):
        	$subscribe++;
        	$subscribeTitle = get_sub_field('subscribe_section_header_title');
        	echo '<li><a href="#subscribe-'.$subscribe.'">'.$subscribeTitle.'</a></li>'; 

        elseif( get_row_layout() == $layout && get_sub_field('team_section_header_title') != '' ):
        	$team++;
        	$teamTitle = get_sub_field('team_section_header_title');
        	echo '<li><a href="#team-'.$team.'">'.$teamTitle.'</a></li>'; 

        elseif( get_row_layout() == $layout && get_sub_field('testimonials_section_header_title') != '' ):
        	$testimonials++;
        	$testimonialsTitle = get_sub_field('testimonials_section_header_title');
        	echo '<li><a href="#testimonials-'.$testimonials.'">'.$testimonialsTitle.'</a></li>'; 

        elseif( get_row_layout() == $layout && get_sub_field('text_section_header_title') != '' ):
        	$text_section++;
        	$text_sectionTitle = get_sub_field('text_section_header_title');
        	echo '<li><a href="#text_section-'.$text_section.'">'.$text_sectionTitle.'</a></li>';

        elseif( get_row_layout() == $layout && get_sub_field('trust_section_header_title') != '' ):
        	$trust_logos++;
        	$trust_logosTitle = get_sub_field('trust_section_header_title');
        	echo '<li><a href="#trust-logos-'.$trust_logos.'">'.$trust_logosTitle.'</a></li>';

        elseif( get_row_layout() == $layout && get_sub_field('video_section_header_title') != '' ):
        	$video_section++;
        	$video_sectionTitle = get_sub_field('video_section_header_title');
        	echo '<li><a href="#video-'.$video_section.'">'.$video_sectionTitle.'</a></li>';
    	endif;
    endwhile;    

?>