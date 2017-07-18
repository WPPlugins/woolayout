<?php
/**
 * Single Product title
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}







add_shortcode( 'woolayout_title', 'woolayout_product_tittle_shortcode' );

function woolayout_product_tittle_shortcode ( $atts ) {

$woolayout_atts = shortcode_atts( array(
		"shortcode" => "woolayout_title",
		"icon" => "dashicons dashicons-editor-textcolor",
		"element" => "Title",
		"id" => "",
		"class" => "",
			"font-family" => "inherit",
			"font-size" => "35px",
			"font-weight" => "bold",
			"font-style" => "inherit",
			"text-align" => "inherit",
			"text-transform" => "inherit",
			"color" => "inherit"
	), $atts );
	
	
?>
	
	<h1 id="<?php echo $woolayout_atts['id']; ?>"  itemprop="name" class="product_title entry-title <?php echo $woolayout_atts['class']; ?>" style=" <?php echo "font-family:".$woolayout_atts['font-family']."; font-size:".$woolayout_atts['font-size']."; font-weight:".$woolayout_atts['font-weight']."; font-style:".$woolayout_atts['font-style']."; text-align:".$woolayout_atts['text-align']."; text-transform:".$woolayout_atts['text-transform']."; color:".$woolayout_atts['color']."; "; ?> ">
		<?php the_title(); ?> 
	</h1> 
	
	
	 
<?php  


}
?>