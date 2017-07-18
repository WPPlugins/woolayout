<?php


add_shortcode( 'woolayout_feat_image', 'woolayout_feat_image_shortcode' );

function woolayout_feat_image_shortcode ( $atts ) {


	$woolayout_atts = shortcode_atts( array(
		"shortcode" => "woolayout_feat_image",
		"icon" => "dashicons dashicons-format-image",
		"element" => "Feat Image",
		"image_size" => "shop_catalog",
		'image_hover' => 'hover_1',
		"image_sale_style" => "sale_style_1",
		"id" => "",
		"class" => ""
	), $atts );
	
	
	
	global $post, $woocommerce, $product;
	 
	
	
	

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

						if ( $woolayout_atts['image_sale_style'] == "sale_style_1" ) {
							echo apply_filters( 'woocommerce_sale_flash', '<span class="onsale sale_style_1">' . __( 'Sale!', 'woocommerce' ) . '</span>', $post, $product );
							
						}  
						elseif ( $woolayout_atts['image_sale_style'] == "sale_style_2" ) {
							?>
							<div class="sale-style-2"> <span class="sale-text"> Sale! </span> <span class="sale-percent"> <?php echo $save_percent; ?>% OFF </span> </div>
							<?php
						}
						elseif ( $woolayout_atts['image_sale_style'] == "sale_style_3" ) {
							?>
							<div class="sale-style-3-wrap">
							<div class="sale-style-3"> <span class="sale-text"> SAVE </span> <span class="sale-price"> <?php echo get_woocommerce_currency_symbol().''.$save_price; ?> </span> </div>
							</div>
							<?php
						}
						elseif ( $woolayout_atts['image_sale_style'] == "sale_style_4" ) {
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
						elseif ( $woolayout_atts['image_sale_style'] == "sale_style_5" ) {
							?>
							<div class="sale-style-5"> <span class="sale-text"> Sale! </span> </div>
							
							<?php
						}
						else {
							echo apply_filters( 'woocommerce_sale_flash', '<span class="onsale sale_style_1">' . __( 'Sale!', 'woocommerce' ) . '</span>', $post, $product );
							
						}

		}


		// end  woolayout sale flash
		

	 
	
	
	
	
	 
	 
	
	if ( has_post_thumbnail() ) {
	
	$attachment_ids = $product->get_gallery_attachment_ids();
	$attachment_count = count( $product->get_gallery_attachment_ids() );
	 $url = get_permalink($product_id);
	
		if ($woolayout_atts['image_hover'] == 'hover_1') {
		
			the_post_thumbnail( $woolayout_atts['image_size'] ); 
			
		}
		elseif ($woolayout_atts['image_hover'] == 'hover_2') {
			
			?>
			
			<div class="woolayout-feat-image-wrap hover-2">
				<a href="<?php echo $url; ?>">
					<?php the_post_thumbnail( $woolayout_atts['image_size'] ); ?>
				</a>
			</div>
				
			<?php
			
		}
		elseif ($woolayout_atts['image_hover'] == 'hover_3') {
			
			?>
			
			
			
			<div class="woolayout-feat-image-wrap hover-3">
			
				<?php
				foreach(  $attachment_ids as $count_attachment =>  $attachment_id ) {
				
					if ( $attachment_count >= 2 ) {
						if ($count_attachment == 0) {
							?>
							
								<div class="front-feat-img">
									<a href="<?php echo $url; ?>">
										<?php echo wp_get_attachment_image($attachment_id, $woolayout_atts['image_size']); ?>
									</a>
								</div>
							<?php
						}
						elseif ($count_attachment == 1) {
						?>
								<div class="back-feat-img">
									<a href="<?php echo $url; ?>">
										<?php echo wp_get_attachment_image($attachment_id, $woolayout_atts['image_size']); ?>
									</a>
								</div>
						<?php
						}
						else {
						}
					
					}
					else {
						echo "<a class='".$url."' >".the_post_thumbnail( $woolayout_atts['image_size'] )."</a>";
					}					
				}
				
				?>
				
				</div>
				
			<?php
		
		}
		else {
		
		}
	
	
	
	 
	
	}
	else {
		echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<img src="%s" alt="%s" />', wc_placeholder_img_src(), __( 'Placeholder', 'woocommerce' ) ), $post->ID );

	
	}
	
}



?>