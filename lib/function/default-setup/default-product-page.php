<?php


    $deprecated = null;
    $autoload = 'no';



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
	
	
	
	// start add default woo elements
	
	$woo_elements_lists = array('woolayout_product_feat_image');
	
	/**** $woo_elements_lists = array(
		"woolayout_gallery",
		"woolayout_title",
		"woolayout_rating",
		"woolayout_price",
		"woolayout_short_description",
		"woolayout_add_to_cart",
		"woolayout_meta",
		"woolayout_sharing",
		"woolayout_data_tabs",
		"woolayout_upsell",
		"woolayout_related_products",
		"woolayout_feat_image"
	); *****/
	
	
	
	
	$default_woolayout_woo_elements_lists = 'woolayout_product_woo_elements_lists';
	$default_woolayout_woo_elements_value = $woo_elements_lists;
	

		
		
		// add default_woolayout_woo_elements_lists
	if ( get_option( $default_woolayout_woo_elements_lists ) !== false ) {
		// The option already exists, so we just update it.
			// update_option( $default_woolayout_woo_elements_lists, $default_woolayout_woo_elements_value, $deprecated, $autoload );
	}
	 else {
		// The option hasn't been added yet. We'll add it with $autoload set to 'no'.
		add_option( $default_woolayout_woo_elements_lists, $default_woolayout_woo_elements_value, $deprecated, $autoload );
	}
	
	
	
	// end add default woo elements
	
	if ( get_option( "woolayout_product_gallery-settings" ) !== false ) {
		// The option already exists, so we just update it.
			// update_option( "woolayout_product_gallery-settings", $woolayout_gallery, $deprecated, $autoload );
	}
	 else {
		// The option hasn't been added yet. We'll add it with $autoload set to 'no'.
		add_option( "woolayout_product_gallery-settings", $woolayout_gallery, $deprecated, $autoload );
	}
	if ( get_option( "woolayout_product_title-settings" ) !== false ) {
		// The option already exists, so we just update it.
			// update_option( "woolayout_product_title-settings", $woolayout_title, $deprecated, $autoload );
	}
	 else {
		// The option hasn't been added yet. We'll add it with $autoload set to 'no'.
		add_option( "woolayout_product_title-settings", $woolayout_title, $deprecated, $autoload );
	}
	if ( get_option( "woolayout_product_rating-settings" ) !== false ) {
		// The option already exists, so we just update it.
			// update_option( "woolayout_product_rating-settings", $woolayout_rating, $deprecated, $autoload );
	}
	 else {
		// The option hasn't been added yet. We'll add it with $autoload set to 'no'.
		add_option( "woolayout_product_rating-settings", $woolayout_rating, $deprecated, $autoload );
	}
	if ( get_option( "woolayout_product_price-settings" ) !== false ) {
		// The option already exists, so we just update it.
			// update_option( "woolayout_product_price-settings", $woolayout_price, $deprecated, $autoload );
	}
	 else {
		// The option hasn't been added yet. We'll add it with $autoload set to 'no'.
		add_option( "woolayout_product_price-settings", $woolayout_price, $deprecated, $autoload );
	}
	if ( get_option( "woolayout_product_short_description-settings" ) !== false ) {
		// The option already exists, so we just update it.
			// update_option( "woolayout_product_short_description-settings", $woolayout_short_description, $deprecated, $autoload );
	}
	 else {
		// The option hasn't been added yet. We'll add it with $autoload set to 'no'.
		add_option( "woolayout_product_short_description-settings", $woolayout_short_description, $deprecated, $autoload );
	}
	if ( get_option( "woolayout_product_add_to_cart-settings" ) !== false ) {
		// The option already exists, so we just update it.
			// update_option( "woolayout_product_add_to_cart-settings", $woolayout_add_to_cart, $deprecated, $autoload );
	}
	 else {
		// The option hasn't been added yet. We'll add it with $autoload set to 'no'.
		add_option( "woolayout_product_add_to_cart-settings", $woolayout_add_to_cart, $deprecated, $autoload );
	}
	if ( get_option( "woolayout_product_meta-settings" ) !== false ) {
		// The option already exists, so we just update it.
			// update_option( "woolayout_product_meta-settings", $woolayout_meta, $deprecated, $autoload );
	}
	 else {
		// The option hasn't been added yet. We'll add it with $autoload set to 'no'.
		add_option( "woolayout_product_meta-settings", $woolayout_meta, $deprecated, $autoload );
	}
	if ( get_option( "woolayout_product_sharing-settings" ) !== false ) {
		// The option already exists, so we just update it.
			// update_option( "woolayout_product_sharing-settings", $woolayout_sharing, $deprecated, $autoload );
	}
	 else {
		// The option hasn't been added yet. We'll add it with $autoload set to 'no'.
		add_option( "woolayout_product_sharing-settings", $woolayout_sharing, $deprecated, $autoload );
	}
	if ( get_option( "woolayout_product_data_tabs-settings" ) !== false ) {
		// The option already exists, so we just update it.
			// update_option( "woolayout_product_data_tabs-settings", $woolayout_data_tabs, $deprecated, $autoload );
	}
	 else {
		// The option hasn't been added yet. We'll add it with $autoload set to 'no'.
		add_option( "woolayout_product_data_tabs-settings", $woolayout_data_tabs, $deprecated, $autoload );
	}
	if ( get_option( "woolayout_product_upsell-settings" ) !== false ) {
		// The option already exists, so we just update it.
			// update_option( "woolayout_product_upsell-settings", $woolayout_upsell, $deprecated, $autoload );
	}
	 else {
		// The option hasn't been added yet. We'll add it with $autoload set to 'no'.
		add_option( "woolayout_product_upsell-settings", $woolayout_upsell, $deprecated, $autoload );
	}
	if ( get_option( "woolayout_product_related_products-settings" ) !== false ) {
		// The option already exists, so we just update it.
			// update_option( "woolayout_product_related_products-settings", $woolayout_related_products, $deprecated, $autoload );
	}
	 else {
		// The option hasn't been added yet. We'll add it with $autoload set to 'no'.
		add_option( "woolayout_product_related_products-settings", $woolayout_related_products, $deprecated, $autoload );
	}
	if ( get_option( "woolayout_product_feat_image-settings" ) !== false ) {
		// The option already exists, so we just update it.
			// update_option( "woolayout_product_feat_image-settings", $woolayout_feat_image, $deprecated, $autoload );
	}
	 else {
		// The option hasn't been added yet. We'll add it with $autoload set to 'no'.
		add_option( "woolayout_product_feat_image-settings", $woolayout_feat_image, $deprecated, $autoload );
	}
	
	
	
	// end add default woo elements
	
														
	
		$section_0 = "woolayout-product-section-0";
		$section_1 = "woolayout-product-section-1";
		$section_2 = "woolayout-product-section-2";


	
