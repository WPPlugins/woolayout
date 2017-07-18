<?php
/**
 * Single Product Share
 *
 * Sharing plugins can hook into here or you can add your own code directly.
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

add_shortcode( 'woolayout_sharing', 'woolayout_template_single_sharing_shortcode' );

function woolayout_template_single_sharing_shortcode ( $atts ) {

?>



<?php do_action( 'woocommerce_share' ); // Sharing plugins can hook into here ?>


<?php
// woolayout_template_single_sharing_shortcode
}
?>