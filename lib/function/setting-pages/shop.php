<?php

function woolayout_shop_layout_settings() {

ob_start("ob_html_compress");
$true = true;


?>

<?php

// if this fails, check_admin_referer() will automatically print a "failed" page and die.

if ( isset($_POST['reset-shop-page'])  && check_admin_referer( 'woolayout_shop_nonce_action', 'woolayout_shop_nonce_field' ) ) {
	// process form data
	
	update_option('woolayout_shop_woo_elements_lists', reset_woolayout_shop_woo_elements_lists() );
 
 update_option('woolayout-shop-page-sections', reset_woolayout_shop_page_sections() );
 
  update_option('woolayout-shop-loop', array(
				"order" => "asc",
				"orderby" => "date",
				"column" => "4"
			) );
			
  //echo '<p style="color:Green"> Settings has been reset and default values loaded</p>'; 
 
}
?>




 
<div class="woolayout-settings-wrap woolayout-shop-page-layout">
	<div class="woolayout-settings-container">
	
<div class="woolayout-button-wrap"> 
	
	
			<form method="post" action="" class="woolayout-reset-form">
						 <p class="submit">
					 <input name="reset-shop-page" class="button-primary" type="submit" value="Reset to Woocommerce Default Layout" >
					 <input type="hidden" name="action" value="reset-shop-page" />
					<?php wp_nonce_field( 'woolayout_shop_nonce_action', 'woolayout_shop_nonce_field' ); ?>
					 </p>
					</form>
					
			
	<input  type="submit" id="woolayout-button" class="button button-primary" value="Save Changes">
	
</div>



<h1> WooCommerce Shop Page Layout </h1>

	
	<div class="woolayout-elements-list-wrap">
	<div class="woolayout-elements-list woolayout-tabs">
	

	
			<ul>
				<li> <a href="#woolayout-tab1"> General Elements </a> </li>
				<li> <a href="#woolayout-tab2"> Woocommerce Elements </a> </li>
				<li> <a href="#woolayout-tab3">  Template </a> </li>
			</ul>
			
			
			
			<div id="woolayout-tab1" class="woolayout-tab-content"> 
				<h2> General Elements </h2>
				
				<p> Drag and Drop Sections </p>
				
							
					<div class="woolayout-drag-items woolayout-add-sections">
							<div class="woolayout-helper"> <div class="woolayout-handle dashicons dashicons-move dashicons dashicons-move"> </div> <div name="<?php echo $sections; ?>" id="<?php echo $sections; ?>-edit" class="woolayout-edit dashicons dashicons-admin-tools">  </div> <div id="<?php echo $sections; ?>-delete" name="<?php echo $sections; ?>" class="woolayout-delete dashicons dashicons-trash">  </div> </div>
								<span>Sections</span>
								
								
						
							<!---- start sections settings field ---->
							<div class="woolayout-dialog" id="<?php echo $sections; ?>-dialog" title="<?php echo $sections_settings['element']; ?>">
							
							<h2> This Settings is available only in <a target="_blank" href="http://framepressstudio.com/product/woocommerce-layout-pro/"> Woolayout PRO </a>  </h2>
							
									<!---- unique sections settings field ---->
										<input class="woolayout-shortcode" type="hidden" name="<?php echo $sections; ?>-settings[shortcode]" value="<?php echo $sections_settings["shortcode"]; ?>">
										<input class="woolayout-element" type="hidden" name="<?php echo $sections; ?>-settings[element]" value="<?php echo $sections_settings["element"]; ?>">
										<input class="woolayout-icon" type="hidden" name="<?php echo $sections; ?>-settings[icon]" value="<?php echo $sections_settings["icon"]; ?>">
									<!---- unique sections settings field ---->					
								
								<div class="woolayout-tabs">								
										<ul>
											<li> <a href="#<?php echo $sections; ?>-tab1"> Default Settings </a> </li>
											<li> <a href="#<?php echo $sections; ?>-tab2"> WooCommerce Settings </a> </li>
											<li> <a href="#<?php echo $sections; ?>-tab3"> Advance Settings </a> </li>
										</ul>
										<div id="<?php echo $sections; ?>-tab1">
											
													
															<div class="woolayout-filed-wrap"> 
																<label> Background Image:  </label>
																<div class="woolayout-filed-container"> 
																	<input class="woolayout-background-image regular-text" type="text" name="<?php echo $sections; ?>-settings[background-image]" id="<?php echo $sections; ?>-background-image"  value="<?php echo $sections_settings["background-image"]; ?>">
																	<input class="woolayout-background-image-button button-secondary woolayout_upload_button" type="button" name="<?php echo $sections; ?>-background-image"  value="Upload Image">
																</div>
															</div>
															<div class="woolayout-filed-wrap"> 
																<label> Background Color: </label> 
																<div class="woolayout-filed-container"> 
																	<input class="woolayout-background-color-drag" type="text" name="<?php echo $sections; ?>-settings[background-color]" value="<?php echo $sections_settings["background-color"]; ?>"  data-default-color="<?php echo $sections_settings["background-color"]; ?>" /> 
																</div>
															</div>	
														
															<div class="woolayout-filed-wrap"> 
																<label> Background Repeat: </label> 
																<div class="woolayout-filed-container"> 
																			<select class="woolayout-background-repeat" name="<?php echo $sections; ?>-settings[background-repeat]"> 
																				<option  value="inherit" <?php selected( $sections_settings["background-repeat"], 'inherit' ); ?>> Inherit  </option>
																				<option  value="repeat" <?php selected( $sections_settings["background-repeat"], 'repeat' ); ?>> Repeat  </option>
																				<option  value="no-repeat" <?php selected( $sections_settings["background-repeat"], 'no-repeat' ); ?>> No Repeat  </option>
																				<option  value="repeat-x" <?php selected( $sections_settings["background-repeat"], 'repeat-x' ); ?>> Repeat X  </option>
																				<option  value="repeat-y" <?php selected( $sections_settings["background-repeat"], 'repeat-y' ); ?>> Repeat Y  </option>
																			</select>
																</div>
															</div>
															<div class="woolayout-filed-wrap"> 
																<label> Background Attachment: </label> 
																<div class="woolayout-filed-container"> 
																			<select class="woolayout-background-attachment" name="<?php echo $sections; ?>-settings[background-attachment]"> 
																				<option  value="inherit" <?php selected( $sections_settings["background-attachment"], 'inherit' ); ?>> Inherit  </option>
																				<option  value="fixed" <?php selected( $sections_settings["background-attachment"], 'fixed' ); ?>> Fixed  </option>
																				<option  value="scroll" <?php selected( $sections_settings["background-attachment"], 'scroll' ); ?>> Scroll  </option>
																			</select>
																</div>
															</div>
															<div class="woolayout-filed-wrap"> 
																<label> Background Position: </label> 
																<div class="woolayout-filed-container"> 
																			<select class="woolayout-background-position" name="<?php echo $sections; ?>-settings[background-position]"> 
																				<option  value="inherit" <?php selected( $sections_settings["background-position"], 'inherit' ); ?>> Inherit  </option>
																				<option  value="top" <?php selected( $sections_settings["background-position"], 'top' ); ?>> Top  </option>
																				<option  value="bottom" <?php selected( $sections_settings["background-position"], 'bottom' ); ?>> Bottom  </option>
																				<option  value="left" <?php selected( $sections_settings["background-position"], 'left' ); ?>> Left  </option>
																				<option  value="right" <?php selected( $sections_settings["background-position"], 'right' ); ?>> Right  </option>
																				<option  value="center" <?php selected( $sections_settings["background-position"], 'center' ); ?>> Center  </option>
																			</select>
																</div>
															</div>
															<div class="woolayout-filed-wrap"> 
																<label> Background Size: </label> 
																<div class="woolayout-filed-container"> 
																			<select class="woolayout-background-size" name="<?php echo $sections; ?>-settings[background-size]"> 
																				<option  value="inherit" <?php selected( $sections_settings["background-size"], 'inherit' ); ?>> Inherit  </option>
																				<option  value="cover" <?php selected( $sections_settings["background-size"], 'cover' ); ?>> Cover  </option>
																				<option  value="contain" <?php selected( $sections_settings["background-size"], 'contain' ); ?>> Contain  </option>
																				<option  value="auto" <?php selected( $sections_settings["background-size"], 'auto' ); ?>> Auto  </option>
																			</select>
																</div>
															</div>
															<div class="woolayout-filed-wrap"> 
																<label> Border Width:  </label>
																				<select class="woolayout-border-width" name="<?php echo $sections; ?>-settings[border-width]">
																					<option  value="inherit" <?php selected( $sections_settings["border-width"], "inherit" ); ?>> inherit  </option>
																					<option  value="thin" <?php selected( $sections_settings["border-width"], "thin" ); ?>> thin  </option>
																					<option  value="medium" <?php selected( $sections_settings["border-width"], "medium" ); ?>> medium  </option>
																					<option  value="thick" <?php selected( $sections_settings["border-width"], "thick" ); ?>> thick  </option>
																				</select>
															</div>
															<div class="woolayout-filed-wrap"> 
																<label> Border Style:  </label>
																				<select class="woolayout-border-style" name="<?php echo $sections; ?>-settings[border-style]">
																					<option  value="none" <?php selected( $sections_settings["border-style"], "none" ); ?>> None  </option>
																					<option  value="solid" <?php selected( $sections_settings["border-style"], "solid" ); ?>> Solid  </option>
																					<option  value="dashed" <?php selected( $sections_settings["border-style"], "dashed" ); ?>> Dashed  </option>
																					<option  value="dotted" <?php selected( $sections_settings["border-style"], "dotted" ); ?>> Dotted  </option>
																					<option  value="double" <?php selected( $sections_settings["border-style"], "double" ); ?>> Double  </option>
																					<option  value="groove" <?php selected( $sections_settings["border-style"], "groove" ); ?>> Groove  </option>
																					<option  value="outset" <?php selected( $sections_settings["border-style"], "outset" ); ?>> Outset  </option>
																					<option  value="ridge" <?php selected( $sections_settings["border-style"], "ridge" ); ?>> Ridge  </option>
																				</select>
															</div>
															<div class="woolayout-filed-wrap"> 
																<label> Border Color: </label> 
																<div class="woolayout-filed-container"> 
																	<input class="woolayout-border-color-drag" type="text" name="<?php echo $sections; ?>-settings[border-color]" value="<?php echo $sections_settings["border-color"]; ?>"  data-default-color="<?php echo $sections_settings["border-color"]; ?>" /> 
																</div>
															</div>	
															<div class="woolayout-filed-wrap"> 
																<label> Border Radius: </label> 
																	<div class="woolayout-filed-container"> 
																		<input class="woolayout-border-radius" type="text" name="<?php echo $sections; ?>-settings[border-radius]" value="<?php echo $sections_settings["border-radius"]; ?>">
																</div>
															</div>															
															
															<div class="woolayout-filed-wrap"> 
																<label> Padding: </label> 
																<div class="woolayout-filed-container"> 
																	<input class="woolayout-padding" type="text" name="<?php echo $sections; ?>-settings[padding]" value="<?php echo $sections_settings["padding"]; ?>">
																</div>
															</div>	
															
															<div class="woolayout-filed-wrap"> 
																<label> Margin: </label> 
																<div class="woolayout-filed-container"> 
																	<input class="woolayout-margin" type="text" name="<?php echo $sections; ?>-settings[margin]" value="<?php echo $sections_settings["margin"]; ?>">
																</div>
															</div>	
										</div>
											<div id="<?php echo $sections; ?>-tab2">
														<div class="woolayout-filed-wrap"> 
																<label> Used Featured Image As Background: </label> 
																<div class="woolayout-filed-container"> 
																	<input class="woolayout-feature-background" type="checkbox" name="<?php echo $sections; ?>-settings[featured_background]" value="enable" <?php if ( 'enable' == $sections_settings['featured_background'] ) echo 'checked="checked"'; ?> >
																</div>
														</div>
														<div class="woolayout-filed-wrap"> 
																<label> Display Elements on Hover: </label> 
																<div class="woolayout-filed-container"> 
																	<input class="woolayout-elements-on-hover" type="checkbox" name="<?php echo $sections; ?>-settings[display_elements_on_hover]" value="display-elements-on-hover" <?php if ( 'display_elements_on_hover' == $sections_settings['display_elements_on_hover'] ) echo 'checked="checked"'; ?> >
																</div>
														</div>
														<div class="woolayout-filed-wrap"> 
																<label> Elements Align: </label> 
																<div class="woolayout-filed-container"> 
																	<select class="woolayout-elements-align" name="<?php echo $sections; ?>-settings[elements_align]">
																		<option  value="none" <?php selected( $sections_settings["elements_align"], "none" ); ?>> None  </option>
																		<option  value="left" <?php selected( $sections_settings["elements_align"], "left" ); ?>> Left  </option>
																		<option  value="center" <?php selected( $sections_settings["elements_align"], "center" ); ?>> Center  </option>
																		<option  value="right" <?php selected( $sections_settings["elements_align"], "right" ); ?>> Right  </option>
																	</select>
																</div>
														</div>
														<div class="woolayout-filed-wrap"> 
																<label> Min Height: </label> 
																<div class="woolayout-filed-container"> 
																	<input class="woolayout-min-height" type="text" name="<?php echo $sections; ?>-settings[min-height]" value="<?php echo $sections_settings["min-height"]; ?>">
																
																</div>
														</div>
										</div>
										<div id="<?php echo $sections; ?>-tab3">
														<div class="woolayout-filed-wrap"> 
																<label> ID: </label> 
																<div class="woolayout-filed-container"> 
																	<input class="woolayout-id" type="text" name="<?php echo $sections; ?>-settings[id]" value="<?php echo $sections_settings["id"]; ?>">
																</div>
														</div>
														<div class="woolayout-filed-wrap"> 
																<label> Class: </label> 
																<div class="woolayout-filed-container"> 
																	<input class="woolayout-class" type="text" name="<?php echo $sections; ?>-settings[class]" value="<?php echo $sections_settings["class"]; ?>">
																</div>
														</div>										
										</div>
								</div>
							
									
									
									
									
							</div>
							
							<!---- end sections settings field ---->
												
					</div>
					
					
					
					<div class="woolayout-drag-items woolayout-add-columns <?php echo $column_settings_free['column-width']; ?>">
											<div class="woolayout-helper">  
												<div class="woolayout-decrease-width dashicons dashicons-minus" name="<?php echo $column; ?>">  </div> 
												<div class="woolayout-increase-width dashicons dashicons-plus" name="<?php echo $column; ?>">  </div> 
												<div class="woolayout-handle dashicons dashicons-move"> </div> <div name="<?php echo $column; ?>" id="<?php echo $column; ?>-edit" class="woolayout-edit dashicons dashicons-admin-tools">  </div> <div id="<?php echo $column; ?>-delete" name="<?php echo $column; ?>" class="woolayout-delete dashicons dashicons-trash">  </div> 
											</div>		
						<span>Columns</span> 
						
							<!---- start clumns settings field ---->
											
											<div class="woolayout-dialog" id="<?php echo $column; ?>-dialog" title="<?php echo $column_settings['element']; ?>">
											
											<h2> This Settings is available only in <a target="_blank" href="http://framepressstudio.com/product/woocommerce-layout-pro/"> Woolayout PRO </a>  </h2>
													
													<!---- start unique column settings value field ---->
														<input class="woolayout-shortcode" type="hidden" name="<?php echo $column; ?>-settings[shortcode]" value="woolayout_column">
														<input class="woolayout-element" type="hidden" name="<?php echo $column; ?>-settings[element]" value="Column">
														<input class="woolayout-icon" type="hidden" name="<?php echo $column; ?>-settings[icon]" value="dashicons">
														<input class="woolayout-column-width" id="<?php echo $column; ?>-column-width" type="hidden" name="<?php echo $column; ?>-settings-free[column-width]" value="w100">
													<!---- end unique column settings value field ---->		
												
												<div class="woolayout-tabs">								
														<ul>
															<li> <a href="#<?php echo $column; ?>-tab1"> Default Settings </a> </li>
															<li> <a href="#<?php echo $column; ?>-tab2"> Advance Settings </a> </li>
														</ul>
														<div id="<?php echo $column; ?>-tab1">
															
																	
																			<div class="woolayout-filed-wrap"> 
																				<label> Background Image:  </label>
																				<div class="woolayout-filed-container"> 
																					<input class="woolayout-background-image regular-text" type="text" name="<?php echo $column; ?>-settings[background-image]" id="<?php echo $column; ?>-background-image"  value="<?php echo $column_settings["background-image"]; ?>">
																					<input class="woolayout-background-image-button button-secondary woolayout_upload_button" type="button" name="<?php echo $column; ?>-background-image"  value="Upload Image">
																				</div>
																			</div>
																			<div class="woolayout-filed-wrap"> 
																				<label> Background Color: </label> 
																				<div class="woolayout-filed-container"> 
																					<input class="woolayout-background-color-drag" type="text" name="<?php echo $column; ?>-settings[background-color]" value="<?php echo $column_settings["background-color"]; ?>"  data-default-color="<?php echo $column_settings["background-color"]; ?>" /> 
																				</div>
																			</div>	
																		
																			<div class="woolayout-filed-wrap"> 
																				<label> Background Repeat: </label> 
																				<div class="woolayout-filed-container"> 
																							<select class="woolayout-background-repeat" name="<?php echo $column; ?>-settings[background-repeat]"> 
																								<option  value="inherit" <?php selected( $column_settings["background-repeat"], 'inherit' ); ?>> Inherit  </option>
																								<option  value="repeat" <?php selected( $column_settings["background-repeat"], 'repeat' ); ?>> Repeat  </option>
																								<option  value="no-repeat" <?php selected( $column_settings["background-repeat"], 'no-repeat' ); ?>> No Repeat  </option>
																								<option  value="repeat-x" <?php selected( $column_settings["background-repeat"], 'repeat-x' ); ?>> Repeat X  </option>
																								<option  value="repeat-y" <?php selected( $column_settings["background-repeat"], 'repeat-y' ); ?>> Repeat Y  </option>
																							</select>
																				</div>
																			</div>
																			<div class="woolayout-filed-wrap"> 
																				<label> Background Attachment: </label> 
																				<div class="woolayout-filed-container"> 
																							<select class="woolayout-background-attachment" name="<?php echo $column; ?>-settings[background-attachment]"> 
																								<option  value="inherit" <?php selected( $column_settings["background-attachment"], 'inherit' ); ?>> Inherit  </option>
																								<option  value="fixed" <?php selected( $column_settings["background-attachment"], 'fixed' ); ?>> Fixed  </option>
																								<option  value="scroll" <?php selected( $column_settings["background-attachment"], 'scroll' ); ?>> Scroll  </option>
																							</select>
																				</div>
																			</div>
																			<div class="woolayout-filed-wrap"> 
																				<label> Background Position: </label> 
																				<div class="woolayout-filed-container"> 
																							<select class="woolayout-background-position" name="<?php echo $column; ?>-settings[background-position]"> 
																								<option  value="inherit" <?php selected( $column_settings["background-position"], 'inherit' ); ?>> Inherit  </option>
																								<option  value="top" <?php selected( $column_settings["background-position"], 'top' ); ?>> Top  </option>
																								<option  value="bottom" <?php selected( $column_settings["background-position"], 'bottom' ); ?>> Bottom  </option>
																								<option  value="left" <?php selected( $column_settings["background-position"], 'left' ); ?>> Left  </option>
																								<option  value="right" <?php selected( $column_settings["background-position"], 'right' ); ?>> Right  </option>
																								<option  value="center" <?php selected( $column_settings["background-position"], 'center' ); ?>> Center  </option>
																							</select>
																				</div>
																			</div>
																			
																			<div class="woolayout-filed-wrap"> 
																				<label> Border Width:  </label>
																								<select class="woolayout-border-width" name="<?php echo $column; ?>-settings[border-width]">
																									<option  value="inherit" <?php selected( $column_settings["border-width"], "inherit" ); ?>> inherit  </option>
																									<option  value="thin" <?php selected( $column_settings["border-width"], "thin" ); ?>> thin  </option>
																									<option  value="medium" <?php selected( $column_settings["border-width"], "medium" ); ?>> medium  </option>
																									<option  value="thick" <?php selected( $column_settings["border-width"], "thick" ); ?>> thick  </option>
																								</select>
																			</div>
																			<div class="woolayout-filed-wrap"> 
																				<label> Border Style:  </label>
																								<select class="woolayout-border-style" name="<?php echo $column; ?>-settings[border-style]">
																									<option  value="none" <?php selected( $column_settings["border-style"], "none" ); ?>> None  </option>
																									<option  value="solid" <?php selected( $column_settings["border-style"], "solid" ); ?>> Solid  </option>
																									<option  value="dashed" <?php selected( $column_settings["border-style"], "dashed" ); ?>> Dashed  </option>
																									<option  value="dotted" <?php selected( $column_settings["border-style"], "dotted" ); ?>> Dotted  </option>
																									<option  value="double" <?php selected( $column_settings["border-style"], "double" ); ?>> Double  </option>
																									<option  value="groove" <?php selected( $column_settings["border-style"], "groove" ); ?>> Groove  </option>
																									<option  value="outset" <?php selected( $column_settings["border-style"], "outset" ); ?>> Outset  </option>
																									<option  value="ridge" <?php selected( $column_settings["border-style"], "ridge" ); ?>> Ridge  </option>
																								</select>
																			</div>
																			<div class="woolayout-filed-wrap"> 
																				<label> Border Color: </label> 
																				<div class="woolayout-filed-container"> 
																					<input class="woolayout-border-color-drag" type="text" name="<?php echo $column; ?>-settings[border-color]" value="<?php echo $column_settings["border-color"]; ?>"  data-default-color="<?php echo $column_settings["border-color"]; ?>" /> 
																				</div>
																			</div>	
																			<div class="woolayout-filed-wrap"> 
																				<label> Border Radius: </label> 
																				<div class="woolayout-filed-container"> 
																					<input class="woolayout-border-radius" type="text" name="<?php echo $column; ?>-settings[border-radius]" value="<?php echo $column_settings["border-radius"]; ?>">
																				</div>
																			</div>	
																			
																			<div class="woolayout-filed-wrap"> 
																				<label> Padding: </label> 
																				<div class="woolayout-filed-container"> 
																					<input class="woolayout-padding" type="text" name="<?php echo $column; ?>-settings[padding]" value="<?php echo $column_settings["padding"]; ?>">
																				</div>
																			</div>	
																			
																			<div class="woolayout-filed-wrap"> 
																				<label> Margin: </label> 
																				<div class="woolayout-filed-container"> 
																					<input class="woolayout-margin" type="text" name="<?php echo $column; ?>-settings[margin]" value="<?php echo $column_settings["margin"]; ?>">
																				</div>
																			</div>	
														</div>
														<div id="<?php echo $column; ?>-tab2">
																		<div class="woolayout-filed-wrap"> 
																				<label> ID: </label> 
																				<div class="woolayout-filed-container"> 
																					<input class="woolayout-id" type="text" name="<?php echo $column; ?>-settings[id]" value="<?php echo $column_settings["id"]; ?>">
																				</div>
																		</div>
																		<div class="woolayout-filed-wrap"> 
																				<label> Class: </label> 
																				<div class="woolayout-filed-container"> 
																					<input class="woolayout-class" type="text" name="<?php echo $column; ?>-settings[class]" value="<?php echo $column_settings["class"]; ?>">
																				</div>
																		</div>										
														</div>
												</div>
											
													
													
													
													
											</div>
											
											<!---- end clumns settings field ---->
					</div>

			</div>
			<div id="woolayout-tab2" class="woolayout-tab-content"> 
				<h2>  Woocommerce Elements </h2>
				
				<p> Drag and Drop the Woocommerce Elements inside the column </p>
					
					<div id="woolayout_shop_woo_elements_lists" class="woolayout-default-woo-elements woolayout_shop_woo_elements_lists">
					
						<?php 
						
						$woolayout_woo_elements_lists = get_option("woolayout_shop_woo_elements_lists");
						
						foreach ( (array) $woolayout_woo_elements_lists as $key => $woo_elements) {
							$elements_settings = get_option($woo_elements.'-settings');
							$elements = $woo_elements;
							
							
							
								if ($elements == "") {
								 // do nothing
								}
								else {
							
								?>
								
								
									<div id="<?php echo $elements; ?>" class="woolayout-elements">
										<div class="woolayout-helper"> 
											<div class="woolayout-handle dashicons dashicons-move"> </div>
											<div  name="<?php echo $elements; ?>" class="woolayout-edit dashicons dashicons-admin-tools">  </div>
											<div id="<?php echo $elements; ?>-delete" name="<?php echo $elements; ?>" class="woolayout-back dashicons dashicons-trash">  </div>
										</div>
										<span class="<?php echo $elements_settings["icon"]; ?> woolayout-element-name"> <?php echo $elements_settings["element"]; ?>  </span>  
															
								<!----- start  dialog ----->
								
										<div class="woolayout-dialog" id="<?php echo $elements; ?>-dialog" title="<?php echo $elements_settings["element"]; ?>">
										
										<h2> This Settings is available only in <a target="_blank" href="http://framepressstudio.com/product/woocommerce-layout-pro/"> Woolayout PRO </a>  </h2>
											
											<input type="hidden" name="<?php echo $elements; ?>-settings[shortcode]" value="<?php echo $elements_settings["shortcode"]; ?>"> 
												<input type="hidden" name="<?php echo $elements; ?>-settings[element]" value="<?php echo $elements_settings["element"]; ?>"> 
												<input type="hidden" name="<?php echo $elements; ?>-settings[icon]" value="<?php echo $elements_settings["icon"]; ?>">
													
													<?php
													if ( $elements_settings["shortcode"] == "woolayout_gallery") {
																?>
																
																
																<?php
																// True by default, just here to make things clear.
																$true = true;
																
																?>
																
																<div class="woolayout-tabs">
																
																	<ul>
																		<li> <a href="#<?php echo $elements; ?>-tab1"> Product Images </a> </li>
																		<li> <a href="#<?php echo $elements; ?>-tab2"> Sale Flash </a> </li>
																		<li> <a href="#<?php echo $elements; ?>-tab3"> Advance Settings </a> </li>
																	</ul>
																	
																	<div id="<?php echo $elements; ?>-tab1">
																			<div class="woolayout-checkbox-wrap">  
																				<label> <?php echo '<img src="' . plugin_dir_url( __FILE__ ) . 'images/gallery1.png" > '; ?> </label> 
																				<input class="woolayout-gallery-style-1" type="radio" name="<?php echo $elements; ?>-settings[gallery_style]" value="gallery_style_1" <?php checked( $elements_settings["gallery_style"], "gallery_style_1", $true ); ?>>  Default Woocommerce Gallery
																			</div>
																			<div class="woolayout-checkbox-wrap">  
																				<label> <?php echo '<img src="' . plugin_dir_url( __FILE__ ) . 'images/gallery2.png" > '; ?> </label>
																			<input class="woolayout-gallery-style-2" type="radio" name="<?php echo $elements; ?>-settings[gallery_style]" value="gallery_style_2" <?php checked( $elements_settings["gallery_style"], "gallery_style_2", $true ); ?>>  Gallery Slider
																			</div>
																	</div>
																	<div id="<?php echo $elements; ?>-tab2">
																			<div class="woolayout-checkbox-wrap"> 
																				<label> <?php echo '<img src="' . plugin_dir_url( __FILE__ ) . 'images/sale1.png" > '; ?> </label> 
																				<input class="woolayout-sale-style-1" type="radio" name="<?php echo $elements; ?>-settings[sale_style]" value="sale_style_1" <?php checked( $elements_settings["sale_style"], "sale_style_1", $true ); ?>> 
																			</div>
																			<div class="woolayout-checkbox-wrap"> 
																				<label> <?php echo '<img src="' . plugin_dir_url( __FILE__ ) . 'images/sale2.png" > '; ?> </label> 
																				<input class="woolayout-sale-style-2" type="radio" name="<?php echo $elements; ?>-settings[sale_style]" value="sale_style_2" <?php checked( $elements_settings["sale_style"], "sale_style_2", $true ); ?>> 
																			</div>
																			<div class="woolayout-checkbox-wrap"> 
																				<label> <?php echo '<img src="' . plugin_dir_url( __FILE__ ) . 'images/sale3.png" > '; ?> </label> 
																				<label><input class="woolayout-sale-style-3" type="radio" name="<?php echo $elements; ?>-settings[sale_style]" value="sale_style_3" <?php checked( $elements_settings["sale_style"], "sale_style_3", $true ); ?>> 
																			</div>
																			<div class="woolayout-checkbox-wrap"> 	
																				<label> <?php echo '<img src="' . plugin_dir_url( __FILE__ ) . 'images/sale4.png" > '; ?> </label> 
																				<input class="woolayout-sale-style-4" type="radio" name="<?php echo $elements; ?>-settings[sale_style]" value="sale_style_4" <?php checked( $elements_settings["sale_style"], "sale_style_4", $true ); ?>> 
																			</div>
																			<div class="woolayout-checkbox-wrap"> 	
																				<label> <?php echo '<img src="' . plugin_dir_url( __FILE__ ) . 'images/sale5.png" > '; ?> </label> 
																				<input class="woolayout-sale-style-5" type="radio" name="<?php echo $elements; ?>-settings[sale_style]" value="sale_style_5" <?php checked( $elements_settings["sale_style"], "sale_style_5", $true ); ?>> 
																			</div>
																			

																	</div>
																	<div id="<?php echo $elements; ?>-tab3"> 
																			<p> <label> Id: </label> <input class="woolayout-id" class="" type="text" name="<?php echo $elements; ?>-settings[id]" value="<?php echo $elements_settings["id"]; ?>"> </p>
																			<p> <label> Class: </label> <input class="woolayout-class" class="" type="text" name="<?php echo $elements; ?>-settings[class]" value="<?php echo $elements_settings["class"]; ?>"> </p>
																	
																	</div>
																
																</div>
																
																
																<?php
															}
															elseif ( $elements_settings["shortcode"] == "woolayout_rating") {
																?>
																
																	<!----- start default element settings --->
																<div class="woolayout-tabs">
																
																	<ul>
																		<li> <a href="#<?php echo $elements; ?>-tab1"> Style </a> </li>
																		<li> <a href="#<?php echo $elements; ?>-tab2"> Advance Settings </a> </li>
																	</ul>
																	
																	<div id="<?php echo $elements; ?>-tab1"> 
																	<p> Rating Text: <input type="text" name="<?php echo $elements; ?>-settings[rating_text]" value="<?php echo $elements_settings["rating_text"]; ?>"> </p>
																	<p> Rating Type: <input type="hidden" name="<?php echo $elements; ?>-settings[rating_type]" value="<?php echo $elements_settings["rating_type"]; ?>"> </p>
																
																	</div>
																	<div id="<?php echo $elements; ?>-tab2">
																			<p> <label> Id: </label> <input class="woolayout-id" class="" type="text" name="<?php echo $elements; ?>-settings[id]" value="<?php echo $elements_settings["id"]; ?>"> </p>
																			<p> <label> Class: </label> <input class="woolayout-class" class="" type="text" name="<?php echo $elements; ?>-settings[class]" value="<?php echo $elements_settings["class"]; ?>"> </p>
																	</div>
																	
																</div>
																	
																<!----- end default element settings --->
																
																<?php
															}
															elseif ( $elements_settings["shortcode"] == "woolayout_add_to_cart") {
																?>
																
																<div class="woolayout-tabs">
																
																	<ul>
																		<li> <a href="#<?php echo $elements; ?>-tab1"> Settings </a> </li>
																		<li> <a href="#<?php echo $elements; ?>-tab2"> Style </a> </li>
																		<li> <a href="#<?php echo $elements; ?>-tab3"> Font </a> </li>
																		<li> <a href="#<?php echo $elements; ?>-tab4"> Advance Settings </a> </li>
																	</ul>
																	
																	<div id="<?php echo $elements; ?>-tab1"> 
																			<p><label>  Button type:  </label>
																						<select class="woolayout-add_to_cart_type" name="<?php echo $elements; ?>-settings[button_type]">
																							<option  value="default" <?php selected( $elements_settings["button_type"], "default" ); ?>> Default  </option>
																							<option  value="loop" <?php selected( $elements_settings["button_type"], "loop" ); ?>> Loop  </option>
																						</select>
																			<p>
																			<p><label>  Add To Cart Text:  </label><input class="woolayout-add_to_cart_text" type="text" name="<?php echo $elements; ?>-settings[button_text]" value="<?php echo $elements_settings["button_text"]; ?>"> </p>
																			
																			<p><h4>  Add To Cart Text on Product Archives:  </h4>
																			<p><label>  External:  </label><input class="woolayout-add_to_cart_text_external" type="text" name="<?php echo $elements; ?>-settings[button_text_external]" value="<?php echo $elements_settings["button_text_external"]; ?>"> </p>
																			<p><label>  Grouped:  </label><input class="woolayout-add_to_cart_text_grouped" type="text" name="<?php echo $elements; ?>-settings[button_text_grouped]" value="<?php echo $elements_settings["button_text_grouped"]; ?>">  </p>
																			<p><label>  Simple:  </label><input class="woolayout-add_to_cart_text_simple" type="text" name="<?php echo $elements; ?>-settings[button_text_simple]" value="<?php echo $elements_settings["button_text_simple"]; ?>">  </p>
																			<p><label>  Variable:  </label><input class="woolayout-add_to_cart_text_variable" type="text" name="<?php echo $elements; ?>-settings[button_text_variable]" value="<?php echo $elements_settings["button_text_variable"]; ?>"> </p>
																			
																			
																			
																			
																	</div>
																	<div id="<?php echo $elements; ?>-tab2">
																			<p> <label> Background Color: </label> <input class="woolayout-background-color" class="" type="text" name="<?php echo $elements; ?>-settings[background-color]" value="<?php echo $elements_settings["background-color"]; ?>"> </p>
																			<p> <label> Border Width:  </label>
																						<select class="woolayout-border-width" name="<?php echo $elements; ?>-settings[border-width]">
																							<option  value="inherit" <?php selected( $elements_settings["border-width"], "inherit" ); ?>> inherit  </option>
																							<option  value="thin" <?php selected( $elements_settings["border-width"], "thin" ); ?>> thin  </option>
																							<option  value="medium" <?php selected( $elements_settings["border-width"], "medium" ); ?>> medium  </option>
																							<option  value="thick" <?php selected( $elements_settings["border-width"], "thick" ); ?>> thick  </option>
																						</select>
																			</p>
																			<p> <label> Border Style:  </label>
																										<select class="woolayout-border-style" name="<?php echo $elements; ?>-settings[border-style]">
																											<option  value="none" <?php selected( $elements_settings["border-style"], "none" ); ?>> None  </option>
																											<option  value="solid" <?php selected( $elements_settings["border-style"], "solid" ); ?>> Solid  </option>
																											<option  value="dashed" <?php selected( $elements_settings["border-style"], "dashed" ); ?>> Dashed  </option>
																											<option  value="dotted" <?php selected( $elements_settings["border-style"], "dotted" ); ?>> Dotted  </option>
																											<option  value="double" <?php selected( $elements_settings["border-style"], "double" ); ?>> Double  </option>
																											<option  value="groove" <?php selected( $elements_settings["border-style"], "groove" ); ?>> Groove  </option>
																											<option  value="outset" <?php selected( $elements_settings["border-style"], "outset" ); ?>> Outset  </option>
																											<option  value="ridge" <?php selected( $elements_settings["border-style"], "ridge" ); ?>> Ridge  </option>
																										</select>
																			</p>
																			<p><label> Border Color: </label> <input class="woolayout-border-color" type="text" name="<?php echo $elements; ?>-settings[border-color]" value="<?php echo $elements_settings["border-color"]; ?>"  data-default-color="<?php echo $elements_settings["border-color"]; ?>" /> </p>
																			<p><label> Border Radius: </label> <input class="woolayout-border-radius" type="text" name="<?php echo $elements; ?>-settings[border-radius]" value="<?php echo $elements_settings["border-radius"]; ?>" /> </p>
																			
																					
																			<p> <label> Padding: </label> <input class="woolayout-padding" type="text" name="<?php echo $elements; ?>-settings[padding]" value="<?php echo $elements_settings["padding"]; ?>"> </p>	
																			<p> <label> Margin: </label> <input class="woolayout-margin" type="text" name="<?php echo $elements; ?>-settings[margin]" value="<?php echo $elements_settings["margin"]; ?>"> </p>
																			
																			
																			
																	</div>
																	<div id="<?php echo $elements; ?>-tab3">
																	
																				<p> <label> Font Family: </label> <input class="woolayout-font-family" class="" type="text" name="<?php echo $elements; ?>-settings[font-family]" value="<?php echo $elements_settings["font-family"]; ?>"> </p>
																			<p> <label> Font Color: </label> <input class="woolayout-font-color" class="" type="text" name="<?php echo $elements; ?>-settings[color]" value="<?php echo $elements_settings["color"]; ?>"> </p>
																			<p> <label> Font Size: </label> <input class="woolayout-font-size" type="text" name="<?php echo $elements; ?>-settings[font-size]" value="<?php echo $elements_settings["font-size"]; ?>"> </p>
																			<p> <label> Font Weight:  </label>
																				<select class="woolayout-font-weight" name="<?php echo $elements; ?>-settings[font-weight]">
																					<option  value="bold" <?php selected( $elements_settings["font-weight"], "bold" ); ?>> bold  </option>
																					<option  value="bolder" <?php selected( $elements_settings["font-weight"], "bolder" ); ?>> bolder  </option>
																					<option  value="inherit" <?php selected( $elements_settings["font-weight"], "inherit" ); ?>> inherit  </option>
																					<option  value="lighter" <?php selected( $elements_settings["font-weight"], "lighter" ); ?>> lighter  </option>
																					<option  value="normal" <?php selected( $elements_settings["font-weight"], "normal" ); ?>> normal  </option>
																				</select>
																			</p>
																			<p> <label> Font Style:  </label>
																				<select class="woolayout-font-style" name="<?php echo $elements; ?>-settings[font-style]"> 
																					<option  value="inherit" <?php selected( $elements_settings["font-style"], "inherit" ); ?>> inherit  </option>
																					<option  value="italic" <?php selected( $elements_settings["font-style"], "italic" ); ?>> italic  </option>
																					<option  value="normal" <?php selected( $elements_settings["font-style"], "normal" ); ?>> normal  </option>
																					<option  value="oblique" <?php selected( $elements_settings["font-style"], "oblique" ); ?>> oblique  </option>
																				</select>
																			</p>
																			<p> <label> Text Align:  </label>
																				<select class="woolayout-text-align" name="<?php echo $elements; ?>-settings[text-align]"> 
																					<option  value="left" <?php selected( $elements_settings["text-align"], "left" ); ?>> left  </option>
																					<option  value="center" <?php selected( $elements_settings["text-align"], "center" ); ?>> center  </option>
																					<option  value="right" <?php selected( $elements_settings["text-align"], "right" ); ?>> right  </option>
																					<option  value="inherit" <?php selected( $elements_settings["text-align"], "inherit" ); ?>> inherit  </option>
																				</select>
																			</p>
																			<p> <label> Text Transform:  </label>
																				<select class="woolayout-text-transform" type="text" name="<?php echo $elements; ?>-settings[text-transform]"> 
																					<option  value="capitalize" <?php selected( $elements_settings["text-transform"], "capitalize" ); ?>> capitalize  </option>
																					<option  value="inherit" <?php selected( $elements_settings["text-transform"], "inherit" ); ?>> inherit  </option>
																					<option  value="lowercase" <?php selected( $elements_settings["text-transform"], "lowercase" ); ?>> lowercase  </option>
																					<option  value="none" <?php selected( $elements_settings["text-transform"], "none" ); ?>> none  </option>
																					<option  value="uppercase" <?php selected( $elements_settings["text-transform"], "uppercase" ); ?>> uppercase  </option>
																				</select>
																			</p>	
																	
																	</div>
																	<div id="<?php echo $elements; ?>-tab4">
																			<p> <label> Id: </label> <input class="woolayout-id" class="" type="text" name="<?php echo $elements; ?>-settings[id]" value="<?php echo $elements_settings["id"]; ?>"> </p>
																			<p> <label> Class: </label> <input class="woolayout-class" class="" type="text" name="<?php echo $elements; ?>-settings[class]" value="<?php echo $elements_settings["class"]; ?>"> </p>
																	</div>
																	
																</div>
																	
																	
																
																<?php
															}	
															elseif ( $elements_settings["shortcode"] == "woolayout_meta") {
															
																?>
																
																<div class="woolayout-tabs">
																
																	<ul>
																		<li> <a href="#<?php echo $elements; ?>-tab1"> Style </a> </li>
																		<li> <a href="#<?php echo $elements; ?>-tab2"> Advance Settings </a> </li>
																	</ul>
																	<div id="<?php echo $elements; ?>-tab1"> 
																	
																	<?php echo  $elements_settings["sku_display"]; ?>
																		<p> <label> Hide SKU: </label> <input type="checkbox" name="<?php echo $elements; ?>-settings[sku_display]" value="hide" <?php checked( $elements_settings["sku_display"], "hide", true ); ?>> </p>
																		<p> <label> SKU Text: </label> <input type="text" name="<?php echo $elements; ?>-settings[sku_text]" value="<?php echo $elements_settings["sku_text"]; ?>"> </p>
																		<p> <label> Hide Categories: </label> <input type="checkbox" name="<?php echo $elements; ?>-settings[categories_display]" value="hide" <?php echo "hide" ==  $elements_settings["categories_display"] ? 'checked="checked"' : '' ?> > </p>
																		<p> <label> Categories Text: </label> <input type="text" name="<?php echo $elements; ?>-settings[categories_text]" value="<?php echo $elements_settings["categories_text"]; ?>"> </p>
																		<p> <label> Hide Tags: </label> <input type="checkbox" name="<?php echo $elements; ?>-settings[tags_display]" value="hide" <?php echo "hide" ==  $elements_settings["tags_display"] ? 'checked="checked"' : '' ?> > </p>
																		<p> <label> Tags Text: </label> <input type="text" name="<?php echo $elements; ?>-settings[tags_text]" value="<?php echo $elements_settings["tags_text"]; ?>"> </p>
																		
																		
																	</div>
																	<div id="<?php echo $elements; ?>-tab2"> 
																			<p> <label> Id: </label> <input class="woolayout-id" class="" type="text" name="<?php echo $elements; ?>-settings[id]" value="<?php echo $elements_settings["id"]; ?>"> </p>
																			<p> <label> Class: </label> <input class="woolayout-class" class="" type="text" name="<?php echo $elements; ?>-settings[class]" value="<?php echo $elements_settings["class"]; ?>"> </p>
																	</div>
																	
																</div>
																
																
																<?php
															}
															elseif ( ($elements_settings["shortcode"] == "woolayout_title") || ($elements_settings["shortcode"] == "woolayout_price") || ($elements_settings["shortcode"] == "woolayout_short_description")  ) {
															?>
															<!----- start default element settings --->
																<div class="woolayout-tabs">
																
																	<ul>
																		<li> <a href="#<?php echo $elements; ?>-tab1"> Style </a> </li>
																		<li> <a href="#<?php echo $elements; ?>-tab2"> Advance </a> </li>
																	</ul>
																	
																	<div id="<?php echo $elements; ?>-tab1"> 
																			<p> <label> Font Family: </label> <input class="woolayout-font-family" class="" type="text" name="<?php echo $elements; ?>-settings[font-family]" value="<?php echo $elements_settings["font-family"]; ?>"> </p>
																			<p> <label> Font Color: </label> <input class="woolayout-font-color-drag" class="" type="text" name="<?php echo $elements; ?>-settings[color]" value="<?php echo $elements_settings["color"]; ?>"> </p>
																			<p> <label> Font Size: </label> <input class="woolayout-font-size" type="text" name="<?php echo $elements; ?>-settings[font-size]" value="<?php echo $elements_settings["font-size"]; ?>"> </p>
																			<p> <label> Font Weight:  </label>
																				<select class="woolayout-font-weight" name="<?php echo $elements; ?>-settings[font-weight]">
																					<option  value="bold" <?php selected( $elements_settings["font-weight"], "bold" ); ?>> bold  </option>
																					<option  value="bolder" <?php selected( $elements_settings["font-weight"], "bolder" ); ?>> bolder  </option>
																					<option  value="inherit" <?php selected( $elements_settings["font-weight"], "inherit" ); ?>> inherit  </option>
																					<option  value="lighter" <?php selected( $elements_settings["font-weight"], "lighter" ); ?>> lighter  </option>
																					<option  value="normal" <?php selected( $elements_settings["font-weight"], "normal" ); ?>> normal  </option>
																				</select>
																			</p>
																			<p> <label> Font Style:  </label>
																				<select class="woolayout-font-style" name="<?php echo $elements; ?>-settings[font-style]"> 
																					<option  value="inherit" <?php selected( $elements_settings["font-style"], "inherit" ); ?>> inherit  </option>
																					<option  value="italic" <?php selected( $elements_settings["font-style"], "italic" ); ?>> italic  </option>
																					<option  value="normal" <?php selected( $elements_settings["font-style"], "normal" ); ?>> normal  </option>
																					<option  value="oblique" <?php selected( $elements_settings["font-style"], "oblique" ); ?>> oblique  </option>
																				</select>
																			</p>
																			<p> <label> Text Align:  </label>
																				<select class="woolayout-text-align" name="<?php echo $elements; ?>-settings[text-align]"> 
																					<option  value="left" <?php selected( $elements_settings["text-align"], "left" ); ?>> left  </option>
																					<option  value="center" <?php selected( $elements_settings["text-align"], "center" ); ?>> center  </option>
																					<option  value="right" <?php selected( $elements_settings["text-align"], "right" ); ?>> right  </option>
																					<option  value="inherit" <?php selected( $elements_settings["text-align"], "inherit" ); ?>> inherit  </option>
																				</select>
																			</p>
																			<p> <label> Text Transform:  </label>
																				<select class="woolayout-text-transform" type="text" name="<?php echo $elements; ?>-settings[text-transform]"> 
																					<option  value="capitalize" <?php selected( $elements_settings["text-transform"], "capitalize" ); ?>> capitalize  </option>
																					<option  value="inherit" <?php selected( $elements_settings["text-transform"], "inherit" ); ?>> inherit  </option>
																					<option  value="lowercase" <?php selected( $elements_settings["text-transform"], "lowercase" ); ?>> lowercase  </option>
																					<option  value="none" <?php selected( $elements_settings["text-transform"], "none" ); ?>> none  </option>
																					<option  value="uppercase" <?php selected( $elements_settings["text-transform"], "uppercase" ); ?>> uppercase  </option>
																				</select>
																			</p>
																	</div>
																	<div id="<?php echo $elements; ?>-tab2">
																			<p> <label> Id: </label> <input class="woolayout-id" class="" type="text" name="<?php echo $elements; ?>-settings[id]" value="<?php echo $elements_settings["id"]; ?>"> </p>
																			<p> <label> Class: </label> <input class="woolayout-class" class="" type="text" name="<?php echo $elements; ?>-settings[class]" value="<?php echo $elements_settings["class"]; ?>"> </p>
																	</div>
																	
																</div>
																	
																<!----- end default element settings --->
																

															<?php
															}
															elseif ( $elements_settings["shortcode"] == "woolayout_data_tabs") {
																?>
																	<!----- start data tabs element settings --->
																<div class="woolayout-tabs">
																
																	<ul>
																		<li> <a href="#<?php echo $elements; ?>-tab1"> General Settings </a> </li>
																		<li> <a href="#<?php echo $elements; ?>-tab2"> Add a custom tab  </a> </li>
																		<li> <a href="#<?php echo $elements; ?>-tab3"> Advance Settings </a> </li>
																	</ul>
																	<div id="<?php echo $elements; ?>-tab1"> 
																			<h4> Remove Data Tabs </h4>
																			<p>
																				<input class="woolayout-remove-description-tab" type="checkbox" name="<?php echo $elements; ?>-settings[remove_description_tab]" value="hide" <?php checked( $elements_settings["remove_description_tab"], "hide", true ); ?>> 
																				<label> Remove Description Tab: </label> 
																				
																				<input class="woolayout-remove-reviews-tab" type="checkbox" name="<?php echo $elements; ?>-settings[remove_reviews_tab]" value="hide" <?php checked( $elements_settings["remove_reviews_tab"], "hide", true ); ?>> 
																				<label> Remove Reviews  Tab: </label> 
																				
																				<input class="woolayout-remove-information-tab" type="checkbox" name="<?php echo $elements; ?>-settings[remove_information_tab]" value="hide" <?php checked( $elements_settings["remove_information_tab"], "hide", true ); ?>> 
																				<label> Remove Information Tab: </label> 
																			</p>
																			<h4> Rename Data Tabs </h4>
																			<p> 
																				<label> Rename Description Tab: </label> 
																				<input class="woolayout-rename-description-tab" type="text" name="<?php echo $elements; ?>-settings[rename_description_tab]" value="<?php echo $elements_settings["rename_description_tab"]; ?>"> 
																				<span> Priority: </span> 
																				<input class="woolayout-priority-description-tab" type="text" name="<?php echo $elements; ?>-settings[priority_description_tab]" value="<?php echo $elements_settings["priority_description_tab"]; ?>">
																			</p>
																			<p> <label> Rename Information Tab: </label> 
																				 <input class="woolayout-rename-information-tab"type="text" name="<?php echo $elements; ?>-settings[rename_information_tab]" value="<?php echo $elements_settings["rename_information_tab"]; ?>"> 
																				 <span> Priority: </span> 
																				<input class="woolayout-priority-description-tab" type="text" name="<?php echo $elements; ?>-settings[priority_information_tab]" value="<?php echo $elements_settings["priority_information_tab"]; ?>">
																			</p>		
																			<p> <label> Rename Reviews Tab: </label> 
																				 <input class="woolayout-rename-reviews-tab" type="text" name="<?php echo $elements; ?>-settings[rename_reviews_tab]" value="<?php echo $elements_settings["rename_reviews_tab"]; ?>"> 
																				 <span> Priority: </span> 
																				<input class="woolayout-priority-description-tab" type="text" name="<?php echo $elements; ?>-settings[priority_reviews_tab]" value="<?php echo $elements_settings["priority_reviews_tab"]; ?>">
																			</p>

																			
																			
																			
																			
																	</div>
																	<div id="<?php echo $elements; ?>-tab2"> 
																	
																	<?php $content_custom_tab  = get_option('content_custom_tab'); 
																	 echo $content_custom_tab; ?>
																			<p>
																				<input class="woolayout-enable-custom-tab" type="checkbox" name="<?php echo $elements; ?>-settings[enable_custom_tab]" value="true" <?php checked( $elements_settings["enable_custom_tab"], "true", true ); ?>> 
																				<label> Enable Custom Tab: </label>
																			</p>
																			<p> 
																				<label>  Rename Custom Tab: </label> 
																				<input class="woolayout-rename-custom-tab" type="text" name="<?php echo $elements; ?>-settings[rename_custom_tab]" value="<?php echo $elements_settings["rename_custom_tab"]; ?>"> 
																				<span> Priority: </span> 
																				<input class="woolayout-priority-custom-tab" type="text" name="<?php echo $elements; ?>-settings[priority_custom_tab]" value="<?php echo $elements_settings["priority_custom_tab"]; ?>">
																			</p>
																			<p> <label>   Custom Tab Content: </label> 
																			
																			<textarea class="woolayout-content-custom-tab" name="<?php echo $elements; ?>-settings[content_custom_tab]" > <?php echo $elements_settings["content_custom_tab"]; ?> </textarea> 
																				
																			</p>
																			
																			
																	</div>
																	<div id="<?php echo $elements; ?>-tab3"> 
																			<p> <label> Id: </label> <input class="woolayout-id" class="" type="text" name="<?php echo $elements; ?>-settings[id]" value="<?php echo $elements_settings["id"]; ?>"> </p>
																			<p> <label> Class: </label> <input class="woolayout-class" class="" type="text" name="<?php echo $elements; ?>-settings[class]" value="<?php echo $elements_settings["class"]; ?>"> </p>
																	</div>
																	
																</div>
																<!----- end data tabs element settings --->
																<?php
															}
															elseif ( $elements_settings["shortcode"] == "woolayout_feat_image") {
																?>
																
														
														<div class="woolayout-tabs">
														
															<ul>
																<li> <a href="#<?php echo $elements; ?>-tab1"> Product Images </a> </li>
																<li> <a href="#<?php echo $elements; ?>-tab2"> Sale Flash </a> </li>
																<li> <a href="#<?php echo $elements; ?>-tab3"> Advance Settings </a> </li>
															</ul>
															
															<div id="<?php echo $elements; ?>-tab1">
																	  
																		<p> <label> Image Size: </label>
																			<select class="woolayout-image-size" name="<?php echo $elements; ?>-settings[image_size]">
																				<option  value="thumbnail" <?php selected( $elements_settings["image_size"], "thumbnail" ); ?>> Thumbnail  </option>
																				<option  value="medium" <?php selected( $elements_settings["image_size"], "medium" ); ?>>  Medium  </option>
																				<option  value="medium_large" <?php selected( $elements_settings["image_size"], "medium_large" ); ?>> Medium Large  </option>
																				<option  value="large" <?php selected( $elements_settings["image_size"], "large" ); ?>> Large  </option>
																				<option  value="full" <?php selected( $elements_settings["image_size"], "full" ); ?>> Full  </option>
																				
																				<option  value="shop_thumbnail" <?php selected( $elements_settings["image_size"], "shop_thumbnail" ); ?>> Shop Thumbnail  </option>
																				<option  value="shop_catalog" <?php selected( $elements_settings["image_size"], "shop_catalog" ); ?>> Shop Catalog  </option>
																				<option  value="shop_single" <?php selected( $elements_settings["image_size"], "shop_single" ); ?>> Shop Single  </option>
																			</select>
																		</p>
																		
																		<p> <label> Hover Effect: </label>
																			<select class="woolayout-image-hover" name="<?php echo $elements; ?>-settings[image_hover]">
																				<option  value="hover_1" <?php selected( $elements_settings["image_hover"], "hover_1" ); ?>> Default  </option>
																				<option  value="hover_2" <?php selected( $elements_settings["image_hover"], "hover_2" ); ?>>  Zoom In  </option>
																				<option  value="hover_3" <?php selected( $elements_settings["image_hover"], "hover_3" ); ?>> Flip Box  </option>
																			</select>
																		</p>
																		
																	
															</div>
															<div id="<?php echo $elements; ?>-tab2">
																	<div class="woolayout-checkbox-wrap"> 
																		<label> <?php echo '<img src="' . plugin_dir_url( __FILE__ ) . 'images/sale1.png" > '; ?> </label> 
																		<input class="woolayout-sale-style-1" type="radio" name="<?php echo $elements; ?>-settings[image_sale_style]" value="sale_style_1" <?php checked( $elements_settings["image_sale_style"], "sale_style_1", $true ); ?>> 
																	</div>
																	<div class="woolayout-checkbox-wrap"> 
																		<label> <?php echo '<img src="' . plugin_dir_url( __FILE__ ) . 'images/sale2.png" > '; ?> </label> 
																		<input class="woolayout-sale-style-2" type="radio" name="<?php echo $elements; ?>-settings[image_sale_style]" value="sale_style_2" <?php checked( $elements_settings["image_sale_style"], "sale_style_2", $true ); ?>> 
																	</div>
																	<div class="woolayout-checkbox-wrap"> 
																		<label> <?php echo '<img src="' . plugin_dir_url( __FILE__ ) . 'images/sale3.png" > '; ?> </label> 
																		<label><input class="woolayout-sale-style-3" type="radio" name="<?php echo $elements; ?>-settings[image_sale_style]" value="sale_style_3" <?php checked( $elements_settings["image_sale_style"], "sale_style_3", $true ); ?>> 
																	</div>
																	<div class="woolayout-checkbox-wrap"> 	
																		<label> <?php echo '<img src="' . plugin_dir_url( __FILE__ ) . 'images/sale4.png" > '; ?> </label> 
																		<input class="woolayout-sale-style-4" type="radio" name="<?php echo $elements; ?>-settings[image_sale_style]" value="sale_style_4" <?php checked( $elements_settings["image_sale_style"], "sale_style_4", $true ); ?>> 
																	</div>
																	<div class="woolayout-checkbox-wrap"> 	
																		<label> <?php echo '<img src="' . plugin_dir_url( __FILE__ ) . 'images/sale5.png" > '; ?> </label> 
																		<input class="woolayout-sale-style-5" type="radio" name="<?php echo $elements; ?>-settings[image_sale_style]" value="sale_style_5" <?php checked( $elements_settings["image_sale_style"], "sale_style_5", $true ); ?>> 
																	</div>

															</div>
															<div id="<?php echo $elements; ?>-tab3"> 
																	<p> <label> Id: </label> <input class="woolayout-id" class="" type="text" name="<?php echo $elements; ?>-settings[id]" value="<?php echo $elements_settings["id"]; ?>"> </p>
																	<p> <label> Class: </label> <input class="woolayout-class" class="" type="text" name="<?php echo $elements; ?>-settings[class]" value="<?php echo $elements_settings["class"]; ?>"> </p>
															
															</div>
														
														</div>
																
																
																<?php
															}
															else {
																?>
																	<!----- start default element settings --->
																<div class="woolayout-tabs">
																
																	<ul>
																		<li> <a href="#<?php echo $elements; ?>-tab1"> Advance Settings </a> </li>
																	</ul>
																
																	<div id="<?php echo $elements; ?>-tab1"> 
																			<p> <label> Id: </label> <input class="woolayout-id" class="" type="text" name="<?php echo $elements; ?>-settings[id]" value="<?php echo $elements_settings["id"]; ?>"> </p>
																			<p> <label> Class: </label> <input class="woolayout-class" class="" type="text" name="<?php echo $elements; ?>-settings[class]" value="<?php echo $elements_settings["class"]; ?>"> </p>
																	</div>
																	
																</div>
																<!----- end default element settings --->
																
																<?php
															}
													
													?>
										
										
										</div>
										<!----- end dialog ----->
										
									</div>
									
								<?php
								
								
								}
						
						}
						
					
						
						
						?>
					
						
					</div>
				
				
				</div>
				
				<div id="woolayout-tab3" class="woolayout-tab-content"> 
					
					<h2> Woolayout Template </h2>
				
					 <h4> This Settings is available only in <a target="_blank" href="http://framepressstudio.com/product/woocommerce-layout-pro/"> Woolayout PRO </a>  </h4>
					 
					
					
					 <form method="post" action="" class="woolayout-reset-form">
						 <p class="submit">
					 <input name="woolayout-box-layout" class="woolayout-template-button" type="submit" value="Box Layout" >
					 <input type="hidden" name="action" value="woolayout-box-layout" />
					 </p>
					</form>
					
					 <form method="post" action="" class="woolayout-reset-form">
						 <p class="submit">
					 <input name="woolayout-grid-layout" class="woolayout-template-button" type="submit" value="Grid Layout" >
					 <input type="hidden" name="action" value="woolayout-grid-layout" />
					 </p>
					</form>
					
					 <form method="post" action="" class="woolayout-reset-form">
						 <p class="submit">
					 <input name="woolayout-list-layout" class="woolayout-template-button" type="submit" value="List Layout" >
					 <input type="hidden" name="action" value="woolayout-list-layout" />
					 </p>
					</form>
					
				
				</div>
			
		
		
		
		
		
	</div>
	</div>

	
	<form method="post" action="options.php" id="woolayout-shop-pages">

    <?php settings_fields( 'woolayout_shop_settings_group' ); ?>

    <?php do_settings_sections( 'woolayout_shop_settings_group' ); ?>
	
	

  <div class="woolayout-shop-loop-wrap" >
	
	<?php 
		$shop_loop_order = get_option('woolayout-shop-loop');
	?>
	
	
	<h3> Shop Loop Settings </h3> 
	Order: 
	<select class="woolayout-shop-loop-order" name="woolayout-shop-loop[order]"> 
		<option  value="asc" <?php selected( $shop_loop_order['order'], 'asc' ); ?>> asc  </option>
		<option  value="desc" <?php selected( $shop_loop_order['order'], 'desc' ); ?>> desc  </option>
	</select>
	
	Orderby: 
	<select class="woolayout-shop-loop-orderby" name="woolayout-shop-loop[orderby]"> 
		<option  value="date" <?php selected( $shop_loop_order['orderby'], 'date' ); ?>> date  </option>
		<option  value="title" <?php selected( $shop_loop_order['orderby'], 'title' ); ?>> title  </option>
		<option  value="menu_order" <?php selected( $shop_loop_order['orderby'], 'menu_order' ); ?>> menu_order  </option>
		<option  value="relevance" <?php selected( $shop_loop_order['orderby'], 'relevance' ); ?>> relevance  </option>
		<option  value="rand" <?php selected( $shop_loop_order['orderby'], 'rand' ); ?>> rand  </option>
	</select>
	Columns:
	<select class="woolayout-shop-loop-column" name="woolayout-shop-loop[column]"> 
		<option  value="1" <?php selected( $shop_loop_order['column'], '1' ); ?>> 1  </option>
		<option  value="2" <?php selected( $shop_loop_order['column'], '2' ); ?>> 2  </option>
		<option  value="3" <?php selected( $shop_loop_order['column'], '3' ); ?>> 3  </option>
		<option  value="4" <?php selected( $shop_loop_order['column'], '4' ); ?>> 4  </option>
		<option  value="5" <?php selected( $shop_loop_order['column'], '5' ); ?>> 5  </option>
		<option  value="6" <?php selected( $shop_loop_order['column'], '6' ); ?>> 6  </option>
	</select>
	

</div>
  
 
  
 
 

	<div class="woolayout-content-wrap">
	<div id="woolayout-shop-page-sections" class="woolayout-content-container woolayout-shop-page-sections">	
	
<?php
	$woolayout_section_list = get_option("woolayout-shop-page-sections");

	foreach ( (array) $woolayout_section_list as $count_section => $sections) {
		$sections_settings = get_option($sections."-settings");
		$column_list = get_option($sections);
		
	
		?>	
		
		<div id="<?php echo $sections; ?>" class="woolayout-sections">
			<div class="woolayout-helper"> <div class="woolayout-handle dashicons dashicons-move dashicons dashicons-move"> </div> <div name="<?php echo $sections; ?>" id="<?php echo $sections; ?>-edit" class="woolayout-edit dashicons dashicons-admin-tools">  </div> <div id="<?php echo $sections; ?>-delete" name="<?php echo $sections; ?>" class="woolayout-delete dashicons dashicons-trash">  </div> </div>
							
							<!---- start sections settings field ---->
							<div class="woolayout-dialog" id="<?php echo $sections; ?>-dialog" title="<?php echo $sections_settings['element']; ?>">
							
							<h2> This Settings is available only in <a target="_blank" href="http://framepressstudio.com/product/woocommerce-layout-pro/"> Woolayout PRO </a>  </h2>
							
							
										<input type="hidden" name="<?php echo $sections; ?>-settings[shortcode]" value="<?php echo $sections_settings["shortcode"]; ?>">
										<input type="hidden" name="<?php echo $sections; ?>-settings[element]" value="<?php echo $sections_settings["element"]; ?>">
										<input type="hidden" name="<?php echo $sections; ?>-settings[icon]" value="<?php echo $sections_settings["icon"]; ?>">
														
								
								<div class="woolayout-tabs">								
										<ul>
											<li> <a href="#<?php echo $sections; ?>-tab1"> Default Settings </a> </li>
											<li> <a href="#<?php echo $sections; ?>-tab2"> WooCommerce Settings </a> </li>
											<li> <a href="#<?php echo $sections; ?>-tab3"> Advance Settings </a> </li>
										</ul>
										<div id="<?php echo $sections; ?>-tab1">
											
													
															<div class="woolayout-filed-wrap"> 
																<label> Background Image:  </label>
																<div class="woolayout-filed-container"> 
																	<input class="woolayout-background-image regular-text" type="text" name="<?php echo $sections; ?>-settings[background-image]" id="<?php echo $sections; ?>-background-image"  value="<?php echo $sections_settings["background-image"]; ?>">
																	<input class="woolayout-background-image-button button-secondary woolayout_upload_button" type="button" name="<?php echo $sections; ?>-background-image"  value="Upload Image">
																</div>
															</div>
															<div class="woolayout-filed-wrap"> 
																<label> Background Color: </label> 
																<div class="woolayout-filed-container"> 
																	<input class="woolayout-background-color" type="text" name="<?php echo $sections; ?>-settings[background-color]" value="<?php echo $sections_settings["background-color"]; ?>"  data-default-color="<?php echo $sections_settings["background-color"]; ?>" /> 
																</div>
															</div>	
														
															<div class="woolayout-filed-wrap"> 
																<label> Background Repeat: </label> 
																<div class="woolayout-filed-container"> 
																			<select class="woolayout-background-repeat" name="<?php echo $sections; ?>-settings[background-repeat]"> 
																				<option  value="inherit" <?php selected( $sections_settings["background-repeat"], 'inherit' ); ?>> Inherit  </option>
																				<option  value="repeat" <?php selected( $sections_settings["background-repeat"], 'repeat' ); ?>> Repeat  </option>
																				<option  value="no-repeat" <?php selected( $sections_settings["background-repeat"], 'no-repeat' ); ?>> No Repeat  </option>
																				<option  value="repeat-x" <?php selected( $sections_settings["background-repeat"], 'repeat-x' ); ?>> Repeat X  </option>
																				<option  value="repeat-y" <?php selected( $sections_settings["background-repeat"], 'repeat-y' ); ?>> Repeat Y  </option>
																			</select>
																</div>
															</div>
															<div class="woolayout-filed-wrap"> 
																<label> Background Attachment: </label> 
																<div class="woolayout-filed-container"> 
																			<select class="woolayout-background-attachment" name="<?php echo $sections; ?>-settings[background-attachment]"> 
																				<option  value="inherit" <?php selected( $sections_settings["background-attachment"], 'inherit' ); ?>> Inherit  </option>
																				<option  value="fixed" <?php selected( $sections_settings["background-attachment"], 'fixed' ); ?>> Fixed  </option>
																				<option  value="scroll" <?php selected( $sections_settings["background-attachment"], 'scroll' ); ?>> Scroll  </option>
																			</select>
																</div>
															</div>
															<div class="woolayout-filed-wrap"> 
																<label> Background Position: </label> 
																<div class="woolayout-filed-container"> 
																			<select class="woolayout-background-position" name="<?php echo $sections; ?>-settings[background-position]"> 
																				<option  value="inherit" <?php selected( $sections_settings["background-position"], 'inherit' ); ?>> Inherit  </option>
																				<option  value="top" <?php selected( $sections_settings["background-position"], 'top' ); ?>> Top  </option>
																				<option  value="bottom" <?php selected( $sections_settings["background-position"], 'bottom' ); ?>> Bottom  </option>
																				<option  value="left" <?php selected( $sections_settings["background-position"], 'left' ); ?>> Left  </option>
																				<option  value="right" <?php selected( $sections_settings["background-position"], 'right' ); ?>> Right  </option>
																				<option  value="center" <?php selected( $sections_settings["background-position"], 'center' ); ?>> Center  </option>
																			</select>
																</div>
															</div>
															<div class="woolayout-filed-wrap"> 
																<label> Background Size: </label> 
																<div class="woolayout-filed-container"> 
																			<select class="woolayout-background-size" name="<?php echo $sections; ?>-settings[background-size]"> 
																				<option  value="inherit" <?php selected( $sections_settings["background-size"], 'inherit' ); ?>> Inherit  </option>
																				<option  value="cover" <?php selected( $sections_settings["background-size"], 'cover' ); ?>> Cover  </option>
																				<option  value="contain" <?php selected( $sections_settings["background-size"], 'contain' ); ?>> Contain  </option>
																				<option  value="auto" <?php selected( $sections_settings["background-size"], 'auto' ); ?>> Auto  </option>
																			</select>
																</div>
															</div>
															<div class="woolayout-filed-wrap"> 
																<label> Border Width:  </label>
																				<select class="woolayout-border-width" name="<?php echo $sections; ?>-settings[border-width]">
																					<option  value="inherit" <?php selected( $sections_settings["border-width"], "inherit" ); ?>> inherit  </option>
																					<option  value="thin" <?php selected( $sections_settings["border-width"], "thin" ); ?>> thin  </option>
																					<option  value="medium" <?php selected( $sections_settings["border-width"], "medium" ); ?>> medium  </option>
																					<option  value="thick" <?php selected( $sections_settings["border-width"], "thick" ); ?>> thick  </option>
																				</select>
															</div>
															<div class="woolayout-filed-wrap"> 
																<label> Border Style:  </label>
																				<select class="woolayout-border-style" name="<?php echo $sections; ?>-settings[border-style]">
																					<option  value="none" <?php selected( $sections_settings["border-style"], "none" ); ?>> None  </option>
																					<option  value="solid" <?php selected( $sections_settings["border-style"], "solid" ); ?>> Solid  </option>
																					<option  value="dashed" <?php selected( $sections_settings["border-style"], "dashed" ); ?>> Dashed  </option>
																					<option  value="dotted" <?php selected( $sections_settings["border-style"], "dotted" ); ?>> Dotted  </option>
																					<option  value="double" <?php selected( $sections_settings["border-style"], "double" ); ?>> Double  </option>
																					<option  value="groove" <?php selected( $sections_settings["border-style"], "groove" ); ?>> Groove  </option>
																					<option  value="outset" <?php selected( $sections_settings["border-style"], "outset" ); ?>> Outset  </option>
																					<option  value="ridge" <?php selected( $sections_settings["border-style"], "ridge" ); ?>> Ridge  </option>
																				</select>
															</div>
															<div class="woolayout-filed-wrap"> 
																<label> Border Color: </label> 
																<div class="woolayout-filed-container"> 
																	<input class="woolayout-border-color" type="text" name="<?php echo $sections; ?>-settings[border-color]" value="<?php echo $sections_settings["border-color"]; ?>"  data-default-color="<?php echo $sections_settings["border-color"]; ?>" /> 
																</div>
															</div>	
															
															<div class="woolayout-filed-wrap"> 
																<label> Border Radius: </label> 
																	<div class="woolayout-filed-container"> 
																		<input class="woolayout-border-radius" type="text" name="<?php echo $sections; ?>-settings[border-radius]" value="<?php echo $sections_settings["border-radius"]; ?>">
																</div>
															</div>																
															
															<div class="woolayout-filed-wrap"> 
																<label> Padding: </label> 
																<div class="woolayout-filed-container"> 
																	<input class="woolayout-padding" type="text" name="<?php echo $sections; ?>-settings[padding]" value="<?php echo $sections_settings["padding"]; ?>">
																</div>
															</div>	
															
															<div class="woolayout-filed-wrap"> 
																<label> Margin: </label> 
																<div class="woolayout-filed-container"> 
																	<input class="woolayout-margin" type="text" name="<?php echo $sections; ?>-settings[margin]" value="<?php echo $sections_settings["margin"]; ?>">
																</div>
															</div>	
										</div>
										<div id="<?php echo $sections; ?>-tab2">
														<div class="woolayout-filed-wrap"> 
																<label> Used Featured Image As Background: </label> 
																<div class="woolayout-filed-container"> 
																	<input class="woolayout-feature-background" type="checkbox" name="<?php echo $sections; ?>-settings[featured_background]" value="enable" <?php if ( 'enable' == $sections_settings['featured_background'] ) echo 'checked="checked"'; ?> >
																</div>
														</div>
														<div class="woolayout-filed-wrap"> 
																<label> Display Elements on Hover: </label> 
																<div class="woolayout-filed-container"> 
																	<input class="woolayout-elements-on-hover" type="checkbox" name="<?php echo $sections; ?>-settings[display_elements_on_hover]" value="display-elements-on-hover" <?php if ( 'display_elements_on_hover' == $sections_settings['display_elements_on_hover'] ) echo 'checked="checked"'; ?> >
																</div>
														</div>
														<div class="woolayout-filed-wrap"> 
																<label> Elements Align: </label> 
																<div class="woolayout-filed-container"> 
																	<select class="woolayout-elements-align" name="<?php echo $sections; ?>-settings[elements_align]">
																		<option  value="none" <?php selected( $sections_settings["elements_align"], "none" ); ?>> None  </option>
																		<option  value="left" <?php selected( $sections_settings["elements_align"], "left" ); ?>> Left  </option>
																		<option  value="center" <?php selected( $sections_settings["elements_align"], "center" ); ?>> Center  </option>
																		<option  value="right" <?php selected( $sections_settings["elements_align"], "right" ); ?>> Right  </option>
																	</select>
																</div>
														</div>
														<div class="woolayout-filed-wrap"> 
																<label> Min Height: </label> 
																<div class="woolayout-filed-container"> 
																	<input class="woolayout-min-height" type="text" name="<?php echo $sections; ?>-settings[min-height]" value="<?php echo $sections_settings["min-height"]; ?>">
																
																</div>
														</div>
										</div>
										<div id="<?php echo $sections; ?>-tab3">
														<div class="woolayout-filed-wrap"> 
																<label> ID: </label> 
																<div class="woolayout-filed-container"> 
																	<input class="woolayout-id" type="text" name="<?php echo $sections; ?>-settings[id]" value="<?php echo $sections_settings["id"]; ?>">
																</div>
														</div>
														<div class="woolayout-filed-wrap"> 
																<label> Class: </label> 
																<div class="woolayout-filed-container"> 
																	<input class="woolayout-class" type="text" name="<?php echo $sections; ?>-settings[class]" value="<?php echo $sections_settings["class"]; ?>">
																</div>
														</div>										
										</div>
								</div>
							
									
									
									
									
							</div>
							
							<!---- end sections settings field ---->
								
			<?php
					
							foreach ( (array) $column_list as $count_column => $column) {
								$column_settings = get_option($column.'-settings');
								$column_settings_free = get_option($column.'-settings-free');
								$elements_list = get_option($column);
								
								
								
							
							if ($column == "") {
								// do nothing
							}
							else {
								?>
								
								
								<div id="<?php echo $column; ?>" class="woolayout-columns <?php echo $column_settings_free["column-width"]; ?>">
											<div class="woolayout-helper">  
												<div class="woolayout-decrease-width dashicons dashicons-minus" name="<?php echo $column; ?>">  </div> 
												<div class="woolayout-increase-width dashicons dashicons-plus" name="<?php echo $column; ?>">  </div> 
												<div class="woolayout-handle dashicons dashicons-move"> </div>
												<div class="woolayout-edit dashicons dashicons-admin-tools" name="<?php echo $column; ?>" id="<?php echo $column; ?>-edit" >  </div> 
												<div class="woolayout-delete dashicons dashicons-trash" id="<?php echo $column; ?>-delete" name="<?php echo $column; ?>" >  </div> 
											</div>					
											
												
											<!---- start clumns settings field ---->
											
											<div class="woolayout-dialog" id="<?php echo $column; ?>-dialog" title="<?php echo $column_settings['element']; ?>">
											
											<h2> This Settings is available only in <a target="_blank" href="http://framepressstudio.com/product/woocommerce-layout-pro/"> Woolayout PRO </a>  </h2>
														
														<input class="woolayout-shortcode" type="hidden" name="<?php echo $column; ?>-settings[shortcode]" value="<?php echo $column_settings["shortcode"]; ?>">
														<input class="woolayout-element" type="hidden" name="<?php echo $column; ?>-settings[element]" value="<?php echo $column_settings["element"]; ?>">
														<input class="woolayout-icon" type="hidden" name="<?php echo $column; ?>-settings[icon]" value="<?php echo $column_settings["icon"]; ?>">
														<input class="woolayout-column-width" id="<?php echo $column; ?>-column-width" type="hidden" name="<?php echo $column; ?>-settings-free[column-width]" value="<?php echo $column_settings_free["column-width"]; ?>">
															
												
												<div class="woolayout-tabs">								
														<ul>
															<li> <a href="#<?php echo $column; ?>-tab1"> Default Settings </a> </li>
															<li> <a href="#<?php echo $column; ?>-tab2"> Advance Settings </a> </li>
														</ul>
														<div id="<?php echo $column; ?>-tab1">
															
																	
																			<div class="woolayout-filed-wrap"> 
																				<label> Background Image:  </label>
																				<div class="woolayout-filed-container"> 
																					<input class="woolayout-background-image regular-text" type="text" name="<?php echo $column; ?>-settings[background-image]" id="<?php echo $column; ?>-background-image"  value="<?php echo $column_settings["background-image"]; ?>">
																					<input class="woolayout-background-image-button button-secondary woolayout_upload_button" type="button" name="<?php echo $column; ?>-background-image"  value="Upload Image">
																				</div>
																			</div>
																			<div class="woolayout-filed-wrap"> 
																				<label> Background Color: </label> 
																				<div class="woolayout-filed-container"> 
																					<input class="woolayout-background-color" type="text" name="<?php echo $column; ?>-settings[background-color]" value="<?php echo $column_settings["background-color"]; ?>"  data-default-color="<?php echo $column_settings["background-color"]; ?>" /> 
																				</div>
																			</div>	
																		
																			<div class="woolayout-filed-wrap"> 
																				<label> Background Repeat: </label> 
																				<div class="woolayout-filed-container"> 
																							<select class="woolayout-background-repeat" name="<?php echo $column; ?>-settings[background-repeat]"> 
																								<option  value="inherit" <?php selected( $column_settings["background-repeat"], 'inherit' ); ?>> Inherit  </option>
																								<option  value="repeat" <?php selected( $column_settings["background-repeat"], 'repeat' ); ?>> Repeat  </option>
																								<option  value="no-repeat" <?php selected( $column_settings["background-repeat"], 'no-repeat' ); ?>> No Repeat  </option>
																								<option  value="repeat-x" <?php selected( $column_settings["background-repeat"], 'repeat-x' ); ?>> Repeat X  </option>
																								<option  value="repeat-y" <?php selected( $column_settings["background-repeat"], 'repeat-y' ); ?>> Repeat Y  </option>
																							</select>
																				</div>
																			</div>
																			<div class="woolayout-filed-wrap"> 
																				<label> Background Attachment: </label> 
																				<div class="woolayout-filed-container"> 
																							<select class="woolayout-background-attachment" name="<?php echo $column; ?>-settings[background-attachment]"> 
																								<option  value="inherit" <?php selected( $column_settings["background-attachment"], 'inherit' ); ?>> Inherit  </option>
																								<option  value="fixed" <?php selected( $column_settings["background-attachment"], 'fixed' ); ?>> Fixed  </option>
																								<option  value="scroll" <?php selected( $column_settings["background-attachment"], 'scroll' ); ?>> Scroll  </option>
																							</select>
																				</div>
																			</div>
																			<div class="woolayout-filed-wrap"> 
																				<label> Background Position: </label> 
																				<div class="woolayout-filed-container"> 
																							<select class="woolayout-background-position" name="<?php echo $column; ?>-settings[background-position]"> 
																								<option  value="inherit" <?php selected( $column_settings["background-position"], 'inherit' ); ?>> Inherit  </option>
																								<option  value="top" <?php selected( $column_settings["background-position"], 'top' ); ?>> Top  </option>
																								<option  value="bottom" <?php selected( $column_settings["background-position"], 'bottom' ); ?>> Bottom  </option>
																								<option  value="left" <?php selected( $column_settings["background-position"], 'left' ); ?>> Left  </option>
																								<option  value="right" <?php selected( $column_settings["background-position"], 'right' ); ?>> Right  </option>
																								<option  value="center" <?php selected( $column_settings["background-position"], 'center' ); ?>> Center  </option>
																							</select>
																				</div>
																			</div>
																			
																			<div class="woolayout-filed-wrap"> 
																				<label> Border Width:  </label>
																								<select class="woolayout-border-width" name="<?php echo $column; ?>-settings[border-width]">
																									<option  value="inherit" <?php selected( $column_settings["border-width"], "inherit" ); ?>> inherit  </option>
																									<option  value="thin" <?php selected( $column_settings["border-width"], "thin" ); ?>> thin  </option>
																									<option  value="medium" <?php selected( $column_settings["border-width"], "medium" ); ?>> medium  </option>
																									<option  value="thick" <?php selected( $column_settings["border-width"], "thick" ); ?>> thick  </option>
																								</select>
																			</div>
																			<div class="woolayout-filed-wrap"> 
																				<label> Border Style:  </label>
																								<select class="woolayout-border-style" name="<?php echo $column; ?>-settings[border-style]">
																									<option  value="none" <?php selected( $column_settings["border-style"], "none" ); ?>> None  </option>
																									<option  value="solid" <?php selected( $column_settings["border-style"], "solid" ); ?>> Solid  </option>
																									<option  value="dashed" <?php selected( $column_settings["border-style"], "dashed" ); ?>> Dashed  </option>
																									<option  value="dotted" <?php selected( $column_settings["border-style"], "dotted" ); ?>> Dotted  </option>
																									<option  value="double" <?php selected( $column_settings["border-style"], "double" ); ?>> Double  </option>
																									<option  value="groove" <?php selected( $column_settings["border-style"], "groove" ); ?>> Groove  </option>
																									<option  value="outset" <?php selected( $column_settings["border-style"], "outset" ); ?>> Outset  </option>
																									<option  value="ridge" <?php selected( $column_settings["border-style"], "ridge" ); ?>> Ridge  </option>
																								</select>
																			</div>
																			<div class="woolayout-filed-wrap"> 
																				<label> Border Color: </label> 
																				<div class="woolayout-filed-container"> 
																					<input class="woolayout-border-color" type="text" name="<?php echo $column; ?>-settings[border-color]" value="<?php echo $column_settings["border-color"]; ?>"  data-default-color="<?php echo $column_settings["border-color"]; ?>" /> 
																				</div>
																			</div>	
																			
																			<div class="woolayout-filed-wrap"> 
																				<label> Border Radius: </label> 
																					<div class="woolayout-filed-container"> 
																						<input class="woolayout-border-radius" type="text" name="<?php echo $column; ?>-settings[border-radius]" value="<?php echo $column_settings["border-radius"]; ?>">
																				</div>
																			</div>		
																			
																			<div class="woolayout-filed-wrap"> 
																				<label> Padding: </label> 
																				<div class="woolayout-filed-container"> 
																					<input class="woolayout-padding" type="text" name="<?php echo $column; ?>-settings[padding]" value="<?php echo $column_settings["padding"]; ?>">
																				</div>
																			</div>	
																			
																			<div class="woolayout-filed-wrap"> 
																				<label> Margin: </label> 
																				<div class="woolayout-filed-container"> 
																					<input class="woolayout-margin" type="text" name="<?php echo $column; ?>-settings[margin]" value="<?php echo $column_settings["margin"]; ?>">
																				</div>
																			</div>	
														</div>
														
														<div id="<?php echo $column; ?>-tab2">
																		<div class="woolayout-filed-wrap"> 
																				<label> ID: </label> 
																				<div class="woolayout-filed-container"> 
																					<input class="woolayout-id" type="text" name="<?php echo $column; ?>-settings[id]" value="<?php echo $column_settings["id"]; ?>">
																				</div>
																		</div>
																		<div class="woolayout-filed-wrap"> 
																				<label> Class: </label> 
																				<div class="woolayout-filed-container"> 
																					<input class="woolayout-class" type="text" name="<?php echo $column; ?>-settings[class]" value="<?php echo $column_settings["class"]; ?>">
																				</div>
																		</div>										
														</div>
												</div>
											
													
													
													
													
											</div>
											
											<!---- end clumns settings field ---->
													
									<?php
									
									
										foreach ( (array) $elements_list as $count_elements => $elements) {
											$elements_settings = get_option($elements."-settings");
												if ($elements == "") {
													// do nothing
												}
												else {													
											?>
											
										<div id="<?php echo $elements; ?>" class="woolayout-elements">
												<div class="woolayout-helper"> 
													<div class="woolayout-handle dashicons dashicons-move"> </div>
													<div  name="<?php echo $elements; ?>" class="woolayout-edit dashicons dashicons-admin-tools">  </div>
													<div id="<?php echo $elements; ?>-delete" name="<?php echo $elements; ?>" class="woolayout-back dashicons dashicons-trash">  </div> 
												</div>
													<span class="<?php echo $elements_settings["icon"]; ?> woolayout-element-name"> <?php echo $elements_settings["element"]; ?>  </span>  
						<!----- start elements dialog ------>
												<div class="woolayout-dialog" id="<?php echo $elements; ?>-dialog" title="<?php echo $elements_settings["element"]; ?>">
												
												<h2> This Settings is available only in <a target="_blank" href="http://framepressstudio.com/product/woocommerce-layout-pro/"> Woolayout PRO </a>  </h2>
												
												
														<input type="hidden" name="<?php echo $elements; ?>-settings[shortcode]" value="<?php echo $elements_settings["shortcode"]; ?>">
														<input type="hidden" name="<?php echo $elements; ?>-settings[element]" value="<?php echo $elements_settings["element"]; ?>">
														<input type="hidden" name="<?php echo $elements; ?>-settings[icon]" value="<?php echo $elements_settings["icon"]; ?>">
														
													<?php
													if ( $elements_settings["shortcode"] == "woolayout_gallery") {
														?>
														<h2> <?php echo $elements_settings["element"];  ?> </h2>
														
														<?php
														// True by default, just here to make things clear.
														$true = true;
														
														?>
														
														<div class="woolayout-tabs">
														
															<ul>
																<li> <a href="#<?php echo $elements; ?>-tab1"> Product Images </a> </li>
																<li> <a href="#<?php echo $elements; ?>-tab2"> Sale Flash </a> </li>
																<li> <a href="#<?php echo $elements; ?>-tab3"> Advance Settings </a> </li>
															</ul>
															
															<div id="<?php echo $elements; ?>-tab1">
																	<div class="woolayout-checkbox-wrap">  
																		<label> <?php echo '<img src="' . plugin_dir_url( __FILE__ ) . 'images/gallery1.png" > '; ?> </label> 
																		<input class="woolayout-gallery-style-1" type="radio" name="<?php echo $elements; ?>-settings[gallery_style]" value="gallery_style_1" <?php checked( $elements_settings["gallery_style"], "gallery_style_1", $true ); ?>>  Default Woocommerce Gallery
																	</div>
																	<div class="woolayout-checkbox-wrap">  
																		<label> <?php echo '<img src="' . plugin_dir_url( __FILE__ ) . 'images/gallery2.png" > '; ?> </label>
																	<input class="woolayout-gallery-style-2" type="radio" name="<?php echo $elements; ?>-settings[gallery_style]" value="gallery_style_2" <?php checked( $elements_settings["gallery_style"], "gallery_style_2", $true ); ?>>  Gallery Slider
																	</div>
															</div>
															<div id="<?php echo $elements; ?>-tab2">
																	
																	
																	<div class="woolayout-checkbox-wrap"> 
																		<label> <?php echo '<img src="' . plugin_dir_url( __FILE__ ) . 'images/sale1.png" > '; ?> </label> 
																		<input class="woolayout-sale-style-1" type="radio" name="<?php echo $elements; ?>-settings[sale_style]" value="sale_style_1" <?php checked( $elements_settings["sale_style"], "sale_style_1", $true ); ?>> 
																	</div>
																	<div class="woolayout-checkbox-wrap"> 
																		<label> <?php echo '<img src="' . plugin_dir_url( __FILE__ ) . 'images/sale2.png" > '; ?> </label> 
																		<input class="woolayout-sale-style-2" type="radio" name="<?php echo $elements; ?>-settings[sale_style]" value="sale_style_2" <?php checked( $elements_settings["sale_style"], "sale_style_2", $true ); ?>> 
																	</div>
																	<div class="woolayout-checkbox-wrap"> 
																		<label> <?php echo '<img src="' . plugin_dir_url( __FILE__ ) . 'images/sale3.png" > '; ?> </label> 
																		<label><input class="woolayout-sale-style-3" type="radio" name="<?php echo $elements; ?>-settings[sale_style]" value="sale_style_3" <?php checked( $elements_settings["sale_style"], "sale_style_3", $true ); ?>> 
																	</div>
																	<div class="woolayout-checkbox-wrap"> 	
																		<label> <?php echo '<img src="' . plugin_dir_url( __FILE__ ) . 'images/sale4.png" > '; ?> </label> 
																		<input class="woolayout-sale-style-4" type="radio" name="<?php echo $elements; ?>-settings[sale_style]" value="sale_style_4" <?php checked( $elements_settings["sale_style"], "sale_style_4", $true ); ?>> 
																	</div>
																	<div class="woolayout-checkbox-wrap"> 	
																		<label> <?php echo '<img src="' . plugin_dir_url( __FILE__ ) . 'images/sale5.png" > '; ?> </label> 
																		<input class="woolayout-sale-style-5" type="radio" name="<?php echo $elements; ?>-settings[sale_style]" value="sale_style_5" <?php checked( $elements_settings["sale_style"], "sale_style_5", $true ); ?>> 
																	</div>
																	

															</div>
															<div id="<?php echo $elements; ?>-tab3"> 
																	<p> <label> Id: </label> <input class="woolayout-id" class="" type="text" name="<?php echo $elements; ?>-settings[id]" value="<?php echo $elements_settings["id"]; ?>"> </p>
																	<p> <label> Class: </label> <input class="woolayout-class" class="" type="text" name="<?php echo $elements; ?>-settings[class]" value="<?php echo $elements_settings["class"]; ?>"> </p>
															
															</div>
														
														</div>
														
														
														<?php
													}
													elseif ( $elements_settings["shortcode"] == "woolayout_rating") {
														?>
														
															<!----- start default element settings --->
														<div class="woolayout-tabs">
														
															<ul>
																<li> <a href="#<?php echo $elements; ?>-tab1"> Style </a> </li>
																<li> <a href="#<?php echo $elements; ?>-tab2"> Advance Settings </a> </li>
															</ul>
															
															<div id="<?php echo $elements; ?>-tab1"> 
															<p> Rating Text: <input type="text" name="<?php echo $elements; ?>-settings[rating_text]" value="<?php echo $elements_settings["rating_text"]; ?>"> </p>
															<p> Rating Type: <input type="hidden" name="<?php echo $elements; ?>-settings[rating_type]" value="<?php echo $elements_settings["rating_type"]; ?>"> </p>
														
															</div>
															<div id="<?php echo $elements; ?>-tab2">
																	<p> <label> Id: </label> <input class="woolayout-id" class="" type="text" name="<?php echo $elements; ?>-settings[id]" value="<?php echo $elements_settings["id"]; ?>"> </p>
																	<p> <label> Class: </label> <input class="woolayout-class" class="" type="text" name="<?php echo $elements; ?>-settings[class]" value="<?php echo $elements_settings["class"]; ?>"> </p>
															</div>
															
														</div>
															
														<!----- end default element settings --->
														
														<?php
													}
													elseif ( $elements_settings["shortcode"] == "woolayout_add_to_cart") {
														?>
														
														<div class="woolayout-tabs">
														
															<ul>
																<li> <a href="#<?php echo $elements; ?>-tab1"> Settings </a> </li>
																<li> <a href="#<?php echo $elements; ?>-tab2"> Style </a> </li>
																<li> <a href="#<?php echo $elements; ?>-tab3"> Font </a> </li>
																<li> <a href="#<?php echo $elements; ?>-tab4"> Advance Settings </a> </li>
															</ul>
															
															<div id="<?php echo $elements; ?>-tab1"> 
																	<p><label>  Button type:  </label>
																				<select class="woolayout-add_to_cart_type" name="<?php echo $elements; ?>-settings[button_type]">
																					<option  value="default" <?php selected( $elements_settings["button_type"], "default" ); ?>> Default  </option>
																					<option  value="loop" <?php selected( $elements_settings["button_type"], "loop" ); ?>> Loop  </option>
																				</select>
																	<p>
																	<p><label>  Add To Cart Text:  </label><input class="woolayout-add_to_cart_text" type="text" name="<?php echo $elements; ?>-settings[button_text]" value="<?php echo $elements_settings["button_text"]; ?>"> </p>
																	
																	<p><h4>  Add To Cart Text on Product Archives:  </h4>
																	<p><label>  External:  </label><input class="woolayout-add_to_cart_text_external" type="text" name="<?php echo $elements; ?>-settings[button_text_external]" value="<?php echo $elements_settings["button_text_external"]; ?>"> </p>
																	<p><label>  Grouped:  </label><input class="woolayout-add_to_cart_text_grouped" type="text" name="<?php echo $elements; ?>-settings[button_text_grouped]" value="<?php echo $elements_settings["button_text_grouped"]; ?>">  </p>
																	<p><label>  Simple:  </label><input class="woolayout-add_to_cart_text_simple" type="text" name="<?php echo $elements; ?>-settings[button_text_simple]" value="<?php echo $elements_settings["button_text_simple"]; ?>">  </p>
																	<p><label>  Variable:  </label><input class="woolayout-add_to_cart_text_variable" type="text" name="<?php echo $elements; ?>-settings[button_text_variable]" value="<?php echo $elements_settings["button_text_variable"]; ?>"> </p>
																	
																	
																	
																	
															</div>
															<div id="<?php echo $elements; ?>-tab2">
																	<p> <label> Background Color: </label> <input class="woolayout-background-color" class="" type="text" name="<?php echo $elements; ?>-settings[background-color]" value="<?php echo $elements_settings["background-color"]; ?>"> </p>
																	<p> <label> Border Width:  </label>
																				<select class="woolayout-border-width" name="<?php echo $elements; ?>-settings[border-width]">
																					<option  value="inherit" <?php selected( $elements_settings["border-width"], "inherit" ); ?>> inherit  </option>
																					<option  value="thin" <?php selected( $elements_settings["border-width"], "thin" ); ?>> thin  </option>
																					<option  value="medium" <?php selected( $elements_settings["border-width"], "medium" ); ?>> medium  </option>
																					<option  value="thick" <?php selected( $elements_settings["border-width"], "thick" ); ?>> thick  </option>
																				</select>
																	</p>
																	<p> <label> Border Style:  </label>
																								<select class="woolayout-border-style" name="<?php echo $elements; ?>-settings[border-style]">
																									<option  value="none" <?php selected( $elements_settings["border-style"], "none" ); ?>> None  </option>
																									<option  value="solid" <?php selected( $elements_settings["border-style"], "solid" ); ?>> Solid  </option>
																									<option  value="dashed" <?php selected( $elements_settings["border-style"], "dashed" ); ?>> Dashed  </option>
																									<option  value="dotted" <?php selected( $elements_settings["border-style"], "dotted" ); ?>> Dotted  </option>
																									<option  value="double" <?php selected( $elements_settings["border-style"], "double" ); ?>> Double  </option>
																									<option  value="groove" <?php selected( $elements_settings["border-style"], "groove" ); ?>> Groove  </option>
																									<option  value="outset" <?php selected( $elements_settings["border-style"], "outset" ); ?>> Outset  </option>
																									<option  value="ridge" <?php selected( $elements_settings["border-style"], "ridge" ); ?>> Ridge  </option>
																								</select>
																	</p>
																	<p><label> Border Color: </label> <input class="woolayout-border-color" type="text" name="<?php echo $elements; ?>-settings[border-color]" value="<?php echo $elements_settings["border-color"]; ?>"  data-default-color="<?php echo $elements_settings["border-color"]; ?>" /> </p>
																	<p><label> Border Radius: </label> <input class="woolayout-border-radius" type="text" name="<?php echo $elements; ?>-settings[border-radius]" value="<?php echo $elements_settings["border-radius"]; ?>" /> </p>
																	
																			
																	<p> <label> Padding: </label> <input class="woolayout-padding" type="text" name="<?php echo $elements; ?>-settings[padding]" value="<?php echo $elements_settings["padding"]; ?>"> </p>	
																	<p> <label> Margin: </label> <input class="woolayout-margin" type="text" name="<?php echo $elements; ?>-settings[margin]" value="<?php echo $elements_settings["margin"]; ?>"> </p>
																	
																	
																	
															</div>
															<div id="<?php echo $elements; ?>-tab3">
															
																		<p> <label> Font Family: </label> <input class="woolayout-font-family" class="" type="text" name="<?php echo $elements; ?>-settings[font-family]" value="<?php echo $elements_settings["font-family"]; ?>"> </p>
																	<p> <label> Font Color: </label> <input class="woolayout-font-color" class="" type="text" name="<?php echo $elements; ?>-settings[color]" value="<?php echo $elements_settings["color"]; ?>"> </p>
																	<p> <label> Font Size: </label> <input class="woolayout-font-size" type="text" name="<?php echo $elements; ?>-settings[font-size]" value="<?php echo $elements_settings["font-size"]; ?>"> </p>
																	<p> <label> Font Weight:  </label>
																		<select class="woolayout-font-weight" name="<?php echo $elements; ?>-settings[font-weight]">
																			<option  value="bold" <?php selected( $elements_settings["font-weight"], "bold" ); ?>> bold  </option>
																			<option  value="bolder" <?php selected( $elements_settings["font-weight"], "bolder" ); ?>> bolder  </option>
																			<option  value="inherit" <?php selected( $elements_settings["font-weight"], "inherit" ); ?>> inherit  </option>
																			<option  value="lighter" <?php selected( $elements_settings["font-weight"], "lighter" ); ?>> lighter  </option>
																			<option  value="normal" <?php selected( $elements_settings["font-weight"], "normal" ); ?>> normal  </option>
																		</select>
																	</p>
																	<p> <label> Font Style:  </label>
																		<select class="woolayout-font-style" name="<?php echo $elements; ?>-settings[font-style]"> 
																			<option  value="inherit" <?php selected( $elements_settings["font-style"], "inherit" ); ?>> inherit  </option>
																			<option  value="italic" <?php selected( $elements_settings["font-style"], "italic" ); ?>> italic  </option>
																			<option  value="normal" <?php selected( $elements_settings["font-style"], "normal" ); ?>> normal  </option>
																			<option  value="oblique" <?php selected( $elements_settings["font-style"], "oblique" ); ?>> oblique  </option>
																		</select>
																	</p>
																	<p> <label> Text Align:  </label>
																		<select class="woolayout-text-align" name="<?php echo $elements; ?>-settings[text-align]"> 
																			<option  value="left" <?php selected( $elements_settings["text-align"], "left" ); ?>> left  </option>
																			<option  value="center" <?php selected( $elements_settings["text-align"], "center" ); ?>> center  </option>
																			<option  value="right" <?php selected( $elements_settings["text-align"], "right" ); ?>> right  </option>
																			<option  value="inherit" <?php selected( $elements_settings["text-align"], "inherit" ); ?>> inherit  </option>
																		</select>
																	</p>
																	<p> <label> Text Transform:  </label>
																		<select class="woolayout-text-transform" type="text" name="<?php echo $elements; ?>-settings[text-transform]"> 
																			<option  value="capitalize" <?php selected( $elements_settings["text-transform"], "capitalize" ); ?>> capitalize  </option>
																			<option  value="inherit" <?php selected( $elements_settings["text-transform"], "inherit" ); ?>> inherit  </option>
																			<option  value="lowercase" <?php selected( $elements_settings["text-transform"], "lowercase" ); ?>> lowercase  </option>
																			<option  value="none" <?php selected( $elements_settings["text-transform"], "none" ); ?>> none  </option>
																			<option  value="uppercase" <?php selected( $elements_settings["text-transform"], "uppercase" ); ?>> uppercase  </option>
																		</select>
																	</p>	
															
															</div>
															<div id="<?php echo $elements; ?>-tab4">
																	<p> <label> Id: </label> <input class="woolayout-id" class="" type="text" name="<?php echo $elements; ?>-settings[id]" value="<?php echo $elements_settings["id"]; ?>"> </p>
																	<p> <label> Class: </label> <input class="woolayout-class" class="" type="text" name="<?php echo $elements; ?>-settings[class]" value="<?php echo $elements_settings["class"]; ?>"> </p>
															</div>
															
														</div>
															
															
														
														<?php
													}
													elseif ( $elements_settings["shortcode"] == "woolayout_meta") {
													
														?>
														
														<div class="woolayout-tabs">
														
															<ul>
																<li> <a href="#<?php echo $elements; ?>-tab1"> Style </a> </li>
																<li> <a href="#<?php echo $elements; ?>-tab2"> Advance Settings </a> </li>
															</ul>
															<div id="<?php echo $elements; ?>-tab1"> 
															
															
																<p> <label> Hide SKU: </label> <input type="checkbox" name="<?php echo $elements; ?>-settings[sku_display]" value="hide" <?php checked( $elements_settings["sku_display"], "hide", true ); ?>> </p>
																<p> <label> SKU Text: </label> <input type="text" name="<?php echo $elements; ?>-settings[sku_text]" value="<?php echo $elements_settings["sku_text"]; ?>"> </p>
																<p> <label> Hide Categories: </label> <input type="checkbox" name="<?php echo $elements; ?>-settings[categories_display]" value="hide" <?php echo "hide" ==  $elements_settings["categories_display"] ? 'checked="checked"' : '' ?> > </p>
																<p> <label> Categories Text: </label> <input type="text" name="<?php echo $elements; ?>-settings[categories_text]" value="<?php echo $elements_settings["categories_text"]; ?>"> </p>
																<p> <label> Hide Tags: </label> <input type="checkbox" name="<?php echo $elements; ?>-settings[tags_display]" value="hide" <?php echo "hide" ==  $elements_settings["tags_display"] ? 'checked="checked"' : '' ?> > </p>
																<p> <label> Tags Text: </label> <input type="text" name="<?php echo $elements; ?>-settings[tags_text]" value="<?php echo $elements_settings["tags_text"]; ?>"> </p>
																
																
															</div>
															<div id="<?php echo $elements; ?>-tab2"> 
																	<p> <label> Id: </label> <input class="woolayout-id" class="" type="text" name="<?php echo $elements; ?>-settings[id]" value="<?php echo $elements_settings["id"]; ?>"> </p>
																	<p> <label> Class: </label> <input class="woolayout-class" class="" type="text" name="<?php echo $elements; ?>-settings[class]" value="<?php echo $elements_settings["class"]; ?>"> </p>
															</div>
															
														</div>
														
														
														<?php
													}
													elseif ( ($elements_settings["shortcode"] == "woolayout_title") || ($elements_settings["shortcode"] == "woolayout_price") || ($elements_settings["shortcode"] == "woolayout_short_description")  ) {
													?>
													<!----- start default element settings --->
														<div class="woolayout-tabs">
														
															<ul>
																<li> <a href="#<?php echo $elements; ?>-tab1"> Style </a> </li>
																<li> <a href="#<?php echo $elements; ?>-tab2"> Advance </a> </li>
															</ul>
															
															<div id="<?php echo $elements; ?>-tab1"> 
																	<p> <label> Font Family: </label> <input class="woolayout-font-family" class="" type="text" name="<?php echo $elements; ?>-settings[font-family]" value="<?php echo $elements_settings["font-family"]; ?>"> </p>
																	<p> <label> Font Color: </label> <input class="woolayout-font-color" class="" type="text" name="<?php echo $elements; ?>-settings[color]" value="<?php echo $elements_settings["color"]; ?>"> </p>
																	<p> <label> Font Size: </label> <input class="woolayout-font-size" type="text" name="<?php echo $elements; ?>-settings[font-size]" value="<?php echo $elements_settings["font-size"]; ?>"> </p>
																	<p> <label> Font Weight:  </label>
																		<select class="woolayout-font-weight" name="<?php echo $elements; ?>-settings[font-weight]">
																			<option  value="bold" <?php selected( $elements_settings["font-weight"], "bold" ); ?>> bold  </option>
																			<option  value="bolder" <?php selected( $elements_settings["font-weight"], "bolder" ); ?>> bolder  </option>
																			<option  value="inherit" <?php selected( $elements_settings["font-weight"], "inherit" ); ?>> inherit  </option>
																			<option  value="lighter" <?php selected( $elements_settings["font-weight"], "lighter" ); ?>> lighter  </option>
																			<option  value="normal" <?php selected( $elements_settings["font-weight"], "normal" ); ?>> normal  </option>
																		</select>
																	</p>
																	<p> <label> Font Style:  </label>
																		<select class="woolayout-font-style" name="<?php echo $elements; ?>-settings[font-style]"> 
																			<option  value="inherit" <?php selected( $elements_settings["font-style"], "inherit" ); ?>> inherit  </option>
																			<option  value="italic" <?php selected( $elements_settings["font-style"], "italic" ); ?>> italic  </option>
																			<option  value="normal" <?php selected( $elements_settings["font-style"], "normal" ); ?>> normal  </option>
																			<option  value="oblique" <?php selected( $elements_settings["font-style"], "oblique" ); ?>> oblique  </option>
																		</select>
																	</p>
																	<p> <label> Text Align:  </label>
																		<select class="woolayout-text-align" name="<?php echo $elements; ?>-settings[text-align]"> 
																			<option  value="left" <?php selected( $elements_settings["text-align"], "left" ); ?>> left  </option>
																			<option  value="center" <?php selected( $elements_settings["text-align"], "center" ); ?>> center  </option>
																			<option  value="right" <?php selected( $elements_settings["text-align"], "right" ); ?>> right  </option>
																			<option  value="inherit" <?php selected( $elements_settings["text-align"], "inherit" ); ?>> inherit  </option>
																		</select>
																	</p>
																	<p> <label> Text Transform:  </label>
																		<select class="woolayout-text-transform" type="text" name="<?php echo $elements; ?>-settings[text-transform]"> 
																			<option  value="capitalize" <?php selected( $elements_settings["text-transform"], "capitalize" ); ?>> capitalize  </option>
																			<option  value="inherit" <?php selected( $elements_settings["text-transform"], "inherit" ); ?>> inherit  </option>
																			<option  value="lowercase" <?php selected( $elements_settings["text-transform"], "lowercase" ); ?>> lowercase  </option>
																			<option  value="none" <?php selected( $elements_settings["text-transform"], "none" ); ?>> none  </option>
																			<option  value="uppercase" <?php selected( $elements_settings["text-transform"], "uppercase" ); ?>> uppercase  </option>
																		</select>
																	</p>
															</div>
															<div id="<?php echo $elements; ?>-tab2">
																	<p> <label> Id: </label> <input class="woolayout-id" class="" type="text" name="<?php echo $elements; ?>-settings[id]" value="<?php echo $elements_settings["id"]; ?>"> </p>
																	<p> <label> Class: </label> <input class="woolayout-class" class="" type="text" name="<?php echo $elements; ?>-settings[class]" value="<?php echo $elements_settings["class"]; ?>"> </p>
															</div>
															
														</div>
															
														<!----- end default element settings --->
														

													<?php
													}
													elseif ( $elements_settings["shortcode"] == "woolayout_data_tabs") {
														?>
															<!----- start data tabs element settings --->
														<div class="woolayout-tabs">
														
															<ul>
																<li> <a href="#<?php echo $elements; ?>-tab1"> General Settings </a> </li>
																<li> <a href="#<?php echo $elements; ?>-tab2"> Add a custom tab  </a> </li>
																<li> <a href="#<?php echo $elements; ?>-tab3"> Advance Settings </a> </li>
															</ul>
															<div id="<?php echo $elements; ?>-tab1"> 
																	<h4> Remove Data Tabs </h4>
																	<p>
																		<input class="woolayout-remove-description-tab" type="checkbox" name="<?php echo $elements; ?>-settings[remove_description_tab]" value="hide" <?php checked( $elements_settings["remove_description_tab"], "hide", true ); ?>> 
																		<label> Remove Description Tab: </label> 
																		
																		<input class="woolayout-remove-reviews-tab" type="checkbox" name="<?php echo $elements; ?>-settings[remove_reviews_tab]" value="hide" <?php checked( $elements_settings["remove_reviews_tab"], "hide", true ); ?>> 
																		<label> Remove Reviews  Tab: </label> 
																		
																		<input class="woolayout-remove-information-tab" type="checkbox" name="<?php echo $elements; ?>-settings[remove_information_tab]" value="hide" <?php checked( $elements_settings["remove_information_tab"], "hide", true ); ?>> 
																		<label> Remove Information Tab: </label> 
																	</p>
																	<h4> Rename Data Tabs </h4>
																	<p> 
																		<label> Rename Description Tab: </label> 
																		<input class="woolayout-rename-description-tab" type="text" name="<?php echo $elements; ?>-settings[rename_description_tab]" value="<?php echo $elements_settings["rename_description_tab"]; ?>"> 
																		<span> Priority: </span> 
																		<input class="woolayout-priority-description-tab" type="text" name="<?php echo $elements; ?>-settings[priority_description_tab]" value="<?php echo $elements_settings["priority_description_tab"]; ?>">
																	</p>
																	<p> <label> Rename Information Tab: </label> 
																		 <input class="woolayout-rename-information-tab"type="text" name="<?php echo $elements; ?>-settings[rename_information_tab]" value="<?php echo $elements_settings["rename_information_tab"]; ?>"> 
																		 <span> Priority: </span> 
																		<input class="woolayout-priority-description-tab" type="text" name="<?php echo $elements; ?>-settings[priority_information_tab]" value="<?php echo $elements_settings["priority_information_tab"]; ?>">
																	</p>		
																	<p> <label> Rename Reviews Tab: </label> 
																		 <input class="woolayout-rename-reviews-tab" type="text" name="<?php echo $elements; ?>-settings[rename_reviews_tab]" value="<?php echo $elements_settings["rename_reviews_tab"]; ?>"> 
																		 <span> Priority: </span> 
																		<input class="woolayout-priority-description-tab" type="text" name="<?php echo $elements; ?>-settings[priority_reviews_tab]" value="<?php echo $elements_settings["priority_reviews_tab"]; ?>">
																	</p>

																	
																	
																	
																	
															</div>
															<div id="<?php echo $elements; ?>-tab2"> 
															
															<?php $content_custom_tab  = get_option('content_custom_tab'); 
															 echo $content_custom_tab; ?>
																	<p>
																		<input class="woolayout-enable-custom-tab" type="checkbox" name="<?php echo $elements; ?>-settings[enable_custom_tab]" value="true" <?php checked( $elements_settings["enable_custom_tab"], "true", true ); ?>> 
																		<label> Enable Custom Tab: </label>
																	</p>
																	<p> 
																		<label>  Rename Custom Tab: </label> 
																		<input class="woolayout-rename-custom-tab" type="text" name="<?php echo $elements; ?>-settings[rename_custom_tab]" value="<?php echo $elements_settings["rename_custom_tab"]; ?>"> 
																		<span> Priority: </span> 
																		<input class="woolayout-priority-custom-tab" type="text" name="<?php echo $elements; ?>-settings[priority_custom_tab]" value="<?php echo $elements_settings["priority_custom_tab"]; ?>">
																	</p>
																	<p> <label>   Custom Tab Content: </label> 
																	
																	<textarea class="woolayout-content-custom-tab" name="<?php echo $elements; ?>-settings[content_custom_tab]" > <?php echo $elements_settings["content_custom_tab"]; ?> </textarea> 
																		
																	</p>
																	
																	
															</div>
															<div id="<?php echo $elements; ?>-tab3"> 
																	<p> <label> Id: </label> <input class="woolayout-id" class="" type="text" name="<?php echo $elements; ?>-settings[id]" value="<?php echo $elements_settings["id"]; ?>"> </p>
																	<p> <label> Class: </label> <input class="woolayout-class" class="" type="text" name="<?php echo $elements; ?>-settings[class]" value="<?php echo $elements_settings["class"]; ?>"> </p>
															</div>
															
														</div>
														<!----- end data tabs element settings --->
														<?php
													}
													elseif ( $elements_settings["shortcode"] == "woolayout_feat_image") {
														?>
														<h2> <?php echo $elements_settings["element"];  ?> </h2>
														
														<div class="woolayout-tabs">
														
															<ul>
																<li> <a href="#<?php echo $elements; ?>-tab1"> Product Images </a> </li>
																<li> <a href="#<?php echo $elements; ?>-tab2"> Sale Flash </a> </li>
																<li> <a href="#<?php echo $elements; ?>-tab3"> Advance Settings </a> </li>
															</ul>
															
															<div id="<?php echo $elements; ?>-tab1">
																	  
																		<p> <label> Image Size: </label>
																			<select class="woolayout-image-size" name="<?php echo $elements; ?>-settings[image_size]">
																				<option  value="thumbnail" <?php selected( $elements_settings["image_size"], "thumbnail" ); ?>> Thumbnail  </option>
																				<option  value="medium" <?php selected( $elements_settings["image_size"], "medium" ); ?>>  Medium  </option>
																				<option  value="medium_large" <?php selected( $elements_settings["image_size"], "medium_large" ); ?>> Medium Large  </option>
																				<option  value="large" <?php selected( $elements_settings["image_size"], "large" ); ?>> Large  </option>
																				<option  value="full" <?php selected( $elements_settings["image_size"], "full" ); ?>> Full  </option>
																				
																				<option  value="shop_thumbnail" <?php selected( $elements_settings["image_size"], "shop_thumbnail" ); ?>> Shop Thumbnail  </option>
																				<option  value="shop_catalog" <?php selected( $elements_settings["image_size"], "shop_catalog" ); ?>> Shop Catalog  </option>
																				<option  value="shop_single" <?php selected( $elements_settings["image_size"], "shop_single" ); ?>> Shop Single  </option>
																			</select>
																		</p>
																		
																		<p> <label> Hover Effect: </label>
																			<select class="woolayout-image-hover" name="<?php echo $elements; ?>-settings[image_hover]">
																				<option  value="hover_1" <?php selected( $elements_settings["image_hover"], "hover_1" ); ?>> Default  </option>
																				<option  value="hover_2" <?php selected( $elements_settings["image_hover"], "hover_2" ); ?>>  Zoom In  </option>
																				<option  value="hover_3" <?php selected( $elements_settings["image_hover"], "hover_3" ); ?>> Flip Box  </option>
																			</select>
																		</p>
																		
																	
															</div>
															<div id="<?php echo $elements; ?>-tab2">
																	<div class="woolayout-checkbox-wrap"> 
																		<label> <?php echo '<img src="' . plugin_dir_url( __FILE__ ) . 'images/sale1.png" > '; ?> </label> 
																		<input class="woolayout-sale-style-1" type="radio" name="<?php echo $elements; ?>-settings[image_sale_style]" value="sale_style_1" <?php checked( $elements_settings["image_sale_style"], "sale_style_1", $true ); ?>> 
																	</div>
																	<div class="woolayout-checkbox-wrap"> 
																		<label> <?php echo '<img src="' . plugin_dir_url( __FILE__ ) . 'images/sale2.png" > '; ?> </label> 
																		<input class="woolayout-sale-style-2" type="radio" name="<?php echo $elements; ?>-settings[image_sale_style]" value="sale_style_2" <?php checked( $elements_settings["image_sale_style"], "sale_style_2", $true ); ?>> 
																	</div>
																	<div class="woolayout-checkbox-wrap"> 
																		<label> <?php echo '<img src="' . plugin_dir_url( __FILE__ ) . 'images/sale3.png" > '; ?> </label> 
																		<label><input class="woolayout-sale-style-3" type="radio" name="<?php echo $elements; ?>-settings[image_sale_style]" value="sale_style_3" <?php checked( $elements_settings["image_sale_style"], "sale_style_3", $true ); ?>> 
																	</div>
																	<div class="woolayout-checkbox-wrap"> 	
																		<label> <?php echo '<img src="' . plugin_dir_url( __FILE__ ) . 'images/sale4.png" > '; ?> </label> 
																		<input class="woolayout-sale-style-4" type="radio" name="<?php echo $elements; ?>-settings[image_sale_style]" value="sale_style_4" <?php checked( $elements_settings["image_sale_style"], "sale_style_4", $true ); ?>> 
																	</div>
																	<div class="woolayout-checkbox-wrap"> 	
																		<label> <?php echo '<img src="' . plugin_dir_url( __FILE__ ) . 'images/sale5.png" > '; ?> </label> 
																		<input class="woolayout-sale-style-5" type="radio" name="<?php echo $elements; ?>-settings[image_sale_style]" value="sale_style_5" <?php checked( $elements_settings["image_sale_style"], "sale_style_5", $true ); ?>> 
																	</div>
																	

															</div>
															<div id="<?php echo $elements; ?>-tab3"> 
																	<p> <label> Id: </label> <input class="woolayout-id" class="" type="text" name="<?php echo $elements; ?>-settings[id]" value="<?php echo $elements_settings["id"]; ?>"> </p>
																	<p> <label> Class: </label> <input class="woolayout-class" class="" type="text" name="<?php echo $elements; ?>-settings[class]" value="<?php echo $elements_settings["class"]; ?>"> </p>
															
															</div>
														
														</div>
														
														
														<?php
													}
													else {
														?>
															<!----- start default element settings --->
														<div class="woolayout-tabs">
														
															<ul>
																<li> <a href="#<?php echo $elements; ?>-tab1"> Advance Settings </a> </li>
															</ul>
														
															<div id="<?php echo $elements; ?>-tab1"> 
																	<p> <label> Id: </label> <input class="woolayout-id" class="" type="text" name="<?php echo $elements; ?>-settings[id]" value="<?php echo $elements_settings["id"]; ?>"> </p>
																	<p> <label> Class: </label> <input class="woolayout-class" class="" type="text" name="<?php echo $elements; ?>-settings[class]" value="<?php echo $elements_settings["class"]; ?>"> </p>
															</div>
															
														</div>
														<!----- end default element settings --->
														
														<?php
													}
													?>
														
														</div>
												
									<!----- end elements dialog ------>
									
												</div>
												
											<?php
											
												}
										
										}
											
									
									?>
									
									</div>
								
								<?php
								
							}
							}
						?>
					
			
			
  
		
		</div>
	

	
<?php
	}
?>




	</div>

  </div>
  
 

<div id="woolayout-dialog-open" class="woolayout-dialog"> </div>


		<div class="woolayout-submit">
		<?php submit_button(); ?>
		</div>
	
	</form>
	
	</div>
</div>
	
<?php	

ob_end_flush();

}	




?>