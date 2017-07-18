<?php
 require 'lib/function/menu.php';
 require 'lib/function/script-css.php';
 require 'lib/function/drag-and-drop-save.php';
 require 'lib/function/woolayout-shortcode.php';


require 'lib/function/default-setup/default-product-page.php';
require 'lib/function/default-setup/default-shop-page.php';


 require 'lib/function/default-template/reset-default-product-page.php';
require 'lib/function/default-template/reset-default-shop-page.php';

 
require 'lib/function/setting-pages/woolayout.php';
require 'lib/function/setting-pages/product.php';
require 'lib/function/setting-pages/shop.php';



// woolayout single prduct template



require 'lib/woolayout/single-product/meta.php';
require 'lib/woolayout/single-product/price.php';
require 'lib/woolayout/single-product/product-image.php';
require 'lib/woolayout/single-product/product-thumbnails.php';
require 'lib/woolayout/single-product/rating.php';
require 'lib/woolayout/single-product/related.php';
require 'lib/woolayout/single-product/review.php';
require 'lib/woolayout/single-product/sale-flash.php';
require 'lib/woolayout/single-product/share.php';
require 'lib/woolayout/single-product/short-description.php';
require 'lib/woolayout/single-product/title.php';
require 'lib/woolayout/single-product/up-sells.php';

require 'lib/woolayout/single-product/feat-images.php';
require 'lib/woolayout/single-product/loop.php';



// // require 'lib/woolayout/single-product/product-attributes.php';

// woolayout single prduct add t cart  template

require 'lib/woolayout/single-product/add-to-cart/external.php';
require 'lib/woolayout/single-product/add-to-cart/grouped.php';
 require 'lib/woolayout/single-product/add-to-cart/simple.php';
require 'lib/woolayout/single-product/add-to-cart/variable.php';
require 'lib/woolayout/single-product/add-to-cart/variation.php';
require 'lib/woolayout/single-product/add-to-cart/variation-add-to-cart-button.php';


// woolayout single prduct add t cart  template

require 'lib/woolayout/single-product/tabs/tabs.php';

// woolayout single prduct add t cart  template

require 'lib/woolayout/single-product/add-to-cart.php';






  



function woolayout_reg_scripts_and_css() {
	
	wp_register_style( 'woolayout-drag-and-drop-css',  plugin_dir_url( __FILE__ ) . 'lib/css/dragndrop.css' );
	wp_enqueue_style( 'woolayout-drag-and-drop-css' );

	
	wp_register_script( 'woolayout-drag-and-drop-js',  plugin_dir_url( __FILE__ ) . 'lib/js/dragndrop.js' );
	wp_enqueue_script( 'woolayout-drag-and-drop-js' );
	
	wp_register_script( 'woolayout-layout-latest',  plugin_dir_url( __FILE__ ) . 'lib/js/jquery.layout-latest.js' );
	wp_enqueue_script( 'woolayout-layout-latest' );
	
	wp_register_script( 'woolayout-layout-js',  plugin_dir_url( __FILE__ ) . 'lib/js/jquery.layout-1.2.0.js' );
	wp_enqueue_script( 'woolayout-layout-js' );
	
	

    wp_enqueue_script( 'jquery-ui-draggable' );
	wp_enqueue_script( 'jquery-ui-droppable' );
	wp_enqueue_script( 'jquery-ui-selectable' );
	wp_enqueue_script( 'jquery-ui-sortable' );
	wp_enqueue_script( 'jquery-ui-resizable' );	
	wp_enqueue_script( 'jquery-ui-dialog' );
	wp_enqueue_script( 'jquery-ui-tabs' );
	wp_enqueue_script( 'jquery-ui-selectmenu' );

	
	
	
}

add_action( 'admin_print_scripts', 'woolayout_reg_scripts_and_css' ); // wp_enqueue_scripts action hook to link only on the front-end



