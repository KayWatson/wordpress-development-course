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


//Saves Form and Adds New Pages
function klw_insert_pages(){
	if(!empty($_POST)) {
		if(isset($_POST['klw-page-name1'])||isset($_POST["klw-page-name2"])||isset($_POST["klw-page-name3"])||isset($_POST["klw-page-name4"])||isset($_POST["klw-page-name5"])){
	   		klw_save_form($_POST);
	   	}
	}

}
add_action('admin_menu', 'klw_insert_pages');

//Enqueue Styles
function klw_add_multiple_pages_styles(){
		wp_register_style('klw-add-multiple-pages-css',WP_PLUGIN_URL.'/add-multiple-pages-plugin/styles.css');
		wp_enqueue_style('klw-add-multiple-pages-css');
}
add_action('wp_header', 'klw_add_multiple_pages_styles');

//Create Multiple Page Menu Item//
function klw_add_multiple_pages_menu() {
	add_pages_page('Multiple Page Creator', 'Add Multiple', 'read', 'add-multiple', 'klw_multiple_page');
}

function klw_multiple_page() {
	?>
	<div class="wrap">
		<div id="icon-edit-pages" class="icon32 icon32-posts-page"></div>
		<h2><?php _e('Add Multiple Pages','klw');?></h2>
		<p><?php _e('Use the form below to add multiple pages to the site at one time. You may add up to five pages at once!','klw');?></p>
		<form id="klw-add-pages" name="klw-add-pages" method="post" action="">
			<!--Table for Page 1-->	
			<table style= "margin-bottom:40px; background-color: #E0E0E0; padding: 15px;">
				<tr>
					<td><strong><?php _e('Page Name','klw');?></strong></td>
					<td><strong><?php _e('Order','klw');?></strong></td>
					<td><strong><?php _e('Parent','klw');?></strong></td>
					<td><strong><?php _e( 'Status','klw');?></strong></td>
				</tr>
				<tr>
					<td>
						<input size="29" type="text" id="klw-page-name1" name="klw-page-name1"/>
					</td>
					<td>
						<label class= "screen-reader-text" for="menu_order"><?php _e('Order','klw');?></label>
						<input name= "menu_order" type="text" size="4" id="menu_order" value="0">
					</td>
					<td id="page_id">
						<?php wp_dropdown_pages('name=page_parent&sort_column=menu_order&post_status=draft,publish&show_option_none=(No Parent)');?>
					</td>
					<td>
						<select id="posttype" name="posttype">
							<option value="publish"><?php _e('published','klw');?></option>
							<option value="draft"><?php _e('draft','klw');?></option>
						</select>	
					</td>
				</tr>
				<tr>
					<td>
						<strong><?php _e('Content','klw');?></strong>
					</td>
				</tr>
				<tr>
					<td colspan= "4"><textarea cols="70" rows="5" id="klw-content1" name="klw-content1"></textarea></td>
				</tr>
			</table>
			<!--End Table for Page 1-->
			<!--Table for Page 2-->
			<table style= "margin-bottom:40px; background-color: #E0E0E0; padding: 15px;">
				<tr>
					<td><strong><?php _e('Page Name','klw');?></strong></td>
					<td><strong><?php _e('Order','klw');?></strong></td>
					<td><strong><?php _e('Parent','klw');?></strong></td>
					<td><strong><?php _e( 'Status','klw');?></strong></td>
				</tr>
				<tr>
					<td>
						<input size="29" type="text" id="klw-page-name2" name="klw-page-name2"/>
					</td>
					<td>
						<label class= "screen-reader-text" for="menu_order"><?php _e('Order','klw');?></label>
						<input name= "menu_order" type="text" size="4" id="menu_order" value="0">
					</td>
					<td id="page_id">
						<?php wp_dropdown_pages('name=page_parent2&sort_column=menu_order&post_status=draft,publish&show_option_none=(No Parent)');?>
					</td>
					<td>
						<select id="posttype2" name="posttype2">
							<option value="publish"><?php _e('published','klw');?></option>
							<option value="draft"><?php _e('draft','klw');?></option>
						</select>	
					</td>
				</tr>
				<tr>
					<td>
						<strong><?php _e('Content','klw');?></strong>
					</td>
				</tr>
				<tr>
					<td colspan= "4"><textarea cols="70" rows="5" id="klw-content2" name="klw-content2"></textarea></td>
				</tr>
			</table>
			<!--End Table for Page 2-->
			<!--Table for Page 3-->
			<table style= "margin-bottom:40px; background-color: #E0E0E0; padding: 15px;">
				<tr>
					<td><strong><?php _e('Page Name','klw');?></strong></td>
					<td><strong><?php _e('Order','klw');?></strong></td>
					<td><strong><?php _e('Parent','klw');?></strong></td>
					<td><strong><?php _e('Status','klw');?></strong></td>
				</tr>
				<tr>
					<td>
						<input size="29" type="text" id="klw-page-name3" name="klw-page-name13"/>
					</td>
					<td>
						<label class= "screen-reader-text" for="menu_order"><?php _e('Order','klw');?></label>
						<input name= "menu_order" type="text" size="4" id="menu_order" value="0">
					</td>
					<td id="page_id">
						<?php wp_dropdown_pages('name=page_parent3&sort_column=menu_order&post_status=draft,publish&show_option_none=(No Parent)');?>
					</td>
					<td>
						<select id="posttype3" name="posttype3">
							<option value="publish"><?php _e('published','klw');?></option>
							<option value="draft"><?php _e('draft','klw');?></option>
						</select>	
					</td>
				</tr>
				<tr>
					<td>
						<strong><?php _e('Content','klw');?></strong>
					</td>
				</tr>
				<tr>
					<td colspan= "4"><textarea cols="70" rows="5" id="klw-content3" name="klw-content3"></textarea></td>
				</tr>
			</table>
			<!--End Table for Page 3-->
			<!--Table for Page 4-->
			<table style= "margin-bottom:40px; background-color: #E0E0E0; padding: 15px;">
				<tr>
					<td><strong><?php _e('Page Name','klw');?></strong></td>
					<td><strong><?php _e('Order','klw');?></strong></td>
					<td><strong><?php _e('Parent','klw');?></strong></td>
					<td><strong><?php _e('Status','klw');?></strong></td>
				</tr>
				<tr>
					<td>
						<input size="29" type="text" id="klw-page-name4" name="klw-page-name4"/>
					</td>
					<td>
						<label class= "screen-reader-text" for="menu_order"><?php _e('Order','klw');?></label>
						<input name= "menu_order" type="text" size="4" id="menu_order" value="0">
					</td>
					<td id="page_id">
						<?php wp_dropdown_pages('name=page_parent4&sort_column=menu_order&post_status=draft,publish&show_option_none=(No Parent)');?>
					</td>
					<td>
						<select id="posttype4" name="posttype4">
							<option value="publish"><?php _e('published','klw');?></option>
							<option value="draft"><?php _e('draft','klw');?></option>
						</select>	
					</td>
				</tr>
				<tr>
					<td>
						<strong><?php _e('Content','klw');?></strong>
					</td>
				</tr>
				<tr>
					<td colspan= "4"><textarea cols="70" rows="5" id="klw-content4" name="klw-content4"></textarea></td>
				</tr>
			</table>
			<!--End Table for Page 4-->
			<!--Table for Page 5-->
			<table style= "margin-bottom:40px; background-color: #E0E0E0; padding: 15px;">
				<tr>
					<td><strong><?php _e('Page Name','klw');?></strong></td>
					<td><strong><?php _e('Order','klw');?></strong></td>
					<td><strong><?php _e('Parent','klw');?></strong></td>
					<td><strong><?php _e('Status','klw');?></strong></td>
				</tr>
				<tr>
					<td>
						<input size="29" type="text" id="klw-page-name5" name="klw-page-name5"/>
					</td>
					<td>
						<label class= "screen-reader-text" for="menu_order"><?php _e('Order','klw');?></label>
						<input name= "menu_order" type="text" size="4" id="menu_order" value="0">
					</td>
					<td id="page_id">
						<?php wp_dropdown_pages('name=page_parent5&sort_column=menu_order&post_status=draft,publish&show_option_none=(No Parent)');?>
					</td>
					<td>
						<select id="posttype5" name="posttype5">
							<option value="publish"><?php _e('published','klw');?></option>
							<option value="draft"><?php _e('draft','klw');?></option>
						</select>	
					</td>
				</tr>
				<tr>
					<td>
						<strong><?php _e('Content','klw');?></strong>
					</td>
				</tr>
				<tr>
					<td colspan= "4"><textarea cols="70" rows="5" id="klw-content5" name="klw-content5"></textarea></td>
				</tr>
			</table>		
				<input type="submit" class="button-primary" value="Update Site"/>
		</form>
	</div>

<?php } 


