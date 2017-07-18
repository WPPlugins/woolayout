<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>




<?php 
$shop_loop_order = get_option('woolayout-shop-loop');

	$loop_column = 'woolayout-shop-column-'.$shop_loop_order['column'];


?>

<li <?php post_class($loop_column); ?> >




<?php

	$woolayout_product_page_section_list = get_option("woolayout-shop-page-sections");

	foreach ( (array) $woolayout_product_page_section_list as $count_section => $sections) {
		$section_settings = get_option($sections.'-settings');
		$column_list = get_option($sections);
		
?>


					
				
				
				<div id="<?php echo $sections; ?>" class="woolayout-sections  <?php echo $section_settings["class"].' '. $section_settings["display_elements_on_hover"]; ?>" style="<?php 
				
					if ($section_settings['featured_background'] == 'enable') {
						$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
						echo "background-image:url('".$feat_image_url."');";
					}
					else{
						echo "background-image:url('".$section_settings["background-image"]."');";
					}
				echo "background-color: ".$section_settings["background-color"]."; 
					background-repeat:".$section_settings["background-repeat"].";
					background-attachment:".$section_settings["background-attachment"].";
					background-position:".$section_settings["background-position"].";
					background-size:".$section_settings["background-size"].";
					border-width:".$section_settings["border-width"].";
					border-style:".$section_settings["border-style"].";
					border-color:".$section_settings["border-color"].";
					border-radius:".$section_settings["border-radius"].";
					padding:".$section_settings["padding"].";
					margin:".$section_settings["margin"].";
					text-align:".$section_settings["elements_align"].";
					"; ?>">
			
							
								<?php
									foreach ( (array) $column_list as $count_column => $column) {
										$column_settings = get_option($column.'-settings');
										$column_settings_free = get_option($column.'-settings-free');
										$elements_list = get_option($column);
										
										
                
										?>
										
										
										
										<div id="<?php echo $column; ?>" class="woolayout-columns <?php echo $column_settings_free["column-width"];  ?>"  style="<?php

											
										echo "background-color: ".$column_settings["background-color"]."; 
												background-repeat:".$column_settings["background-repeat"].";
												background-attachment:".$column_settings["background-attachment"].";
												background-position:".$column_settings["background-position"].";
												background-size:".$column_settings["background-size"].";
												border-width:".$column_settings["border-width"].";
												border-style:".$column_settings["border-style"].";
												border-color:".$column_settings["border-color"].";
												border-radius:".$column_settings["border-radius"].";
												padding:".$column_settings["padding"].";
												margin:".$column_settings["margin"].";
												
					"; ?>">
											<?php 
												foreach ( (array) $elements_list as $count_elements => $elements) {
													
													
													
													
													?>
													
													
															<div id="<?php echo $elements; ?>" class="woolayout-elements">
															
															<?php
																


															?>
														
																
																<?php
																if ($elements == "" ) {
																	// do nothing 
																}
																else {
																
																if (!$elements_atts['button_type'] == 'default') {
																	 echo '<a href="' . get_the_permalink() . '" class="woocommerce-LoopProduct-link">';
																}
																
																$elements_atts = get_option($elements.'-settings');
																$elements_list_shortcode = $elements_atts["shortcode"];
																
																
																	echo do_shortcode("[$elements_list_shortcode 
																				id='$elements_atts[id]'
																				class='$elements_atts[class]'
																				
																				background-color = ".$elements_atts['background-color']."
																				background-image = ".$elements_atts['background-image']."
																				background-repeat = ".$elements_atts['background-repeat']."
																				background-attachment = ".$elements_atts['background-attachment']."
																				background-position = ".$elements_atts['background-position']."
																				border-width = ".$elements_atts['border-width']."
																				border-style = ".$elements_atts['border-style']."
																				border-color = ".$elements_atts['border-color']."
																				border-radius = ".$elements_atts['border-radius']."
																				padding='$elements_atts[padding]'
																				margin='$elements_atts[margin]'
																				
																				width='$elements_atts[width]'
																				
																				sale_text='$elements_atts[sale_text]' 
																				sale_style='$elements_atts[sale_style]'
																				gallery_style='$elements_atts[gallery_style]'
																				
																				font-family = ".$elements_atts['font-family']."
																				font-size = ".$elements_atts['font-size']."
																				font-style = ".$elements_atts['font-style']."
																				text-align = ".$elements_atts['text-align']."
																				text-transform = ".$elements_atts['text-transform']."
																				color = ".$elements_atts['color']."
																				
																				rating_text='$elements_atts[rating_text]'
																				rating_type='$elements_atts[rating_type]'
																				
																				button_type='$elements_atts[button_type]' 
																				button_text='$elements_atts[button_text]'
																				button_style='$elements_atts[button_style]'
																				direct_checkout='$elements_atts[direct_checkout]'
																				
																				sku_display='$elements_atts[sku_display]' 
																				sku_text='$elements_atts[sku_text]' 
																				categories_display='$elements_atts[categories_display]' 
																				categories_text='$elements_atts[categories_text]' 
																				tags_display='$elements_atts[tags_display]' 
																				tags_text='$elements_atts[tags_text]'

																				remove_description_tab='$elements_atts[remove_description_tab]'
																				remove_reviews_tab='$elements_atts[remove_reviews_tab]'
																				remove_information_tab='$elements_atts[remove_information_tab]'
																				
																				image_size='$elements_atts[image_size]'
																				image_hover='$elements_atts[image_hover]'
																				image_sale_style='$elements_atts[image_sale_style]'
																				
																				
																				
																				]");
																				
																	if (!$elements_atts['button_type'] == 'default') {
																	 echo "</a>";
																	}			
																	 			
																
																}
																?>
															
																									
																
															</div>
													
													<?php
												// end freach elements	
												}
											?>
											
										</div>
											
										<?php
										
										
									// end freach clumn	
									}
								?>
								
							
						
					
			
			</div>
			
			
		<?php 
		// end of foreach
		}
		
		
		
	
	
	// end of woolayout
		
		?>





	<?php
	/**
	 * woocommerce_before_shop_loop_item hook.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	// do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * woocommerce_before_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	// do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * woocommerce_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	// do_action( 'woocommerce_shop_loop_item_title' );

	/**
	 * woocommerce_after_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	//do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * woocommerce_after_shop_loop_item hook.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	// do_action( 'woocommerce_after_shop_loop_item' );
	?>
</li>