// default product page section list
	$default_woolayout_product_page_sections_list = 'woolayout-product-page-sections' ;
	$default_woolayout_product_page_sections_value = array(
		$section_0
		);
		

			
	// add default product page section list
	if ( get_option( $default_woolayout_product_page_sections_list ) !== false ) {
		// The option already exists, so we just update it.
		 // update_option( $default_woolayout_product_page_sections_list, $default_woolayout_product_page_sections_value, $deprecated, $autoload );
	}
	 else {
		// The option hasn't been added yet. We'll add it with $autoload set to 'no'.
		add_option( $default_woolayout_product_page_sections_list, $default_woolayout_product_page_sections_value, $deprecated, $autoload );
	}

// add default product page rw list

foreach ($default_woolayout_product_page_sections_value as $count_section => $section) {
	
	
			// add default section settings
			$section_name_settings = $section.'-settings';
			$section_value_settings = $woolayout_section;
			
					// add default section settings
					if ( get_option( $section_name_settings ) !== false ) {
						// update_option( $section_name_settings, $section_value_settings );
					}
					else {
						add_option( $section_name_settings, $section_value_settings, $deprecated, $autoload );
					}
			
			
			
				$section_column_name = $section;
				$section_column_value = array(
					$section.'-column-0',
					$section.'-column-1',
					$section.'-column-2'
				);
				
						// add default product page row list
							if ( get_option( $section_column_name ) !== false ) {
								// update_option( $section_column_name, $section_column_value );
							}
							else {
								add_option( $section_column_name, $section_column_value, $deprecated, $autoload );
							}
							
				
			
				foreach ($section_column_value as $count_column => $column ) {
				
						if ($column == $section.'-column-0' ) {
								
											// column-settings
											$section_column_name_settings = $column.'-settings';
											$section_column_value_settings = array(
													"shortcode" => "woolayout_column",
													"icon" => "dashicons",
													"element" => "Column",
													"class" => "",
														"background-color" => "transparent",
														"background-image" => "none",
														"background-repeat" => "no-repeat",
														"background-attachment" => "inherit",
														"background-position" => "inherit",
														"border" => "none",
														"padding" => "0",
														"margin" => "0",
														"column-width" => "w50"
												);
											$section_column_name_settings_free = $column.'-settings-free';
											$section_column_value_settings_free = array(
													"shortcode" => "woolayout_column",
													"icon" => "dashicons",
													"element" => "Column",
													"column-width" => "w50"
												);
											// add default product page section_column_name_settings
											if ( get_option( $section_column_name_settings ) !== false ) {
												// update_option( $section_column_name_settings, $section_column_value_settings );
											}
											else {
												add_option( $section_column_name_settings_free, $section_column_value_settings_free, $deprecated, $autoload );
												add_option( $section_column_name_settings, $section_column_value_settings, $deprecated, $autoload );
											}
											
													$section_column_elements_name = $column;
													$section_column_elements_value = array(
														'woolayout_product_gallery'
														);
													// add default product page section list
													if ( get_option( $section_column_elements_name ) !== false ) {
														  // update_option( $section_column_elements_name, $section_column_elements_value );
													}
													else {
														add_option( $section_column_elements_name, $section_column_elements_value, $deprecated, $autoload );
													}
													
															// start adding elements settings
															foreach ($section_column_elements_value as $count_elements => $elements ) {
																
																if ($elements == 'woolayout_product_gallery')  {
																	$section_column_elements_name_settings = $elements.'-settings';
																	$section_column_elements_value_settings = $woolayout_gallery;
																}
																else {
																	$section_column_elements_name_settings = $elements.'-settings';
																	$section_column_elements_value_settings = array();
																	
																}
															// add default product page section list
															if ( get_option( $section_column_elements_name_settings ) !== false ) {
																  // update_option( $section_column_elements_name_settings, $section_column_elements_value_settings );
															}
															else {
																add_option( $section_column_elements_name_settings, $section_column_elements_value_settings, $deprecated, $autoload );
															}
															}
															// end adding elements settings
						}
						elseif ($column == $section.'-column-1' ) {
						
											// column-settings
											$section_column_name_settings = $column.'-settings';
											$section_column_value_settings = array(
													"shortcode" => "woolayout_column",
													"icon" => "dashicons",
													"element" => "Column",
													"class" => "",
														"background-color" => "transparent",
														"background-image" => "none",
														"background-repeat" => "no-repeat",
														"background-attachment" => "inherit",
														"background-position" => "inherit",
														"border" => "none",
														"padding" => "0",
														"margin" => "0",
														"column-width" => "w50"
												);
											$section_column_name_settings_free = $column.'-settings-free';
											$section_column_value_settings_free = array(
													"shortcode" => "woolayout_column",
													"icon" => "dashicons",
													"element" => "Column",
														"column-width" => "w50"
												);
											// add default product page section_column_name_settings
											if ( get_option( $section_column_name_settings ) !== false ) {
												// update_option( $section_column_name_settings, $section_column_value_settings );
											}
											else {
												add_option( $section_column_name_settings_free, $section_column_value_settings_free, $deprecated, $autoload );
												add_option( $section_column_name_settings, $section_column_value_settings, $deprecated, $autoload );
											}
											
													$section_column_elements_name = $column;
													$section_column_elements_value = array(
														'woolayout_product_title',
														'woolayout_product_rating',
														'woolayout_product_price',
														'woolayout_product_short_description',
														'woolayout_product_add_to_cart',
														'woolayout_product_meta',
														'woolayout_product_sharing'
														);
													// add default product page section list
													if ( get_option( $section_column_elements_name ) !== false ) {
														  // update_option( $section_column_elements_name, $section_column_elements_value );
													}
													else {
														add_option( $section_column_elements_name, $section_column_elements_value, $deprecated, $autoload );
													}
													
															// start adding elements settings
															foreach ($section_column_elements_value as $count_elements => $elements ) {
																
																if ($elements == 'woolayout_product_title') {
																	$section_column_elements_name_settings = $elements.'-settings';
																	$section_column_elements_value_settings = $woolayout_title;
																} 
																elseif ($elements == 'woolayout_product_rating')  {
																	$section_column_elements_name_settings = $elements.'-settings';
																	$section_column_elements_value_settings = $woolayout_rating;
																}
																elseif ($elements == 'woolayout_product_price')  {
																	$section_column_elements_name_settings = $elements.'-settings';
																	$section_column_elements_value_settings = $woolayout_price;
																}
																elseif ($elements == 'woolayout_product_short_description')  {
																	$section_column_elements_name_settings = $elements.'-settings';
																	$section_column_elements_value_settings = $woolayout_short_description;
																}
																elseif ($elements == 'woolayout_product_add_to_cart')  {
																	$section_column_elements_name_settings = $elements.'-settings';
																	$section_column_elements_value_settings = $woolayout_add_to_cart;
																}
																elseif ($elements == 'woolayout_product_meta')  {
																	$section_column_elements_name_settings = $elements.'-settings';
																	$section_column_elements_value_settings = $woolayout_meta;
																}
																elseif ($elements == 'woolayout_product_sharing')  {
																	$section_column_elements_name_settings = $elements.'-settings';
																	$section_column_elements_value_settings = $woolayout_sharing;
																}
																else {
																	
																}
															// add default product page section list
															if ( get_option( $section_column_elements_name_settings ) !== false ) {
																  // update_option( $section_column_elements_name_settings, $section_column_elements_value_settings );
															}
															else {
																add_option( $section_column_elements_name_settings, $section_column_elements_value_settings, $deprecated, $autoload );
															}
															}
															// end adding elements settings
						
						}
						elseif ($column == $section.'-column-2' ) {
						
											// column-settings
											$section_column_name_settings = $column.'-settings';
											$section_column_value_settings = array(
													"shortcode" => "woolayout_column",
													"icon" => "dashicons",
													"element" => "Column",
													"class" => "",
														"background-color" => "transparent",
														"background-image" => "none",
														"background-repeat" => "no-repeat",
														"background-attachment" => "inherit",
														"background-position" => "inherit",
														"border" => "none",
														"padding" => "0",
														"margin" => "0",
														"column-width" => "w100"
												);
											$section_column_name_settings_free = $column.'-settings-free';
											$section_column_value_settings_free = array(
													"shortcode" => "woolayout_column",
													"icon" => "dashicons",
													"element" => "Column",
													"column-width" => "w100"
												);	
											// add default product page section_column_name_settings
											if ( get_option( $section_column_name_settings ) !== false ) {
												// update_option( $section_column_name_settings, $section_column_value_settings );
											}
											else {
												add_option( $section_column_name_settings_free, $section_column_value_settings_free, $deprecated, $autoload );
												add_option( $section_column_name_settings, $section_column_value_settings, $deprecated, $autoload );
											}
											
													$section_column_elements_name = $column;
													$section_column_elements_value = array(
														'woolayout_product_data_tabs',
														'woolayout_product_upsell',
														'woolayout_product_related_products'
														);
													// add default product page section list
													if ( get_option( $section_column_elements_name ) !== false ) {
														  // update_option( $section_column_elements_name, $section_column_elements_value );
													}
													else {
														add_option( $section_column_elements_name, $section_column_elements_value, $deprecated, $autoload );
													}
													
															// start adding elements settings
															foreach ($section_column_elements_value as $count_elements => $elements ) {
																
																if ($elements == 'woolayout_product_data_tabs') {
																	$section_column_elements_name_settings = $elements.'-settings';
																	$section_column_elements_value_settings = $woolayout_data_tabs;
																} 
																elseif ($elements == 'woolayout_product_upsell')  {
																	$section_column_elements_name_settings = $elements.'-settings';
																	$section_column_elements_value_settings = $woolayout_upsell;
																}
																elseif ($elements == 'woolayout_product_related_products')  {
																	$section_column_elements_name_settings = $elements.'-settings';
																	$section_column_elements_value_settings = $woolayout_related_products;
																}
																else {
																	
																}
															// add default product page section list
															if ( get_option( $section_column_elements_name_settings ) !== false ) {
																  // update_option( $section_column_elements_name_settings, $section_column_elements_value_settings );
															}
															else {
																add_option( $section_column_elements_name_settings, $section_column_elements_value_settings, $deprecated, $autoload );
															}
															}
															// end adding elements settings
						
						}
						else {
						
						}
				
				
				}
									
										
					
			
			
				
				

		
	
}


?>