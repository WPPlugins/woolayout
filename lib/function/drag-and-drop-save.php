<?php
// ajax 

// start update sections 
function update_woolayout_product_page_sections() {
	
$sections_name = sanitize_text_field($_POST['section_id']);	
$sections_list = ($_POST['section_sort']);
	
	// validate: section cant be empty 
	if (!$sections_list) {
		$sections_list = array("woolayout-product-section-01");
	}
	// validation 
		if ( !is_string($sections_name) ) {
		  wp_die(); // dont save it
		}
		foreach ($sections_list as $key => $value) {
			// sanitize sortable  
			$sections_list[ $key ] = sanitize_text_field( $value );
			if ( !is_string($value) ) {
			   wp_die(); // dont save it
			}
		}
	

	
	
		
	if ( get_option( $sections_name ) !== false ) {
		
		// The option already exists, so we just update it.
		update_option( $sections_name, $sections_list );
			
	} else {
		// The option hasn't been added yet. We'll add it with $autoload set to 'no'.
		$deprecated = null;
		$autoload = 'yes';

		add_option( $sections_name, $sections_list, $deprecated, $autoload );
	}
	
	
	
	wp_die(); // this is required to terminate immediately and return a proper response
}
add_action('wp_ajax_update_woolayout_product_page_sections', 'update_woolayout_product_page_sections');
add_action( 'wp_ajax_nopriv_update_woolayout_product_page_sections', 'prefix_ajax_update_woolayout_product_page_sections' );
// end update sections



// start update column 
function update_woolayout_product_page_columns() {

$option_name = sanitize_text_field($_POST['column_id']);	
$option_list = ($_POST['column_sort']);
		
		// validation 
		if ( !is_string($option_name) ) {
		  wp_die(); // dont save it
		}
		foreach ($option_list as $key => $value) {
			// sanitize sortable  
			$option_list[ $key ] = sanitize_text_field( $value );
			if ( !is_string($value) ) {
			   wp_die(); // dont save it
			}
		}
		
		if ( get_option( $option_name ) !== false ) {
				
			update_option( $option_name, $option_list );
		
		} else {
			// The option hasn't been added yet. We'll add it with $autoload set to 'no'.
			$deprecated = null;
			$autoload = 'yes';

			add_option( $option_name, $option_list, $deprecated, $autoload );
			
			
		}
		

	die();
}
add_action('wp_ajax_update_woolayout_product_page_columns', 'update_woolayout_product_page_columns');
add_action( 'wp_ajax_nopriv_update_woolayout_product_page_columns', 'prefix_ajax_update_woolayout_product_page_columns' );
// end update column



// start update elements
function update_woolayout_product_page_elements() {

$option_name = sanitize_text_field($_POST['element_id']);	
$option_list = ($_POST['element_sort']);
	
	// validation 
		if ( !is_string($option_name) ) {
		  wp_die(); // dont save it
		}
		foreach ($option_list as $key => $value) {
			// sanitize sortable  
			$option_list[ $key ] = sanitize_text_field( $value );
			if ( !is_string($value) ) {
			   wp_die(); // dont save it
			}
		}
	

if ( get_option( $option_name ) !== false ) {
    // The option already exists, so we just update it.
    update_option( $option_name, $option_list );
	
} else {
    // The option hasn't been added yet. We'll add it with $autoload set to 'no'.
    $deprecated = null;
    $autoload = 'yes';

    add_option( $option_name, $option_list, $deprecated, $autoload );
}
	die();
}
add_action('wp_ajax_update_woolayout_product_page_elements', 'update_woolayout_product_page_elements');
add_action( 'wp_ajax_nopriv_update_woolayout_product_page_elements', 'prefix_ajax_update_woolayout_product_page_elements' );
// end update elements




