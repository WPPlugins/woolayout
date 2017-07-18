<?php
/**
 * Single Product Meta
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


add_shortcode( 'woolayout_meta', 'woolayout_template_single_meta_shortcode' );

function woolayout_template_single_meta_shortcode ( $atts ) {
	
	
		$woolayout_atts = shortcode_atts( array(
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
	), $atts );


global $post, $product;

$cat_count = sizeof( get_the_terms( $post->ID, 'product_cat' ) );
$tag_count = sizeof( get_the_terms( $post->ID, 'product_tag' ) );

?>
<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>
	
	<?php 
	if ( $woolayout_atts['sku_display'] == "hide" ) {
		
	}  
	else {
	?>

	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

		<span class="sku_wrapper"><?php _e( $woolayout_atts['sku_text'], 'woocommerce' ); ?> <span class="sku" itemprop="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : __( 'N/A', 'woocommerce' ); ?></span>.</span>

	<?php endif; ?>
	
	<?php
	}
	if ( $woolayout_atts['categories_display'] == "hide" ) {
		
	}  
	else {
		?>
	

	<?php echo $product->get_categories( ', ', '<span class="posted_in">' . _n( $woolayout_atts['categories_text'], $woolayout_atts['categories_text'], $cat_count, 'woocommerce' ) . ' ', '.</span>' ); ?>

	<?php 
	}
	if ( $woolayout_atts['tags_display'] == "hide" ) {
		
	}  
	else {
		?>
	
	<?php echo $product->get_tags( ', ', '<span class="tagged_as">' . _n( $woolayout_atts['tags_text'], $woolayout_atts['tags_text'], $tag_count, 'woocommerce' ) . ' ', '.</span>' ); ?>
	<?php 
	}
	?>
	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>


<?php
}
?>