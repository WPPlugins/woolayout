<?php
/**
 * Single Product Price, including microdata for SEO
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
add_shortcode( 'woolayout_price', 'woolayout_template_single_price_shortcode' );

function woolayout_template_single_price_shortcode ( $atts ) {

$woolayout_atts = shortcode_atts( array(
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
	), $atts );
	
	

global $product;


?>

<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">

	<p class="price" style=" <?php echo "font-family:".$woolayout_atts['font-family']."; font-size:".$woolayout_atts['font-size']."; font-weight:".$woolayout_atts['font-weight']."; font-style:".$woolayout_atts['font-style']."; text-align:".$woolayout_atts['text-align']."; text-transform:".$woolayout_atts['text-transform']."; color:".$woolayout_atts['color']."; "; ?> " >
	<?php echo $product->get_price_html(); ?>
	</p>

	<meta itemprop="price" content="<?php echo $product->get_price(); ?>" />
	<meta itemprop="priceCurrency" content="<?php echo get_woocommerce_currency(); ?>" />
	<link itemprop="availability" href="http://schema.org/<?php echo $product->is_in_stock() ? 'InStock' : 'OutOfStock'; ?>" />

</div>



<?php

}
?>