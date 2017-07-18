<?php
/**
 * Single product short description
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

add_shortcode( 'woolayout_short_description', 'woolayout_product_short_description_shortcode' );

function woolayout_product_short_description_shortcode ( $atts ) {


$woolayout_atts = shortcode_atts( array(
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
	), $atts );

global $post;

if ( ! $post->post_excerpt ) {
	return;
}

?>
<div itemprop="description" style=" <?php echo "font-family:".$woolayout_atts['font-family']."; font-size:".$woolayout_atts['font-size']."; font-weight:".$woolayout_atts['font-weight']."; font-style:".$woolayout_atts['font-style']."; text-align:".$woolayout_atts['text-align']."; text-transform:".$woolayout_atts['text-transform']."; color:".$woolayout_atts['color']."; "; ?> ">
	<?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?>
</div>

<?php
// end woolayout_product_short_description_shortcode
}
?>