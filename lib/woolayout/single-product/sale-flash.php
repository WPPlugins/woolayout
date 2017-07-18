<?php
/**
 * Single Product Sale Flash
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

add_shortcode( 'woolayout_sale_flash', 'woolayout_sale_flash_shortcode' );

function woolayout_sale_flash_shortcode ( $atts ) {
	
	$woolayout_atts = shortcode_atts( array(
		'sale_style' => 'sale_style_1!'
	), $atts );

global $post, $product;



// start woolayout sale flash

		$product_type = $product->product_type;
		
		if ($product_type == "grouped") {
		
		}
		elseif ( $product->is_on_sale() ) {
				
				$sale_price = get_post_meta( $product->id, '_price', true);
				$regular_price = get_post_meta( $product->id, '_regular_price', true);
				
				if (empty($regular_price)){ //then this is a variable product
					$available_variations = $product->get_available_variations();
					$variation_id=$available_variations[0]['variation_id'];
					$variation= new WC_Product_Variation( $variation_id );
					$regular_price = $variation ->regular_price;
					$sale_price = $variation ->sale_price;
				}
				else {
				
				}
				
				$save_percent = round(( ($regular_price - $sale_price) / $regular_price ) * 100);
				$save_price = $regular_price - $sale_price;

						if ( $woolayout_atts['sale_style'] == "sale_style_1" ) {
							echo apply_filters( 'woocommerce_sale_flash', '<span class="onsale sale_style_1">' . __( $woolayout_atts['sale_text'], 'woocommerce' ) . '</span>', $post, $product );
							
						}  
						elseif ( $woolayout_atts['sale_style'] == "sale_style_2" ) {
							?>
							<div class="sale-style-2"> <span class="sale-text"> Sale! </span> <span class="sale-percent"> <?php echo $save_percent; ?>% OFF </span> </div>
							<?php
						}
						elseif ( $woolayout_atts['sale_style'] == "sale_style_3" ) {
							?>
							<div class="sale-style-3-wrap">
							<div class="sale-style-3"> <span class="sale-text"> SAVE </span> <span class="sale-price"> <?php echo get_woocommerce_currency_symbol().''.$save_price; ?> </span> </div>
							</div>
							<?php
						}
						elseif ( $woolayout_atts['sale_style'] == "sale_style_4" ) {
							?>
							<div class="sale-style-4">
								<span class="sale-percent"> <?php echo $save_percent; ?>%  </span>
								<div class="sale-style-4-wrap">
									<span class="sale-text"> SAVE </span>
									<span class="sale-price"> <?php echo get_woocommerce_currency_symbol().''.$save_price; ?> </span>
								</div>
							</div>
							
							<?php
						}
						else {
							
						}

		}


		// end  woolayout sale flash
		




// end woolayout_show_product_sale_flash_shortcode
}
?>