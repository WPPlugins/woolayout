// Start save single product page

jQuery(document).ready(function($){
	
	$(".woolayout-product-page-layout #woolayout-button").on("click", function() {
	
	 
		
		$(document).ajaxComplete(function(){
		
			$( "#submit" ).trigger( "click" );
		});
		
		// start default elements list 
		var woo_elements_sort = $(".woolayout-default-woo-elements").sortable( "toArray" );
		var woo_elements_id = $(".woolayout-default-woo-elements").attr('id');
		
		var  woo_elements = {
				'action' : 'update_woolayout_woo_elements',
				'woo_elements_sort' : woo_elements_sort,
				'woo_elements_id' : woo_elements_id
			}
			
			
			
		 
		// since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
			jQuery.post(ajaxurl,  woo_elements, function(response) {
			
					 //  alert('The server responded: ' + response);
			});
		// end  default elements list 	
		
		
			
	
			
		// start  single product  	
		
		var section_sort = $(".woolayout-content-container").sortable( "toArray" );
		var section_id = $(".woolayout-content-container").attr('id');
		
		
		
		var section_data = {
				'action' : 'update_woolayout_product_page_sections',
				'section_sort' : section_sort,
				'section_id' : section_id
			}
			
			
			
		// since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
			jQuery.post(ajaxurl, section_data, function(response) {
					// alert('The server responded: ' + response);
			});
			
			
			
					jQuery.each( section_sort, function( i, column ) {
					
						var column_sort = $('#' + column).sortable('toArray');	
						var column_id = $('#' + column).attr("id");
						
					
										
						var column_data = {
							'action' : 'update_woolayout_product_page_columns',
							'column_sort' : column_sort,
							'column_id' : column_id
						}
						
						
										// since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
											jQuery.post(ajaxurl, column_data, function(response) {
												// alert('The server responded: ' + response);
											});
											
											
											jQuery.each( column_sort, function( i, element ) {
														
															var element_sort = $('#' + element).sortable('toArray');	
															var element_id = $('#' + element).attr("id");
															
															var element_data = {
																'action' : 'update_woolayout_product_page_elements',
																'element_sort' : element_sort,
																'element_id' : element_id
															}
															
																// since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
																jQuery.post(ajaxurl, element_data, function(response) {
																	// alert('The server responded: ' + response);
																});
														
														
													});
					
					
					
					});
					// end  single product  

			
	
	});
			
			
});
			
		// end save single product
		
		
		// start save  shop page
		
jQuery(document).ready(function($){
	
		$(".woolayout-shop-page-layout #woolayout-button").on("click", function() {
		
			$(document).ajaxComplete(function(){
		
				$( "#submit" ).trigger( "click" );
			});
			
		
		// start shop  default woo elements list 
		var woo_elements_sort = $(".woolayout_shop_woo_elements_lists").sortable( "toArray" );
		var woo_elements_id = $(".woolayout_shop_woo_elements_lists").attr('id');
		
		var  woo_elements = {
				'action' : 'update_woolayout_shop_woo_elements',
				'woo_elements_sort' : woo_elements_sort,
				'woo_elements_id' : woo_elements_id
			}
			
		
		// since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
			jQuery.post(ajaxurl,  woo_elements, function(response) {
			
					 //  alert('The server responded: ' + response);
			});
		// end  shop  default woo elements list 
		
			
	
		// start  shop page  	
		
					var shop_section_sort = $(".woolayout-shop-page-sections").sortable( "toArray" );
					var shop_section_id = $(".woolayout-shop-page-sections").attr('id');
					
					
					
					var shop_section_data = {
							'action' : 'update_woolayout_shop_section',
							'shop_section_sort' : shop_section_sort,
							'shop_section_id' : shop_section_id
						}
						
						
						
					// since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
						jQuery.post(ajaxurl, shop_section_data, function(response) {
								// alert('The server responded: ' + response);
						});
						
						
						
								jQuery.each( shop_section_sort, function( i, column ) {
								
									var shop_column_sort = $('#' + column).sortable('toArray');	
									var shop_column_id = $('#' + column).attr("id");
									
								
													
									var shop_column_data = {
										'action' : 'update_woolayout_shop_column',
										'shop_column_sort' : shop_column_sort,
										'shop_column_id' : shop_column_id
									}
									
									
													// since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
														jQuery.post(ajaxurl, shop_column_data, function(response) {
															 // alert('The server responded: ' + response);
														});
														
														
														jQuery.each( shop_column_sort, function( i, element ) {
																	
																		var shop_element_sort = $('#' + element).sortable('toArray');	
																		var shop_element_id = $('#' + element).attr("id");
																		
																		var shop_element_data = {
																			'action' : 'update_woolayout_shop_elements',
																			'shop_element_sort' : shop_element_sort,
																			'shop_element_id' : shop_element_id
																		}
																		
																			// since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
																			jQuery.post(ajaxurl, shop_element_data, function(response) {
																				// alert('The server responded: ' + response);
																			});
																	
																	
																});
								
								
								
								});
					// end  shop page  
					
		});
				
				
	});
	// end save  shop page
	
	
		
		


