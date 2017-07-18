<?php
// [bartag foo="foo-value"]
function bartag_func( $atts ) {
    $a = shortcode_atts( array(
        'foo' => 'something',
        'bar' => 'something else',
    ), $atts );

    return "foo = {$a['foo']}";
}
add_shortcode( 'bartag', 'bartag_func' );

add_shortcode( 'sections', 'woolayout_sections_shortcode' );

function woolayout_sections_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
				"class" => "",
				"background-color" => "transparent",
				"background-image" => "none",
				"background-repeat" => "no-repeat",
				"background-attachment" => "inherit",
				"background-position" => "inherit",
				"border" => "none",
				"padding" => "0",
				"margin" => "0",
	), $atts );
	
	echo '<div class="woolayout-sections '.$a["class"].'">'.$content.'</div>';
	
}

add_shortcode( 'caption', 'caption_shortcode' );

function caption_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'class' => 'caption',
	), $atts );

	return '<span class="' . esc_attr($a['class']) . '">' . $content . '</span>';
}


?>