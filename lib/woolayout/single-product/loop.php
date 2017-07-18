<?php

// Change number or products per row to 3
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
	
	$shop_loop_order = get_option('woolayout-shop-loop');
	
	if ( is_shop() ) {
		return $shop_loop_order['column']; // 3 products per row
	}
	else {
		return 4;
	}
		
		
	}
}


?>