<?php



add_action('admin_menu', 'woolayout_layout_menu');

function woolayout_layout_menu() {
	
	// Add a new top-level menu (ill-advised):
    add_menu_page(__('Woocommerce Layout','woolayout_menu'), __('WooLayOut','woolayout_menu'), 'manage_options', 'woolayout-menu-page', 'woolayout_settings_layout_settings', 'dashicons-layout', 55.44 );

	 // Add a submenu to the custom top-level menu:
    add_submenu_page('woolayout-menu-page', __('Product Page','woolayout_menu'), __('Product Page','woolayout_menu'), 'manage_options', 'woolayout-product-page', 'woolayout_product_layout_settings');

	// Add a submenu to the custom top-level menu:
  add_submenu_page('woolayout-menu-page', __('Shop Page','woolayout_menu'), __('Shop Page','woolayout_menu'), 'manage_options', 'woolayout-shop-page', 'woolayout_shop_layout_settings');
	
	
	// for future development
	
	// Add a submenu to the custom top-level menu:
    //add_submenu_page('woolayout-menu-page', __('Cart Page','woolayout_menu'), __('Cart Page','woolayout_menu'), 'manage_options', 'woolayout-cart-page', 'woolayout_cart_layout_settings');
	
	// Add a submenu to the custom top-level menu:
   // add_submenu_page('woolayout-menu-page', __('Checkout Page','woolayout_menu'), __('Checkout Page','woolayout_menu'), 'manage_options', 'woolayout-checkout-page', 'woolayout_checkout_layout_settings');
	
	// Add a submenu to the custom top-level menu:
    //add_submenu_page('woolayout-menu-page', __('My Account Page','woolayout_menu'), __('My Account Page','woolayout_menu'), 'manage_options', 'woolayout-myaccount-page', 'woolayout_myaccount_layout_settings');
	
	

	
	
}



?>