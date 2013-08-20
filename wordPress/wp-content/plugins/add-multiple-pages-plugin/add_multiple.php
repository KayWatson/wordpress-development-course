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


//Populates the Page with content//
function klw_add_multiple_pages_menu() {
	add_pages_page('Multiple Page Creator', 'Add Multiple', 'read', 'add-multiple', 'multiple_page');
}

function multiple_page() {
	echo '<h1>Add Multiple Pages</h1>'; 
	echo '<p>Use the form below to add multiple pages to the site at one time. No muss, no fuss.</p>';
	echo '<table>
				<tr>
					<td>Page Name</td>
					<td>Parent</td>
				</tr>
				<tr>
					<td><input size="29" type="text" id="klw-page-name" name="klw-page-name" /></td>
					<td id="page_ids">
						<?php wp_dropdown_pages("sort_column=menu_order&post_status=draft,publish&show_option_none=(No Parent)"); ?>
					</td>
				</tr>
			</table>';
		echo'<form id="klw-add-pages" name="klw-add-pages" method="post" action="?page=<?php echo $_GET["page"]; ?>
				<textarea id="klw-pages" name="klw-pages" style="display:none;"></textarea>
				<select id="pcontent" name="pcontent">
					<option value="1">Create Empty Pages</option>
					<option value="2">Set Pages Content</option>
				</select>
				 <select id="posttype" name="posttype">
					<option value="publish">published</option>
					<option value="draft">draft</option>
				</select><br /><br />
				<div id="klw-pages-content-div" style="display:none;">
					<p>
						You can specify default content for all the pages in the text area below.<br />
						You can also use the [pagetitle] short code to add a H1 (header) tag with the individual page title...
					</p>
					<textarea cols="60" rows="5" id="klw-pages-content" name="klw-pages-content"></textarea><br /><br />
				</div>
				<input onclick="klw_add_page();" type="button" class="button-secondary" value="Add Pages" />
				<input type="submit" class="button-primary" value="Update Site" />
			</form>';


} ?>