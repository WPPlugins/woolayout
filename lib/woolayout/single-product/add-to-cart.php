<?php


add_filter( 'add_to_cart_text', 'woolayout_custom_cart_button_text' ); // < 2.1
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woolayout_custom_cart_button_text' );    // 2.1 +
 
function woolayout_custom_cart_button_text() {

	$woolayout_add_to_cart_settings = get_option("woolayout_product_add_to_cart-settings");
 
        return __( $woolayout_add_to_cart_settings['button_text'], 'woocommerce' );
 
}

add_filter( 'add_to_cart_text', 'woolayout_archive_custom_cart_button_text' ); // < 2.1
add_filter( 'woocommerce_product_add_to_cart_text', 'woolayout_archive_custom_cart_button_text' );    // 2.1 +
 
function woolayout_archive_custom_cart_button_text() {

	global $product;
	$product_type = $product->product_type;
	
	$woolayout_add_to_cart_settings = get_option("woolayout_shop_add_to_cart-settings");
	
	switch ( $product_type ) {
		case 'external':
			return __( $woolayout_add_to_cart_settings['button_text_external'], 'woocommerce' );
		break;
		case 'grouped':
			return __( $woolayout_add_to_cart_settings['button_text_grouped'], 'woocommerce' );
		break;
		case 'simple':
			return __( $woolayout_add_to_cart_settings['button_text_simple'], 'woocommerce' );
		break;
		case 'variable':
			return __( $woolayout_add_to_cart_settings['button_text_variable'], 'woocommerce' );
		break;
		default:
			return __( $woolayout_add_to_cart_settings['button_text_button_text'], 'woocommerce' );
	}

	
 
       
 
}





add_shortcode( 'woolayout_add_to_cart', 'woolayout_add_to_cart_shortcodes' );

function woolayout_add_to_cart_shortcodes ( $atts ) {

$woolayout_atts = shortcode_atts( array(
		"shortcode" => "woolayout_add_to_cart",
		"icon" => "dashicons dashicons-cart",
		"element" => "Add To Cart",
		"button_type" => "default",
		"button_text" => "add to cart",
		"button_style" => "default",
		"background-color" => "red",
		"font-family" => "inherit",
			"font-size" => "inherit",
			"font-weight" => "inherit",
			"font-style" => "inherit",
			"text-align" => "inherit",
			"text-transform" => "inherit",
			"color" => "#FFFFFF",
			"border-width" => "inherit",
			"border-style" => "none",
			"border-color" => "transparent",
			"border-radius" => "",
		"direct_checkout" => "false",
		"id" => "",
		"class" => ""
	), $atts );
	
	
	global $post, $product;
	
	if( $woolayout_atts['button_type'] == "default" ) {
		
		 remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
			
		 add_action( 'woolayout_single_product_summary', 'woocommerce_template_single_add_to_cart', 10 );

		do_action( 'woolayout_single_product_summary' );
		
			
	}
	elseif ( $woolayout_atts['button_type'] == "loop" )  {
	

		 remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 30 );
			
		 add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

		 do_action( 'woocommerce_after_shop_loop_item' );
		
		
	}
	else {
	
	}
	
	if ($woolayout_atts["direct_checkout"] == "true") {
			add_filter( 'woocommerce_add_cart_item_data', 'woolayout_cart_data' );

			add_filter ('add_to_cart_redirect', 'woolayout_redirect_to_checkout');

			add_filter( 'woocommerce_is_sold_individually', 'woolayout_filter_woocommerce_is_sold_individually', 10, 5 ); 
	}
	
	
	
	
}


	
	
	// start  custom direct checkout for single product

function woolayout_redirect_to_checkout() {
    global $woocommerce;
    $checkout_url = $woocommerce->cart->get_checkout_url();	
    return $checkout_url;
}

function woolayout_filter_woocommerce_is_sold_individually( $return, $instance ) { 

	global $woocommerce;
	$return = false;

	if ( 'yes' == $instance->sold_individually ) {
		$return = true;
	}
}; 
         

function  woolayout_cart_data( $cart_item_data ) {

    global $woocommerce;
    $woocommerce->cart->empty_cart();

    // Do nothing with the data and return
    return $cart_item_data;
}

// end  custom direct checkout for single product




?>