// start update woo_elements
function update_woolayout_woo_elements() {

$option_name = sanitize_text_field($_POST['woo_elements_id']);	
$option_list = ($_POST['woo_elements_sort']);

// validation 
		if ( !is_string($option_name) ) {
		  wp_die(); // dont save it
		}
		foreach ($option_list as $key => $value) {
			// sanitize sortable  
			$option_list[ $key ] = sanitize_text_field( $value );
			if ( !is_string($value) ) {
			   wp_die(); // dont save it
			}
		}

if ( get_option( $option_name ) !== false ) {
    // The option already exists, so we just update it.
    update_option( $option_name, $option_list );
	
} else {
    // The option hasn't been added yet. We'll add it with $autoload set to 'no'.
    $deprecated = null;
    $autoload = 'yes';

    add_option( $option_name, $option_list, $deprecated, $autoload );
}
	die();
}
add_action('wp_ajax_update_woolayout_woo_elements', 'update_woolayout_woo_elements');
add_action( 'wp_ajax_nopriv_update_woolayout_woo_elements', 'prefix_ajax_update_woolayout_woo_elements' );
// end update woo_elements






/**** start shop page ****/

		// start shop update section 
		function update_woolayout_shop_section() {

		$option_name = sanitize_text_field($_POST['shop_section_id']);	
		$option_list = ($_POST['shop_section_sort']);
		
		// validate: section cant be empty 
		if (!$option_list) {
			$option_list = array("woolayout-shop-section-01");
		}
		
		// validation 
		if ( !is_string($option_name) ) {
		  wp_die(); // dont save it
		}
		foreach ($option_list as $key => $value) {
			// sanitize sortable  
			$option_list[ $key ] = sanitize_text_field( $value );
			if ( !is_string($value) ) {
			   wp_die(); // dont save it
			}
		}


		if ( get_option( $option_name ) !== false ) {
			// The option already exists, so we just update it.
			update_option( $option_name, $option_list );
			
		} else {
			// The option hasn't been added yet. We'll add it with $autoload set to 'no'.
			$deprecated = null;
			$autoload = 'yes';

			add_option( $option_name, $option_list, $deprecated, $autoload );
		}
			die();
		}
		add_action('wp_ajax_update_woolayout_shop_section', 'update_woolayout_shop_section');
		add_action( 'wp_ajax_nopriv_update_woolayout_shop_section', 'prefix_ajax_update_woolayout_shop_section' );
		// end shop update section
		

		// start shop update column 
		function update_woolayout_shop_column() {

		$option_name = sanitize_text_field($_POST['shop_column_id']);	
		$option_list = ($_POST['shop_column_sort']);
		
		// validation 
		if ( !is_string($option_name) ) {
		  wp_die(); // dont save it
		}
		foreach ($option_list as $key => $value) {
			// sanitize sortable  
			$option_list[ $key ] = sanitize_text_field( $value );
			if ( !is_string($value) ) {
			   wp_die(); // dont save it
			}
		}


		if ( get_option( $option_name ) !== false ) {
			// The option already exists, so we just update it.
			update_option( $option_name, $option_list );
			
		} else {
			// The option hasn't been added yet. We'll add it with $autoload set to 'no'.
			$deprecated = null;
			$autoload = 'yes';

			add_option( $option_name, $option_list, $deprecated, $autoload );
		}
			die();
		}
		add_action('wp_ajax_update_woolayout_shop_column', 'update_woolayout_shop_column');
		add_action( 'wp_ajax_nopriv_update_woolayout_shop_column', 'prefix_ajax_update_woolayout_shop_column' );
		// end shop update column
		
		
		// start shop update elements 
		function update_woolayout_shop_elements() {
		
		$element_id = sanitize_text_field($_POST['shop_element_id']);
		$element_sort = ($_POST['shop_element_sort']);	
		
		
		// validation 
		if ( !is_string($element_id) ) {
		  wp_die(); // dont save it
		}
		foreach ($element_sort as $key => $value) {
			// sanitize sortable  
			$element_sort[ $key ] = sanitize_text_field( $value );
			if ( !is_string($value) ) {
			   wp_die(); // dont save it
			}
		}


		if ( get_option( $element_id ) !== false ) {
			// The option already exists, so we just update it.
			update_option( $element_id, $element_sort );
			
		} else {
			// The option hasn't been added yet. We'll add it with $autoload set to 'no'.
			$deprecated = null;
			$autoload = 'yes';

			add_option( $element_id, $element_sort, $deprecated, $autoload );
		}
			die();
		}
		add_action('wp_ajax_update_woolayout_shop_elements', 'update_woolayout_shop_elements');
		add_action( 'wp_ajax_nopriv_update_woolayout_shop_elements', 'prefix_ajax_update_woolayout_shop_elements' );
		// end shop update elements

		
		// start shop update woo_elements
		function update_woolayout_shop_woo_elements() {

		$option_name = sanitize_text_field($_POST['woo_elements_id']);	
		$option_list = ($_POST['woo_elements_sort']);
		
			// validation 
		if ( !is_string($option_name) ) {
		  wp_die(); // dont save it
		}
		foreach ($option_list as $key => $value) {
			// sanitize sortable  
			$option_list[ $key ] = sanitize_text_field( $value );
			if ( !is_string($value) ) {
			   wp_die(); // dont save it
			}
		}

		if ( get_option( $option_name ) !== false ) {
			// The option already exists, so we just update it.
			update_option( $option_name, $option_list );
			
		} else {
			// The option hasn't been added yet. We'll add it with $autoload set to 'no'.
			$deprecated = null;
			$autoload = 'yes';

			add_option( $option_name, $option_list, $deprecated, $autoload );
		}
			die();
		}
		add_action('wp_ajax_update_woolayout_shop_woo_elements', 'update_woolayout_shop_woo_elements');
		add_action( 'wp_ajax_nopriv_update_woolayout_shop_woo_elements', 'prefix_ajax_update_woolayout_shop_woo_elements' );
		// end shop update woo_elements


		
		/**** start save fields page ****/
	
	
	
	function free_woolayout_single_product_register_settings() {
		$woolayout_product_page_section_list = get_option("woolayout-product-page-sections");

		foreach ( (array) $woolayout_product_page_section_list as $count_section => $sections) {
			$column_list = get_option($sections);
			
			 // register_setting( 'woolayout_single_product_settings_group', $sections."-settings" );
			
								foreach ( (array) $column_list as $count_column => $column) {
									$elements_list = get_option($column);
									
									// register_setting( 'woolayout_single_product_settings_group', $column."-settings" );
									register_setting( 'woolayout_single_product_settings_group', $column."-settings-free" );
									
											foreach ( (array) $elements_list as $count_elements => $elements) {
												
												$elements_settings = get_option($elements.'-settings');
												 // register_setting( 'woolayout_single_product_settings_group', $elements.'-settings' );
												
											}
									
								}
		}
	}
	add_action( 'admin_init', 'free_woolayout_single_product_register_settings' );
	
	function free_woolayout_shop_register_settings() {
		
		$woolayout_shop_page_section_list = get_option("woolayout-shop-page-sections");

		foreach ( (array) $woolayout_shop_page_section_list as $count_section => $section) {
			$column_list = get_option($section);
			
			// register_setting( 'woolayout_shop_settings_group', $section."-settings" );
			
								foreach ( (array) $column_list as $count_column => $column) {
									$elements_list = get_option($column);
									
									// register_setting( 'woolayout_shop_settings_group', $column."-settings" );
									register_setting( 'woolayout_shop_settings_group', $column."-settings-free" );
									
											foreach ( (array) $elements_list as $count_elements => $elements) {
												
												$elements_settings = get_option($elements.'-settings');
												// register_setting( 'woolayout_shop_settings_group', $elements.'-settings' );
												
											}
									
								}
		}
		
		register_setting( 'woolayout_shop_settings_group', "woolayout-shop-loop" );
	}
	add_action( 'admin_init', 'free_woolayout_shop_register_settings' );
		
		
/**** start end fields page ****/

// end ajax
?>