function klw_save_form($post){

    // Do not save during autosave routines
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ){
        return;
	}
    //Insert Post Args
    	$newpage = array();

    	if(isset($_POST['page_parent'])){
    		$parent1 = $_POST['page_parent'];
    	} else {
    		$parent1 = '';
    	}

	    $args1 = array(
			'post_type'    => 'page',
			'post_status'  => $_POST['posttype'],
			'post_parent'  => $parent1,
			'post_title'   => $_POST['klw-page-name1'],
			'post_content' => $_POST['klw-content1'],
			'menu_order'   => $_POST['menu_order']
		);
			
		if(isset($_POST['page_parent'])){
    		$parent2 = $_POST['page_parent2'];
    	} else {
    		$parent2 = '';
    	}

		 $args2 = array(
		 	'post_type'    => 'page',
		 	'post_status'  => $_POST['posttype2'],
		 	'post_parent' => $parent2,
		 	'post_title'   => $_POST['klw-page-name2'],
		 	'post_content' => $_POST['klw-content2'],
		 	'menu_order'   => $_POST['menu_order2']
		 );

		if(isset($_POST['page_parent'])){
    		$parent3 = $_POST['page_parent3'];
    	} else {
    		$parent3 = '';
    	}

		  $args3 = array(
		 	'post_type'    => 'page',
		 	'post_status'  => $_POST['posttype3'],
		 	'post_parent'  => $parent3,
		 	'post_title'   => $_POST['klw-page-name3'],
		 	'post_content' => $_POST['klw-content3'],
		 	'menu_order'   => $_POST['menu_order3']
		 );
		 
		if(isset($_POST['page_parent'])){
    		$parent4 = $_POST['page_parent4'];
    	} else {
    		$parent4 = '';
    	}

	     $args4 = array(
		 	'post_type'    => 'page',
		 	'post_status'  => $_POST['posttype4'],
		 	'post_parent'  => $parent4,
		 	'post_title'   => $_POST['klw-page-name4'],
		 	'post_content' => $_POST['klw-content4'],
		 	'menu_order'   => $_POST['menu_order4']
		 );
	     
		if(isset($_POST['page_parent'])){
    		$parent5 = $_POST['page_parent5'];
    	} else {
    		$parent5 = '';
    	}
    	
	     $args5 = array(
		 	'post_type'    => 'page',
		 	'post_status'  => $_POST['posttype5'],
		 	'post_parent'  => $parent5,
		 	'post_title'   => $_POST['klw-page-name5'],
		 	'post_content' => $_POST['klw-content5'],
		 	'menu_order'   => $_POST['menu_order5']
		 );

		if(isset($_POST['klw-page-name1']) && $_POST['klw-page-name1'] != ''){
			$newpage[0] = wp_insert_post($args1);	
		}

		if(isset($_POST['klw-page-name2']) && $_POST['klw-page-name2'] != ''){		
			$newpage[1] = wp_insert_post($args2);
		}

		if(isset($_POST['klw-page-name3']) && $_POST['klw-page-name3'] != ''){
			$newpage[2] = wp_insert_post($args3);
		}
 
		if(isset($_POST['klw-page-name4']) && $_POST['klw-page-name4'] != ''){
			$newpage[3] = wp_insert_post($args4);
		}

		if(isset($_POST['klw-page-name5']) && $_POST['klw-page-name5'] != ''){
			$newpage[4] = wp_insert_post($args5);
		}	
}