add_action( 'admin_enqueue_scripts', 'woolayout_enqueue_color_picker' );
function woolayout_enqueue_color_picker( $hook_suffix ) {
    // first check that $hook_suffix is appropriate for your admin page
    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'woolayout-script-handle', plugin_dir_url('woolayout-script-handle-script.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
	
	wp_enqueue_media();
}


function woolayout_style() {

	wp_register_style( 'woolayout-style-css',  plugin_dir_url( __FILE__ ) . 'lib/css/woolayout-style.css' );
	wp_enqueue_style( 'woolayout-style-css' );
	
		wp_register_style( 'woolayout-lightslider-css',  plugin_dir_url( __FILE__ ) . 'lib/css/lightslider.min.css' );
	 wp_enqueue_style( 'woolayout-lightslider-css' );
	 
	 $woolayout_gallery_slider_control = plugin_dir_url( __FILE__ ).'lib/images/controls.png';
	 $woolayout_product_add_to_cart_settings = get_option("woolayout_product_add_to_cart-settings");
      $woolayout_add_to_cart_settings = get_option("woolayout_shop_add_to_cart-settings");
	  $woolayout_gallery_settings = get_option("woolayout_shop_gallery-settings");
	   $custom_css = "
                .woolayout.woocommerce div.product form.cart .button {
                        background-color: {$woolayout_product_add_to_cart_settings['background-color']};
						border-width: {$woolayout_product_add_to_cart_settings['border-width']};
						border-style: {$woolayout_product_add_to_cart_settings['border-style']};
						border-color: {$woolayout_product_add_to_cart_settings['border-color']};
						border-radius: {$woolayout_product_add_to_cart_settings['border-radius']};
						font-family: {$woolayout_product_add_to_cart_settings['font-family']};
						font-size: {$woolayout_product_add_to_cart_settings['font-size']};
						font-weight: {$woolayout_product_add_to_cart_settings['font-weight']};
						font-style: {$woolayout_product_add_to_cart_settings['font-style']};
						text-align: {$woolayout_product_add_to_cart_settings['text-align']};
						text-transform: {$woolayout_product_add_to_cart_settings['text-transform']};
						color: {$woolayout_product_add_to_cart_settings['color']};
						padding: {$woolayout_product_add_to_cart_settings['padding']};
						margin: {$woolayout_product_add_to_cart_settings['margin']};
                }
				.woolayout.woocommerce ul.products li.product .button {
						background-color: {$woolayout_add_to_cart_settings['background-color']};
						border-width: {$woolayout_add_to_cart_settings['border-width']};
						border-style: {$woolayout_add_to_cart_settings['border-style']};
						border-color: {$woolayout_add_to_cart_settings['border-color']};
						border-radius: {$woolayout_add_to_cart_settings['border-radius']};
						font-family: {$woolayout_add_to_cart_settings['font-family']};
						font-size: {$woolayout_add_to_cart_settings['font-size']};
						font-weight: {$woolayout_add_to_cart_settings['font-weight']};
						font-style: {$woolayout_add_to_cart_settings['font-style']};
						text-align: {$woolayout_add_to_cart_settings['text-align']};
						text-transform: {$woolayout_add_to_cart_settings['text-transform']};
						color: {$woolayout_add_to_cart_settings['color']};
						padding: {$woolayout_add_to_cart_settings['padding']};
						margin: {$woolayout_add_to_cart_settings['margin']};
				}
				.lSAction > a {
						background-image:url('$woolayout_gallery_slider_control') !important;
				}
				";
				
        wp_add_inline_style( 'woolayout-style-css', $custom_css );
	 
	 
}

add_action( 'wp_print_styles', 'woolayout_style' ); // wp_enqueue_scripts action hook to link only on the front-end

function woolayout_js() {

 wp_register_script( 'woolayout-js',  plugin_dir_url( __FILE__ ) . 'lib/js/woolayout-js.js' );
	 wp_enqueue_script( 'woolayout-js' );

  wp_register_script( 'woolayout-lightslider-js',  plugin_dir_url( __FILE__ ) . 'lib/js/lightslider.js' );
	wp_enqueue_script( 'woolayout-lightslider-js' );

	
	wp_enqueue_script( 'jquery-ui-tabs' );
	
	wp_enqueue_script( 'jquery-effects-core' );

}

add_action( 'wp_print_scripts', 'woolayout_js' ); // wp_enqueue_scripts action hook to link only on the front-end



//body class
function woolayout_body_class($classes) {
	$classes[]= 'woolayout';
	return $classes;
}
add_filter('body_class', 'woolayout_body_class');



// start overide woocommerce template in a plugin 



// get path for templates used in loop ( like content-product.php )
add_filter( 'wc_get_template_part', function( $template, $slug, $name ) 
{ 

    // Look in plugin/woocommerce/slug-name.php or plugin/woocommerce/slug.php
    if ( $name ) {
        $path = plugin_dir_path( __FILE__ ) . WC()->template_path() . "{$slug}-{$name}.php";    
    } else {
        $path = plugin_dir_path( __FILE__ ) . WC()->template_path() . "{$slug}.php";    
    }

    return file_exists( $path ) ? $path : $template;

}, 10, 3 );


// get path for all other templates.
add_filter( 'woocommerce_locate_template', function( $template, $template_name, $template_path ) 
{ 

    $path = plugin_dir_path( __FILE__ ) . $template_path . $template_name;  
    return file_exists( $path ) ? $path : $template;

}, 10, 3 );


?>