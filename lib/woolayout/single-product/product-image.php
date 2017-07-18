<?php
/**
 * Single Product Image
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.14
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


add_shortcode( 'woolayout_gallery', 'woolayout_gallery_shortcode' );

function woolayout_gallery_shortcode ( $atts ) {
	
	$woolayout_atts = shortcode_atts( array(
		"id" => "",
		"class" => "",
		'gallery_style' => 'gallery_style_1',
		'sale_text' => 'Sale!',
		'sale_style' => 'sale_style_1',
	), $atts );
	
global $post, $woocommerce, $product;


$url = get_permalink( $product->ID );



?>
<div id="<?php echo $woolayout_atts['id']; ?>" class="woolayout_gallery <?php echo $woolayout_atts['class']; ?>">

<?php 






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
							echo apply_filters( 'woocommerce_sale_flash', '<span class="onsale sale_style_1">' . __( 'Sale!', 'woocommerce' ) . '</span>', $post, $product );
							
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
						elseif ( $woolayout_atts['sale_style'] == "sale_style_5" ) {
							?>
							<div class="sale-style-5"> <span class="sale-text"> Sale! </span> </div>
							
							<?php
						}
						else {
							
						}

		}


		// end  woolayout sale flash
		

	 
		
		

if ( $woolayout_atts['gallery_style'] == "gallery_style_1" ) {

?>

<div id="<?php echo $woolayout_atts['id']; ?>" class="images <?php echo $woolayout_atts['class']; ?>">

	<?php
		if ( has_post_thumbnail() ) {

			$image_title = esc_attr( get_the_title( get_post_thumbnail_id() ) );
			$image_link  = wp_get_attachment_url( get_post_thumbnail_id() );
			$image       = get_the_post_thumbnail( $post->ID, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ), array(
				'title' => $image_title
				) );

			$attachment_count = count( $product->get_gallery_attachment_ids() );

			if ( $attachment_count > 0 ) {
				$gallery = '[product-gallery]';
			} else {
				$gallery = '';
			}

			echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<a href="%s" itemprop="image" class="woocommerce-main-image zoom" title="%s" data-rel="prettyPhoto' . $gallery . '">%s</a>', $image_link, $image_title, $image ), $post->ID );

		} else {

			echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<img src="%s" alt="%s" />', wc_placeholder_img_src(), __( 'Placeholder', 'woocommerce' ) ), $post->ID );

		}
	?>

	<?php do_action( 'woocommerce_product_thumbnails' ); ?>

</div>

<?php



}

elseif ( $woolayout_atts['gallery_style'] == "gallery_style_2" ) {
?>

<div class="woolayout-lightSlider-wrap">

<?php
  global $product, $post;
 $attachment_ids = $product->get_gallery_attachment_ids();
 
?>

<div class="woolayout-lightSlider-wrap-container">
    <ul class="woolayout-gallery-lightSlider">
	
	
<?php 
foreach( $attachment_ids as $attachment_id ) {
?>
 <li data-thumb="<?php echo  wp_get_attachment_url( $attachment_id ); ?>">



<?php echo  wp_get_attachment_image($attachment_id, 'full'); ?>


        </li>
<?php
}
?> 
    </ul>
</div>



<div id="my-content-id" style="display:none;">
    
     <div id="TB_closeWindowButton">    <?php echo  wp_get_attachment_image($attachment_id, 'full'); ?> </div>


</div>


</div>

<?php
}
else {
}
?>
</div>
<?php

// end woolayout_show_product_images_shortcode
} 

?>