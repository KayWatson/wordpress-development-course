<?php
/*
Plugin Name: Add Multiple Pages
Plugin URI: 
Version: 1.0
Description: Add multiple pages at once with one quick and easy form!  
License: GNU General Public License v2 or later
*/

//Add 'Multiple Pages' as a Page Menu item//
add_action('admin_menu', 'klw_add_multiple_pages_menu');

//enqueue styles
function klw_add_multiple_pages_styles(){
		wp_register_style('klw-add-multiple-pages-css',WP_PLUGIN_URL.'/add-multiple-pages-plugin/styles.css');
		wp_enqueue_style('klw-add-multiple-pages-css');
}

add_action('klw_styles', 'klw_add_multiple_pages_styles');

//Populates the Page with content//
function klw_add_multiple_pages_menu() {
	add_pages_page('Multiple Page Creator', 'Add Multiple', 'read', 'add-multiple', 'klw_multiple_page');
}

function klw_multiple_page() {
	?>
	<div class="wrap">
	<div id="icon-edit-pages" class="icon32 icon32-posts-page"><br></div>
	<h2><?php _e('Add Multiple Pages','klw');?></h2>
	<p><?php _e('Use the form below to add multiple pages to the site at one time. You may add up to five pages at once!','klw');?></p>
	<form id="klw-add-pages" name="klw-add-pages" method="post" action="">
		<table style= "margin-bottom:40px; background-color: #E0E0E0; padding: 15px;">
					<tr>
						<td><strong><?php _e('Page Name','klw');?></strong></td>
						<td><strong><?php _e('Order','klw');?></strong></td>
						<td><strong><?php _e('Parent','klw');?></strong></td>
						<td><strong><?php _e( 'Status','klw');?></strong></td>
					</tr>
					<tr>
						<td><input size="29" type="text" id="klw-page-name" name="klw-page-name" />
						</td>
						<td><label class= "screen-reader-text" for="menu_order"><?php _e('Order','klw');?></label>
							<input name= "menu_order" type="text" size="4" id="menu_order" value="0">
						</td>
						<td id="page_ids">
							<?php wp_dropdown_pages('sort_column=menu_order&post_status=draft,publish&show_option_none=(No Parent)');?>
						</td>
						<td>
							<select id="posttype" name="posttype">
								<option value="publish"><?php _e('published','klw');?></option>
								<option value="draft"><?php _e('draft','klw');?></option>
							</select>	
						</td>
					</tr>
					<tr>
						<td><strong><?php _e('Content','klw');?></strong></td>
					</tr>
					<tr>
						<td colspan= "4"><textarea cols="70" rows="5" id="klw-pages-content" name="klw-pages-content"></textarea></td>
					</tr>
		</table>		
		<table style= "margin-bottom:40px; background-color: #E0E0E0; padding: 15px;">
					<tr>
						<td><strong><?php _e('Page Name','klw');?></strong></td>
						<td><strong><?php _e('Order','klw');?></strong></td>
						<td><strong><?php _e('Parent','klw');?></strong></td>
						<td><strong><?php _e( 'Status','klw');?></strong></td>
					</tr>
					<tr>
						<td><input size="29" type="text" id="klw-page-name" name="klw-page-name" />
						</td>
						<td><label class= "screen-reader-text" for="menu_order"><?php _e('Order','klw');?></label>
							<input name= "menu_order" type="text" size="4" id="menu_order" value="0">
						</td>
						<td id="page_ids">
							<?php wp_dropdown_pages('sort_column=menu_order&post_status=draft,publish&show_option_none=(No Parent)');?>
						</td>
						<td>
							<select id="posttype" name="posttype">
								<option value="publish"><?php _e('published','klw');?></option>
								<option value="draft"><?php _e('draft','klw');?></option>
							</select>	
						</td>
					</tr>
					<tr>
						<td><strong><?php _e('Content','klw');?></strong></td>
					</tr>
					<tr>
						<td colspan= "4"><textarea cols="70" rows="5" id="klw-pages-content" name="klw-pages-content"></textarea></td>
					</tr>
		</table>		
		<table style= "margin-bottom:40px; background-color: #E0E0E0; padding: 15px;">
					<tr>
						<td><strong><?php _e('Page Name','klw');?></strong></td>
						<td><strong><?php _e('Order','klw');?></strong></td>
						<td><strong><?php _e('Parent','klw');?></strong></td>
						<td><strong><?php _e( 'Status','klw');?></strong></td>
					</tr>
					<tr>
						<td><input size="29" type="text" id="klw-page-name" name="klw-page-name" />
						</td>
						<td><label class= "screen-reader-text" for="menu_order"><?php _e('Order','klw');?></label>
							<input name= "menu_order" type="text" size="4" id="menu_order" value="0">
						</td>
						<td id="page_ids">
							<?php wp_dropdown_pages('sort_column=menu_order&post_status=draft,publish&show_option_none=(No Parent)');?>
						</td>
						<td>
							<select id="posttype" name="posttype">
								<option value="publish"><?php _e('published','klw');?></option>
								<option value="draft"><?php _e('draft','klw');?></option>
							</select>	
						</td>
					</tr>
					<tr>
						<td><strong><?php _e('Content','klw');?></strong></td>
					</tr>
					<tr>
						<td colspan= "4"><textarea cols="70" rows="5" id="klw-pages-content" name="klw-pages-content"></textarea></td>
					</tr>
		</table>		
		<table style= "margin-bottom:40px; background-color: #E0E0E0; padding: 15px;">
					<tr>
						<td><strong><?php _e('Page Name','klw');?></strong></td>
						<td><strong><?php _e('Order','klw');?></strong></td>
						<td><strong><?php _e('Parent','klw');?></strong></td>
						<td><strong><?php _e( 'Status','klw');?></strong></td>
					</tr>
					<tr>
						<td><input size="29" type="text" id="klw-page-name" name="klw-page-name" />
						</td>
						<td><label class= "screen-reader-text" for="menu_order"><?php _e('Order','klw');?></label>
							<input name= "menu_order" type="text" size="4" id="menu_order" value="0">
						</td>
						<td id="page_ids">
							<?php wp_dropdown_pages('sort_column=menu_order&post_status=draft,publish&show_option_none=(No Parent)');?>
						</td>
						<td>
							<select id="posttype" name="posttype">
								<option value="publish"><?php _e('published','klw');?></option>
								<option value="draft"><?php _e('draft','klw');?></option>
							</select>	
						</td>
					</tr>
					<tr>
						<td><strong><?php _e('Content','klw');?></strong></td>
					</tr>
					<tr>
						<td colspan= "4"><textarea cols="70" rows="5" id="klw-pages-content" name="klw-pages-content"></textarea></td>
					</tr>
		</table>		
		<table style= "margin-bottom:40px; background-color: #E0E0E0; padding: 15px;">
					<tr>
						<td><strong><?php _e('Page Name','klw');?></strong></td>
						<td><strong><?php _e('Order','klw');?></strong></td>
						<td><strong><?php _e('Parent','klw');?></strong></td>
						<td><strong><?php _e( 'Status','klw');?></strong></td>
					</tr>
					<tr>
						<td><input size="29" type="text" id="klw-page-name" name="klw-page-name" />
						</td>
						<td><label class= "screen-reader-text" for="menu_order"><?php _e('Order','klw');?></label>
							<input name= "menu_order" type="text" size="4" id="menu_order" value="0">
						</td>
						<td id="page_ids">
							<?php wp_dropdown_pages('sort_column=menu_order&post_status=draft,publish&show_option_none=(No Parent)');?>
						</td>
						<td>
							<select id="posttype" name="posttype">
								<option value="publish"><?php _e('published','klw');?></option>
								<option value="draft"><?php _e('draft','klw');?></option>
							</select>	
						</td>
					</tr>
					<tr>
						<td><strong><?php _e('Content','klw');?></strong></td>
					</tr>
					<tr>
						<td colspan= "4"><textarea cols="70" rows="5" id="klw-pages-content" name="klw-pages-content"></textarea></td>
					</tr>
		</table>		
		
		
						<input onclick="klw_add_page();" type="button" class="button-secondary" value="Add Page" />
						<input type="submit" class="button-primary" value="Update Site" />
				</form>
				</div>

<?php } 

