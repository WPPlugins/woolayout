<?php
/**
 * Single Product Rating
 *
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     2.3.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


add_shortcode( 'woolayout_rating', 'woolayout_template_single_rating_shortcode' );

function woolayout_template_single_rating_shortcode ( $atts ) {
	
	$woolayout_atts = shortcode_atts( array(
		"shortcode" => "woolayout_rating",
		"icon" => "dashicons dashicons-star-filled",
		"element" => "Rating",
		"rating_text" => "Customer Rating",
		"rating_type" => "default"
	), $atts );

global $product;




if ( get_option( 'woocommerce_template_single_rating_shortcode' ) === 'no' ) {
	return;
}

if ( $woolayout_atts['rating_type'] == "loop" ) {

?>

<?php if ( $rating_html = $product->get_rating_html() ) : ?>
	<?php echo $rating_html; ?>
<?php endif; ?>

<?php

}
elseif ( $woolayout_atts['rating_type'] == "default" ) {



		$rating_count = $product->get_rating_count();
		$review_count = $product->get_review_count();
		$average      = $product->get_average_rating();

		if ( $rating_count > 0 ) : ?>

			<div class="woocommerce-product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
				<div class="star-rating" title="<?php printf( __( 'Rated %s out of 5', 'woocommerce' ), $average ); ?>">
					<span style="width:<?php echo ( ( $average / 5 ) * 100 ); ?>%">
						<strong itemprop="ratingValue" class="rating"><?php echo esc_html( $average ); ?></strong> <?php printf( __( 'out of %s5%s', 'woocommerce' ), '<span itemprop="bestRating">', '</span>' ); ?>
						<?php printf( _n( 'based on %s customer rating', 'based on %s customer ratings', $rating_count, 'woocommerce' ), '<span itemprop="ratingCount" class="rating">' . $rating_count . '</span>' ); ?>
					</span>
				</div>
				<?php if ( comments_open() ) : ?><a href="#reviews" class="woocommerce-review-link" rel="nofollow">( <?php printf( _n( '%s '.$woolayout_atts['rating_text'], '%s '.$woolayout_atts['rating_text'].'s', $review_count, 'woocommerce' ), '<span itemprop="reviewCount" class="count">' . $review_count . '</span>' ); ?>)</a><?php endif ?>
			</div>

		<?php endif; ?>

<?php
}
else {

}


// end woolayout_single_product_rating_shortcode
}
?>