// start upload image 
jQuery(document).ready(function($){

	// start upload image 
		 $('.woolayout_upload_button').click(function() {
		 
			var field_id = $( this ).attr("name");
			
			
		 	
				var image = wp.media({ 
					title: 'Upload Image',
					// mutiple: true if you want to upload multiple files at once
					multiple: false
				}).open()
				.on('select', function(e){
				
					// This will return the selected image from the Media Uploader, the result is an object
					var uploaded_image = image.state().get('selection').first();
					// We convert uploaded_image to a JSON object to make accessing it easier
					// Output to the console uploaded_image
					console.log(uploaded_image);
					var item_background_image = uploaded_image.toJSON().url;
					// Let's assign the url value to the input field
					$('#' + field_id).val(item_background_image);
				});
			});	
	
	// end upload image
	
	});
	
	// end upload image


jQuery(document).ready(function($) {

	
	 
	 // default variable
    var sections = $( ".woolayout-content-container" ),
		columns = $( ".woolayout-sections" ),
		elements = $( ".woolayout-columns" ),
		trash = $( "#trash" );

   woolayout_default_functions();
   
	
	function woolayout_default_functions () {
		 // default tabs
		$( ".woolayout-tabs" ).tabs();
		
		// color picker
    $('.woolayout-background-color').wpColorPicker();
	 $('.woolayout-font-color').wpColorPicker();
	 $('.woolayout-border-color').wpColorPicker();
	 
	 woolayout_decrease_width();
	 woolayout_increase_width();
	}
	
	
	//  sortable sections
	$( ".woolayout-content-container" ).sortable({
		helper: "clone",
		dropOnEmpty: true,
		handle: ".woolayout-handle",
		placeholder: "woolayout-drop-highlight",
		opacity: 0.6,
		cursor: 'move',
		tolerance: 'pointer',
		revert: true,	
		connectWith: ".woolayout-content-container",
		items: "> .woolayout-sections"
    }).disableSelection();
	
	//  sortable columns
	$( ".woolayout-sections" ).sortable({
		helper: "clone",
		dropOnEmpty: true,
		handle: ".woolayout-handle",
		placeholder: "woolayout-drop-highlight",
		opacity: 0.6,
		cursor: 'move',
		tolerance: 'pointer',
		revert: true,	
		connectWith: ".woolayout-sections",
		items: "> .woolayout-columns",
		start: function(e, ui){
			ui.placeholder.width(ui.item.width());
		}
	}).disableSelection();
	
	//  sortable elements
	$( ".woolayout-columns" ).sortable({
		helper: "clone",
		dropOnEmpty: true,
		handle: ".woolayout-handle",
		placeholder: "woolayout-drop-highlight",
		opacity: 0.6,
		cursor: 'move',
		tolerance: 'pointer',
		revert: true,	
		connectWith: ".woolayout-columns",
		items: "> .woolayout-elements"
	}).disableSelection();
	
	//  sortable default woocommerce elements
	$( ".woolayout-default-woo-elements" ).sortable({
		helper: "clone",
		dropOnEmpty: true,
		placeholder: "woolayout-drop-highlight",
		opacity: 0.6,
		cursor: 'move',
		tolerance: 'pointer',
		revert: true,	
		connectWith: ".woolayout-columns",
		items: "> .woolayout-elements"
	}).disableSelection();
	// end sortable default
	
	
	
	// start list of function
	
	// start delete fucntion
		function delete_elements_item( item ) {
			$( ".woolayout-delete" ).click(function() {
				var delete_elements = $(this).attr("name");
				$( "#" + delete_elements ).remove();
			});
			
		}
		
	// end delete fucntion
	
	// start edit fucntion
		function edit_elements_item( item ) {
		
							
			$( ".woolayout-edit" ).on('click', function(event) {
				
					var edit_elements = $(this).attr("name");
				
					$( "#" + edit_elements + "-dialog" ).dialog({
						appendTo: "#woolayout-dialog-open",
					  autoOpen: false,
					  modal: true,
					  show: {
						effect: "blind",
						duration: 1000
					  },
					  hide: {
						effect: "explode",
						duration: 1000
					  },
					  buttons: [
						{
						  text: "Close",
						  icons: {
							primary: "ui-icon-close"
						  },
						  click: function() {
							$( this ).dialog( "close" );
						  }
					 
						  // Uncommenting the following line would hide the text,
						  // resulting in the label being used as a tooltip
						  //showText: false
						}
					  ]
					});
				
			  $( "#" + edit_elements  + "-dialog").dialog( "open" );
			});
			
		}
		// end edit fucntion
		
		
		// start default dialog function
		
		function add_dialog_on_drag( item ) {
		
				$( ".woolayout-content-wrap .woolayout-dialog" ).dialog({
								appendTo: "#woolayout-dialog-open",
								autoOpen: false,
								modal: true,
								show: {
									effect: "blind",
									duration: 1000
								},
									 hide: {
									effect: "explode",
									duration: 1000
								},
								buttons: [
								{
								  text: "Close",
								  icons: {
									primary: "ui-icon-close"
								  },
								  click: function() {
									$( this ).dialog( "close" );
								  }
							 
								  // Uncommenting the following line would hide the text,
								  // resulting in the label being used as a tooltip
								  //showText: false
								}
							  ]
							});
							
				}
		// end default dialog function

		// start creating id 
		function create_handel_elements_item( event, ui ) {
		
		   var item_id = ui.helper.attr("id");
		   
		   $("#" + item_id + " .woolayout-delete").attr('id', item_id + "-delete").attr('name', item_id);
			$("#" + item_id + " .woolayout-edit").attr('id', item_id + "-edit").attr('name', item_id);
			$("#" + item_id + " .woolayout-dialog").attr('id', item_id + "-dialog").attr('title', item_id );
			$("#" + item_id + " .woolayout-decrease-width").attr('name', item_id );
			$("#" + item_id + " .woolayout-increase-width").attr('name', item_id );
			
			// adding unique id in each item fields
			$("#" + item_id + " .woolayout-shortcode").attr('name', item_id + "-settings[shortcode]");
			$("#" + item_id + " .woolayout-element").attr('name', item_id + "-settings[element]");
			$("#" + item_id + " .woolayout-icon").attr('name', item_id + "-settings[icon]");
			$("#" + item_id + " .woolayout-column-width").attr('id', item_id + "-column-width").attr('name', item_id + "-settings-free[column-width]").attr('value', 'w100');
			
			$("#" + item_id + " .woolayout-background-image").attr('id', item_id + "-background-image").attr('name', item_id + "-settings[background-image]").attr('value', 'none');
			$("#" + item_id + " .woolayout-background-image-button").attr('name', item_id + "-background-image");
			$("#" + item_id + " .woolayout-background-color-drag").attr('name', item_id + "-settings[background-color]").attr('value', '').attr('class', 'woolayout-background-color');
			$("#" + item_id + " .woolayout-font-color-drag").attr('name', item_id + "-settings[font-color]").attr('value', '').attr('class', 'woolayout-font-color');
			$("#" + item_id + " .woolayout-border-color-drag").attr('name', item_id + "-settings[border-color]").attr('value', '').attr('class', 'woolayout-border-color');
			$("#" + item_id + " .woolayout-sale-color-drag").attr('name', item_id + "-settings[sale-color]").attr('value', '').attr('class', 'woolayout-sale-color');
			
			$("#" + item_id + " .woolayout-background-repeat").attr('name', item_id + "-settings[background-repeat]").attr('value', 'no-repeat');
			$("#" + item_id + " .woolayout-background-attachment").attr('name', item_id + "-settings[background-attachment]").attr('value', 'inherit');
			$("#" + item_id + " .woolayout-background-position").attr('name', item_id + "-settings[background-position]").attr('value', 'inherit');
			
			$("#" + item_id + " .woolayout-border-width").attr('name', item_id + "-settings[border-width]").attr('value', 'inherit');
			$("#" + item_id + " .woolayout-border-style").attr('name', item_id + "-settings[border-style]").attr('value', 'none');
			$("#" + item_id + " .woolayout-border-color").attr('name', item_id + "-settings[border-color]").attr('value', 'transparent');
			$("#" + item_id + " .woolayout-border-radius").attr('name', item_id + "-settings[border-radius]").attr('value', '');
			
			$("#" + item_id + " .woolayout-padding").attr('name', item_id + "-settings[padding]").attr('value', '0');
			$("#" + item_id + " .woolayout-margin").attr('name', item_id + "-settings[margin]").attr('value', '0');
			
			$("#" + item_id + " .woolayout-image-size").attr('name', item_id + "-settings[image_size]").attr('value', 'shop_catalog');
			$("#" + item_id + " .woolayout-image-hover").attr('name', item_id + "-settings[image_hover]").attr('value', 'hover_1');
			$("#" + item_id + " .woolayout-sale-style-1").attr('name', item_id + "-settings[image_sale_style]").attr('value', 'sale_style_1');
			$("#" + item_id + " .woolayout-sale-style-2").attr('name', item_id + "-settings[image_sale_style]").attr('value', 'sale_style_2');
			$("#" + item_id + " .woolayout-sale-style-3").attr('name', item_id + "-settings[image_sale_style]").attr('value', 'sale_style_3');
			$("#" + item_id + " .woolayout-sale-style-4").attr('name', item_id + "-settings[image_sale_style]").attr('value', 'sale_style_4');
			
			
			woolayout_default_functions();
		
	}
	// end  creating id 
	
	// start activate color picker 
	function activate_upload_and_colorpicker() {
	
				// start upload image 
					 $('.woolayout_upload_button').click(function() {
					 
						var field_id = $( this ).attr("name");
						
						
						
							var image = wp.media({ 
								title: 'Upload Image',
								// mutiple: true if you want to upload multiple files at once
								multiple: false
							}).open()
							.on('select', function(e){
							
								// This will return the selected image from the Media Uploader, the result is an object
								var uploaded_image = image.state().get('selection').first();
								// We convert uploaded_image to a JSON object to make accessing it easier
								// Output to the console uploaded_image
								console.log(uploaded_image);
								var item_background_image = uploaded_image.toJSON().url;
								// Let's assign the url value to the input field
								$('#' + field_id).val(item_background_image);
							});
						});	
						
				
						
				
				
				
	// end  activate color picker 
				
	
	
	
				
				
					
				
	
	}
	
	
	// end list of function
	
	
	// start draggable 
	
	$( ".woolayout-add-sections" ).draggable({
		  connectToSortable: ".woolayout-content-container",
			addClasses: false,
			helper: "clone",
			  revert: "invalid",
		   stop: function( event, ui ) {
					
					var uniqueId = new Date().getTime();
					ui.helper.attr('id', 'woolayout-product-section-' + uniqueId).removeAttr('style').removeClass().addClass("woolayout-sections");
				
					delete_elements_item();
					edit_elements_item();
					sortableRefresh_sections_item( event, ui);
					create_handel_elements_item( event, ui);
					add_dialog_on_drag();
					activate_upload_and_colorpicker();
							
		
					
		   }
    });
	
	$( ".woolayout-add-columns" ).draggable({
			 connectToSortable: ".woolayout-sections",
		  addClasses: false,
			  helper: "clone",
			  revert: "true",
		   stop: function( event, ui ) {
		   
				var uniqueId = new Date().getTime();
					ui.helper.attr('id', 'woolayout-product-column-' + uniqueId).removeAttr('style').removeClass().addClass("woolayout-columns w100");
					
					delete_elements_item();
					edit_elements_item();
					sortableRefresh_columns_item( event, ui);
					create_handel_elements_item( event, ui);
						add_dialog_on_drag();
						activate_upload_and_colorpicker();
						
			
		   }
	});
	
	
	$( ".woolayout-add-elements" ).draggable({
	  connectToSortable: ".woolayout-columns",
	   addClasses: false,
			  helper: "clone",
			  revert: "invalid",
		   stop: function( event, ui ) {
		   
				var uniqueId = new Date().getTime();
					ui.helper.attr('id', 'woolayout-product-element-' + uniqueId).removeAttr('style').removeClass().addClass("woolayout-elements");
					
					delete_elements_item();
					edit_elements_item();
					sortableRefresh_elements_item( event, ui);
					create_handel_elements_item( event, ui);
						add_dialog_on_drag();
					activate_upload_and_colorpicker();						
		   }
    });
	
	
	
	// end draggble
	
	
	
	
	// section  refresh
	function sortableRefresh_sections_item( event, ui ) {
		
		 var item_id = ui.helper.attr("id");
		  
					
						//  sortable section
						$( ".woolayout-sections" ).sortable({
							helper: "clone",
							dropOnEmpty: true,
							handle: ".woolayout-handle",
							placeholder: "woolayout-drop-highlight",
							opacity: 0.6,
							cursor: 'move',
							tolerance: 'pointer',
							revert: true,		
							connectWith: ".woolayout-sections",
							items: "> .woolayout-columns"
						}).disableSelection();
						$( ".woolayout-sections" ).sortable("refresh");
						
						
	}
	//  column refresh
	function sortableRefresh_columns_item( event, ui ) {
		
		 var item_id = ui.helper.attr("id");
		  
					//  sortable column
						$( ".woolayout-columns" ).sortable({
							helper: "clone",
							dropOnEmpty: true,
							handle: ".woolayout-handle",
							placeholder: "woolayout-drop-highlight",
							opacity: 0.6,
							cursor: 'move',
							tolerance: 'pointer',
							revert: true,	
							connectWith: ".woolayout-columns",
							handle: ".woolayout-handle",
							items: "> .woolayout-elements",
							start: function(e, ui){
								ui.placeholder.width(ui.item.width());
							}
						}).disableSelection();
						$( ".woolayout-columns" ).sortable("refresh");
						// end sortable default
						
						
					
	}
	//  elements refresh
	function sortableRefresh_elements_item( event, ui ) {
		
		 var item_id = ui.helper.attr("id");
		  
						//  sortable elements
						$( ".woolayout-elements" ).sortable({
							helper: "clone",
							dropOnEmpty: true,
							handle: ".woolayout-handle",
							placeholder: "woolayout-drop-highlight",
							opacity: 0.6,
							cursor: 'move',
							tolerance: 'pointer',
							revert: true,	
							connectWith: ".woolayout-elements",
							handle: ".woolayout-handle",
							items: "> .woolayout-elements"
						}).disableSelection();
						$( ".woolayout-elements" ).sortable("refresh");
						// end sortable default
			
	}
	
	
	
	// end sortable refresh
	
	
	
	
	 
		// start dialg delete
			$( ".woolayout-delete" ).click(function() {
				var delete_elements = $(this).attr("name");
				
				$( "#" + delete_elements + " .woolayout-elements" ).appendTo( ".woolayout-default-woo-elements" );
				$( "#" + delete_elements ).remove();
			});
			
			$( ".woolayout-back" ).click(function() {
				var back_elements = $(this).attr("name");
				$( "#" + back_elements ).appendTo( ".woolayout-default-woo-elements" );
			});
			
			
		// end dialg delete
		
		// start  click edit 
	
				$( ".woolayout-content-wrap .woolayout-dialog" ).dialog({
					appendTo: "#woolayout-dialog-open",
					autoOpen: false,
					modal: true,
					show: {
						effect: "blind",
						duration: 1000
					},
					hide: {
						effect: "explode",
						duration: 1000
					},
					buttons: [
					{
					  text: "Close",
					  icons: {
						primary: "ui-icon-close"
					  },
					  click: function() {
						$( this ).dialog( "close" );
					  }
				 
					  // Uncommenting the following line would hide the text,
					  // resulting in the label being used as a tooltip
					  //showText: false
					}
				  ]
				});
				
				$( ".woolayout-edit" ).on('click', function(event) {
			
					var edit_elements = $(this).attr("name");
				
					$( "#" + edit_elements + "-dialog" ).dialog({
						appendTo: "#woolayout-dialog-open",
					  autoOpen: false,
					  modal: true,
					  show: {
						effect: "blind",
						duration: 1000
					  },
					  hide: {
						effect: "explode",
						duration: 1000
					  },
					  buttons: [
						{
						  text: "Close",
						  icons: {
							primary: "ui-icon-close"
						  },
						  click: function() {
							$( this ).dialog( "close" );
						  }
					 
						  // Uncommenting the following line would hide the text,
						  // resulting in the label being used as a tooltip
						  //showText: false
						}
					  ]
					});
				
			  $( "#" + edit_elements  + "-dialog").dialog( "open" );
			});
			
			
		// end   click edit 
		
		
		
		
		// start on click increase width column 
		function woolayout_increase_width() {
		
		$('.woolayout-increase-width').click(function () {
			
			var column_id = $(this).attr("name");
			
			
			if ($('#' + column_id).hasClass('w25')){
				$('#' + column_id).removeClass('w25');
				$('#' + column_id).addClass('w33');
				$('#' + column_id + "-column-width").attr("value", "w33");
			} 
			else if ($('#' + column_id).hasClass('w33')){
				$('#' + column_id).removeClass('w33');
				$('#' + column_id).addClass('w50');
				$('#' + column_id + "-column-width").attr("value", "w50");
			} 
			else if ($('#' + column_id).hasClass('w50')){
				$('#' + column_id).removeClass('w50');
				$('#' + column_id).addClass('w66');
				$('#' + column_id + "-column-width").attr("value", "w66");
			} 
			else if ($('#' + column_id).hasClass('w66')){
				$('#' + column_id).removeClass('w66');
				$('#' + column_id).addClass('w75');
				$('#' + column_id + "-column-width").attr("value", "w75");
			} 
			else if ($('#' + column_id).hasClass('w75')){
				$('#' + column_id).removeClass('w75');
				$('#' + column_id).addClass('w100');
				$('#' + column_id + "-column-width").attr("value", "w100");
			} 
			else {
				$('#' + column_id).addClass('w100');
				$('#' + column_id + "-column-width").attr("value", "w100");
			  }
			
		});
		
		
		}
		
		// end on click increase width column 
		
		
		
		// start on click increase width column 
		function woolayout_decrease_width() {
		
		$('.woolayout-decrease-width').click(function () {
			
			var column_id = $(this).attr("name");
			
			
			if ($('#' + column_id).hasClass('w100')){
				$('#' + column_id).removeClass('w100');
				$('#' + column_id).addClass('w75');
				$('#' + column_id + "-column-width").attr("value", "w75");
			} 
			else if ($('#' + column_id).hasClass('w75')){
				$('#' + column_id).removeClass('w75');
				$('#' + column_id).addClass('w66');
				$('#' + column_id + "-column-width").attr("value", "w66");
			} 
			else if ($('#' + column_id).hasClass('w66')){
				$('#' + column_id).removeClass('w66');
				$('#' + column_id).addClass('w50');
				$('#' + column_id + "-column-width").attr("value", "w50");
			} 
			else if ($('#' + column_id).hasClass('w50')){
				$('#' + column_id).removeClass('w50');
				$('#' + column_id).addClass('w33');
				$('#' + column_id + "-column-width").attr("value", "w33");
			} 
			else if ($('#' + column_id).hasClass('w33')){
				$('#' + column_id).removeClass('w33');
				$('#' + column_id).addClass('w25');
				$('#' + column_id + "-column-width").attr("value", "w25");
			} 
			else {
				$('#' + column_id).addClass('w25');
				$('#' + column_id + "-column-width").attr("value", "w25");
			  }
			
		});
		
		}
		
		// end on click increase width column 
			
		
		
		
	
  
  });
 