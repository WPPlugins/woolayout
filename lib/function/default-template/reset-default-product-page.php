<?php


function reset_woolayout_product_woo_elements_lists() {

$woo_elements_lists = array('woolayout_product_feat_image');

return $woo_elements_lists; 

}



function reset_woolayout_product_page_sections() {


$woolayout_section = array(
		"shortcode" => "woolayout_section",
		"icon" => "dashicons",
		"element" => "Sections",
		"class" => "",
			"background-color" => "transparent",
			"background-image" => "none",
			"background-repeat" => "no-repeat",
			"background-attachment" => "inherit",
			"background-position" => "center",
			"background-size" => "cover",
			"border-width" => "inherit",
			"border-style" => "none",
			"border-color" => "transparent",
			"padding" => "0",
			"margin" => "0",
			"featured_background" => "disable",
			"display_elements_on_hover" => "",
			"elements_align" => "none",
			"min-height" => "250px"
	);

$woolayout_column = array(
		"shortcode" => "woolayout_column",
		"icon" => "dashicons",
		"element" => "Column",
		"class" => "",
		"featured_background" => "disable",
			"background-color" => "transparent",
			"background-image" => "none",
			"background-repeat" => "no-repeat",
			"background-attachment" => "inherit",
			"background-position" => "center",
			"background-size" => "cover",
			"border-width" => "inherit",
			"border-style" => "none",
			"border-color" => "transparent",
			"border-radius" => "",
			"padding" => "0",
			"margin" => "0",
			"column-width" => "w100"
	);	
	
	$woolayout_gallery = array(
		"shortcode" => "woolayout_gallery",
		"icon" => "dashicons dashicons-format-image",
		"element" => "Gallery",
		"id" => "",
		"class" => "",
		"gallery_style" => "gallery_style_1",
		"sale_style" => "sale_style_1"
	);
	$woolayout_title = array(
		"shortcode" => "woolayout_title",
		"icon" => "dashicons dashicons-editor-textcolor",
		"element" => "Title",
		"id" => "",
		"class" => "",
			"font-family" => "inherit",
			"font-size" => "35px",
			"font-weight" => "bold",
			"font-style" => "inherit",
			"text-align" => "inherit",
			"text-transform" => "inherit",
			"color" => "inherit"
	);
	$woolayout_rating = array(
		"shortcode" => "woolayout_rating",
		"icon" => "dashicons dashicons-star-filled",
		"element" => "Rating",
		"rating_text" => "Customer Rating",
		"rating_type" => "default"
		
	);
	$woolayout_price = array(
		"shortcode" => "woolayout_price",
		"icon" => "dashicons",
		"element" => "Price",
		"id" => "",
		"class" => "",
			"font-family" => "inherit",
			"font-size" => "1.25em",
			"font-weight" => "bold",
			"font-style" => "inherit",
			"text-align" => "inherit",
			"text-transform" => "inherit",
			"color" => "#77a464"
	);
	$woolayout_short_description = array(
		"shortcode" => "woolayout_short_description",
		"icon" => "dashicons dashicons-text",
		"element" => "Short Description",
		"id" => "",
		"class" => "",
			"font-family" => "inherit",
			"font-size" => "inherit",
			"font-weight" => "inherit",
			"font-style" => "inherit",
			"text-align" => "inherit",
			"text-transform" => "inherit",
			"color" => "inherit"
	);
	$woolayout_add_to_cart = array(
		"shortcode" => "woolayout_add_to_cart",
		"icon" => "dashicons dashicons-cart",
		"element" => "Add To Cart",
		"button_type" => "default",
		"button_text" => "add to cart",
		"button_text_external" => "Buy product",
		"button_text_grouped" => "View products",
		"button_text_simple" => "Add to cart",
		"button_text_variable" => "Select options",
		"button_style" => "default",
		"background-color" => "inherit",
		"font-family" => "inherit",
			"font-size" => "inherit",
			"font-weight" => "inherit",
			"font-style" => "inherit",
			"text-align" => "inherit",
			"text-transform" => "inherit",
			"color" => "inherit",
			"border-width" => "inherit",
			"border-style" => "none",
			"border-color" => "transparent",
			"border-radius" => "inherit",
		"direct_checkout" => "false",
		"id" => "",
		"class" => ""
	);
	$woolayout_meta = array(
		"shortcode" => "woolayout_meta",
		"icon" => "dashicons",
		"element" => "Meta",
		"id" => "",
		"class" => "",
		"sku_display" => "show",
		"sku_text" => "SKU:",
		"categories_display" => "show",
		"categories_text" => "Categories:",
		"tags_display" => "show",
		"tags_text" => "Tags:"
	);
	$woolayout_sharing = array(
		"shortcode" => "woolayout_sharing",
		"icon" => "dashicons dashicons-networking",
		"element" => "Sharing",
		"id" => "",
		"class" => ""
	);
	$woolayout_data_tabs = array(
		"shortcode" => "woolayout_data_tabs",
		"icon" => "dashicons",
		"element" => "Data Tabs",
		"remove_description_tab" => "show",
		"remove_reviews_tab" => "show",
		"remove_information_tab" => "show",
		"rename_description_tab" => "Description",
		"rename_reviews_tab" => "Reviews",
		"rename_information_tab" => "Additional Information",
		"priority_description_tab" => "5",
		"priority_reviews_tab" => "15",
		"priority_information_tab" => "10",
		"enable_custom_tab" => "false",
		"rename_custom_tab" => "Custom Tab",
		"priority_custom_tab" => "50",
		"enable_custom_tab" => "false",
		"rename_custom_tab" => "Custom Tab",
		"priority_custom_tab" => "50",
		"content_custom_tab" => "",
		"id" => "",
		"class" => ""
	);
	$woolayout_upsell = array(
		"shortcode" => "woolayout_upsell",
		"icon" => "dashicons",
		"element" => "Upsale Products",
		"id" => "",
		"class" => ""
	);
	$woolayout_related_products = array(
		"shortcode" => "woolayout_related_products",
		"icon" => "dashicons",
		"element" => "Related Products",
		"id" => "",
		"class" => ""
	);
	$woolayout_feat_image = array(
		"shortcode" => "woolayout_feat_image",
		"icon" => "dashicons dashicons-format-image",
		"element" => "Feat Image",
		"image_size" => "shop_catalog",
		'image_hover' => 'hover_1',
		"image_sale_style" => "sale_style_1",
		"id" => "",
		"class" => ""
	);
	$woolayout_text_editor = array(
		"shortcode" => "woolayout_text_editor",
		"icon" => "dashicons",
		"element" => "Text Editor",
		"id" => "",
		"class" => ""
	);
	$woolayout_shortcode_loop = array(
		"shortcode" => "woolayout_shortcode_loop",
		"icon" => "dashicons",
		"element" => "Loop",
		"id" => "",
		"class" => ""
	);
	
	
	
	
	
// update section
	$section = "woolayout-product-section-0";
	$reset_default_woolayout_product_page_sections_list = array( $section );

// update section settings 
	update_option( $section.'-settings', $woolayout_section );

// update column
	$column_list = array(
		$section.'-column-0',
		$section.'-column-1',
		$section.'-column-2'
	);
	update_option( $section, $column_list );
	
// update column 0
	$update_column_0 = array(
		'woolayout_product_gallery'
	);
	$update_column_0_setting = array(
		"shortcode" => "woolayout_column",
		"icon" => "dashicons",
		"element" => "Column",
		"class" => "",
		"featured_background" => "disable",
			"background-color" => "transparent",
			"background-image" => "none",
			"background-repeat" => "no-repeat",
			"background-attachment" => "inherit",
			"background-position" => "center",
			"background-size" => "cover",
			"border-width" => "inherit",
			"border-style" => "none",
			"border-color" => "transparent",
			"border-radius" => "",
			"padding" => "0",
			"margin" => "0",
			"column-width" => "w50"
	);
	$update_column_0_setting_free = array(
		"shortcode" => "woolayout_column",
		"icon" => "dashicons",
		"element" => "Column",
		"class" => "",
			"column-width" => "w50"
	);
	update_option( $section.'-column-0', $update_column_0 );
	update_option( $section.'-column-0-settings', $update_column_0_setting );
	update_option( $section.'-column-0-settings-free', $update_column_0_setting_free );
	
// update column 1
	$update_column_1 = array(
		'woolayout_product_title',
		'woolayout_product_rating',
		'woolayout_product_price',
		'woolayout_product_short_description',
		'woolayout_product_add_to_cart',
		'woolayout_product_meta',
		'woolayout_product_sharing'
	);
	$update_column_1_settings = array(
		"shortcode" => "woolayout_column",
		"icon" => "dashicons",
		"element" => "Column",
		"class" => "",
		"featured_background" => "disable",
			"background-color" => "transparent",
			"background-image" => "none",
			"background-repeat" => "no-repeat",
			"background-attachment" => "inherit",
			"background-position" => "center",
			"background-size" => "cover",
			"border-width" => "inherit",
			"border-style" => "none",
			"border-color" => "transparent",
			"border-radius" => "",
			"padding" => "0",
			"margin" => "0",
			"column-width" => "w50"
	);
	$update_column_1_settings_free = array(
		"shortcode" => "woolayout_column",
		"icon" => "dashicons",
		"element" => "Column",
		"class" => "",
		"id" => "",
		"column-width" => "w50"
	);
	update_option( $section.'-column-1', $update_column_1 );
	update_option( $section.'-column-1-settings', $update_column_1_settings );
	update_option( $section.'-column-1-settings-free', $update_column_1_settings_free );
	
// update column 2
	$update_column_2 = array(
		'woolayout_product_data_tabs',
		'woolayout_product_upsell',
		'woolayout_product_related_products'
	);
	$update_column_2_settings = array(
		"shortcode" => "woolayout_column",
		"icon" => "dashicons",
		"element" => "Column",
		"class" => "",
		"featured_background" => "disable",
			"background-color" => "transparent",
			"background-image" => "none",
			"background-repeat" => "no-repeat",
			"background-attachment" => "inherit",
			"background-position" => "center",
			"background-size" => "cover",
			"border-width" => "inherit",
			"border-style" => "none",
			"border-color" => "transparent",
			"border-radius" => "",
			"padding" => "0",
			"margin" => "0",
			"column-width" => "w100"
	);
	$update_column_2_settings_free = array(
		"shortcode" => "woolayout_column",
		"icon" => "dashicons",
		"element" => "Column",
		"class" => "",
		"id" => "",
		"column-width" => "w100"
	);
	update_option( $section.'-column-2', $update_column_2 );
	update_option( $section.'-column-2-settings', $update_column_2_settings );
	update_option( $section.'-column-2-settings-free', $update_column_2_settings_free );
	
// update elements	
	update_option( 'woolayout_product_gallery-settings', $woolayout_gallery );
	update_option( 'woolayout_product_title-settings', $woolayout_title );
	update_option( 'woolayout_product_rating-settings', $woolayout_rating);
	update_option( 'woolayout_product_price-settings', $woolayout_price );
	update_option( 'woolayout_product_short_description-settings', $woolayout_short_description );
	update_option( 'woolayout_product_add_to_cart-settings', $woolayout_add_to_cart);
	update_option( 'woolayout_product_meta-settings', $woolayout_meta );
	update_option( 'woolayout_product_sharing-settings', $woolayout_sharing );
	update_option( 'woolayout_product_data_tabs-settings', $woolayout_data_tabs );
	update_option( 'woolayout_product_upsell-settings', $woolayout_upsell );
	update_option( 'woolayout_product_feat_image-settings', $woolayout_feat_image );
	



	

return $reset_default_woolayout_product_page_sections_list; 

}




?>