<?php
/**
 * Default theme options.
 *
 * @package Water Delivery
 */

if ( ! function_exists( 'water_delivery_get_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
function water_delivery_get_default_theme_options() {

	$defaults = array();

	// Top Bar
	$defaults['show_header_contact_info'] 		= false;
    $defaults['show_header_social_links'] 		= false;
    $defaults['header_social_links']			= array();

    // Front Page Content
	$defaults['enable_frontpage_content'] 		= true;

	// Slider Section	
	$defaults['enable_featured_slider_section']		    	= false;
	$defaults['featured_slider_content_type']		    	= 'featured_slider_page';
	$defaults['featured_slider_category_readmore_text']		= esc_html__('Read More','water-delivery');
	$defaults['data_slick_speed']					    	= 1000;
	$defaults['data_slick_infinite']				    	= 1;
	$defaults['data_slick_dots']					    	= 1;
	$defaults['data_slick_arrows']					    	= 1;
	$defaults['data_slick_autoplay']				    	= 0;
	$defaults['data_slick_draggable']				    	= 1;
	$defaults['data_slick_fade']					    	= 1;
	$defaults['number_of_featured_slider_items']	    	= 6;

	// Services Section	
	$defaults['enable_featured_services_section']			= false;
	$defaults['featured_services_section_title']			= 'Services';
	$defaults['number_of_featured_services_items']			= 6;
	$defaults['featured_services_column']					= 'col-3';
	$defaults['featured_services_content_type']				= 'featured_services_page';

	// Features Section	
	$defaults['enable_featured_features_section']			= false;
	$defaults['featured_features_section_title']			= 'Features';
	$defaults['number_of_featured_features_items']			= 6;
	$defaults['featured_features_column']					= 'col-4';
	$defaults['featured_features_content_type']				= 'featured_features_page';

	// Theme Options
	$defaults['show_header_image']		    			= 'header-image-enable';
	$defaults['show_page_title']		    			= 'page-title-enable';
	$defaults['layout_options_blog']					= 'no-sidebar';
	$defaults['layout_options_archive']					= 'no-sidebar';
	$defaults['layout_options_page']					= 'no-sidebar';	
	$defaults['layout_options_single']					= 'right-sidebar';	
	$defaults['excerpt_length']							= 25;
	$defaults['readmore_text']							= esc_html__('Learn More','water-delivery');
	$defaults['your_latest_posts_title']				= esc_html__('Blog','water-delivery');

	//Footer section 		
	$defaults['copyright_text']							= esc_html__( 'Copyright &copy; All rights reserved.', 'water-delivery' );

	// Pass through filter.
	$defaults = apply_filters( 'water_delivery_filter_default_theme_options', $defaults );
	return $defaults;
}

endif;

/**
*  Get theme options
*/
if ( ! function_exists( 'water_delivery_get_option' ) ) :

	/**
	 * Get theme option
	 *
	 * @since 1.0.0
	 *
	 * @param string $key Option key.
	 * @return mixed Option value.
	 */
	function water_delivery_get_option( $key ) {

		$default_options = water_delivery_get_default_theme_options();
		if ( empty( $key ) ) {
			return;
		}

		$theme_options = (array)get_theme_mod( 'theme_options' );
		$theme_options = wp_parse_args( $theme_options, $default_options );

		$value = null;

		if ( isset( $theme_options[ $key ] ) ) {
			$value = $theme_options[ $key ];
		}

		return $value;

	}

endif;