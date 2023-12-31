<?php
/**
 * Food Grocery Store: Block Patterns
 *
 * @package Food Grocery Store
 * @since   1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'food-grocery-store',
		array( 'label' => __( 'Food Grocery Store', 'food-grocery-store' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'food-grocery-store/banner-section',
		array(
			'title'      => __( 'Banner Section', 'food-grocery-store' ),
			'categories' => array( 'food-grocery-store' ),
			'content'    => "<!-- wp:cover {\"url\":\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/banner.png\",\"id\":6113,\"dimRatio\":0,\"minHeight\":550,\"align\":\"full\",\"className\":\"is-light banner-section\"} -->\n<div class=\"wp-block-cover alignfull is-light banner-section\" style=\"min-height:550px\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim-0 has-background-dim\"></span><img class=\"wp-block-cover__image-background wp-image-6113\" alt=\"\" src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/banner.png\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:columns {\"align\":\"wide\"} -->\n<div class=\"wp-block-columns alignwide\"><!-- wp:column {\"width\":\"25%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:25%\"></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"50%\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center\" style=\"flex-basis:50%\"><!-- wp:heading {\"textAlign\":\"center\",\"level\":1,\"style\":{\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|white\"}}},\"typography\":{\"fontStyle\":\"normal\",\"fontWeight\":\"700\"}},\"textColor\":\"white\"} -->\n<h1 class=\"wp-block-heading has-text-align-center has-white-color has-text-color has-link-color\" style=\"font-style:normal;font-weight:700\">Lorem ipsum is simply dummy text of the printing</h1>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"style\":{\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|white\"}}}},\"textColor\":\"white\"} -->\n<p class=\"has-text-align-center has-white-color has-text-color has-link-color\">Organica is where early adopters and innovation seekers find lively, imaginative tech before it hits the mainstream.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"style\":{\"color\":{\"background\":\"#d51c22\"},\"border\":{\"radius\":\"3px\"}}} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link has-background wp-element-button\" style=\"border-radius:3px;background-color:#d51c22\">Shop Now</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"25%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:25%\"></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover -->",
		)
	);

	register_block_pattern(
		'food-grocery-store/product-section',
		array(
			'title'      => __( 'Trending Product Section', 'food-grocery-store' ),
			'categories' => array( 'food-grocery-store' ),
			'content'    => "<!-- wp:cover {\"overlayColor\":\"white\",\"align\":\"wide\",\"className\":\"products-outer-box\"} -->\n<div class=\"wp-block-cover alignwide has-white-background-color has-background-dim products-outer-box\"><div class=\"wp-block-cover__inner-container\"><!-- wp:heading {\"textAlign\":\"left\",\"style\":{\"color\":{\"text\":\"#2c2b2b\"}}} -->\n<h2 class=\"has-text-align-left has-text-color\" style=\"color:#2c2b2b\">Trending Products</h2>\n<!-- /wp:heading -->\n\n<!-- wp:woocommerce/product-category {\"columns\":4,\"rows\":1,\"categories\":[16],\"contentVisibility\":{\"title\":true,\"price\":true,\"rating\":true,\"button\":true},\"align\":\"wide\",\"className\":\"products-container\"} /-->\n\n<!-- wp:paragraph {\"align\":\"center\",\"placeholder\":\"Write title\",\"fontSize\":\"large\"} -->\n<p class=\"has-text-align-center has-large-font-size\"></p>\n<!-- /wp:paragraph --></div></div>\n<!-- /wp:cover -->",
		)
	);
}