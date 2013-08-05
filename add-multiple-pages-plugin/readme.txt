=== Add Multiple Pages ===
Contributors: Kay Watson
Tags: add,multiple,pages,admin,page directory
Requires at least: 3.0.1
Tested up to: 3.4
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin makes adding and accessing multiple pages quick and easy. The 'Pages' dropdown offers
an add multiple pages feature and after each page has been created, the list of pages will also display in
the dropdown as a directory for quick access. 


== Description ==
The Add Multiple Pages plugin creates a better user experience for creating multiple pages and accessing each page with one click.
Once the plugin is installed, a new option titled 'Add Multiple' will be displayed under the 'Pages' menu in the WordPress user admin.
Within this option, the user will see a simpler version of the 'Add New Page' user interface. 
After each component is attended to, the user can choose to 'Add Another Page' or 'Save Changes' with the click of a button.  

What it will have:
The UI will include an empty textfield to enter a page name, a dropdown menu for assigning a parent to the page, a dropdown for template style, 
and a textfield for page order number. These features come directly from the current 'Page Attributes' section within the 'Add New Page' UI.

What it will not have: 
To make this feature simple and less time-consuming, the 'Add Multiple Pages' option will not include every aspect of the 'Add New Pages' UI.
It will not provide a textarea for the user to write content or add media to the page. 
The 'Publish' section will not be included in the 'Add Multiple' UI. 
The 'Featured Image' section will not be included in the 'Add Multiple' UI. 
All of these features will become available when the user has selected a specific page to edit. 

After multiple pages have been created:
Once the user has completed adding multiple pages and has saved the changes, the pages will be listed under the 'Pages' menu dropdown
along with 'All Pages', 'Add New', and 'Add Multiple'. From here, the user can select a page to edit and publish without the obstacle of 
going through 'All Pages' to find a specific page.  



A few notes about the sections above:

*   "Contributors" is a comma separated list of wp.org/wp-plugins.org usernames
*   "Tags" is a comma separated list of tags that apply to the plugin
*   "Requires at least" is the lowest version that the plugin will work on
*   "Tested up to" is the highest version that you've *successfully used to test the plugin*. Note that it might work on
higher versions... this is just the highest one you've verified.
*   Stable tag should indicate the Subversion "tag" of the latest stable version, or "trunk," if you use `/trunk/` for
stable.

    Note that the `readme.txt` of the stable tag is the one that is considered the defining one for the plugin, so
if the `/trunk/readme.txt` file says that the stable tag is `4.3`, then it is `/tags/4.3/readme.txt` that'll be used
for displaying information about the plugin.  In this situation, the only thing considered from the trunk `readme.txt`
is the stable tag pointer.  Thus, if you develop in trunk, you can update the trunk `readme.txt` to reflect changes in
your in-development version, without having that information incorrectly disclosed about the current stable version
that lacks those changes -- as long as the trunk's `readme.txt` points to the correct stable tag.

    If no stable tag is provided, it is assumed that trunk is stable, but you should specify "trunk" if that's where
you put the stable version, in order to eliminate any doubt.

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload `add-multiple-pages.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<?php do_action('add-multiple-pages'); ?>` in your templates

== Frequently Asked Questions ==

= How does this effect the 'Add New' option? =

It doesn't. You will still have that option availible to you.

= How many pages can I create at once? =

As many as your heart desires!

= How do I edit one of the pages that I've just created? =

After you've created your pages and saved changes, you will see them listed in the dropdown menu under 'Pages'.
You can select the page you wish to edit and you will be taken to that page's 'Edit Page' screen. 

== Screenshots ==

1. screenshot-1.jpg displays the Page dropdown menu that includes 'Add Multiple'
2. screenshot-2.jpg displays the form for the 'Add Multiple' page
3. screenshot-3.jpg displays the pages created with 'Add Multiple' under the 'Page' menu


== Changelog ==

= 1.0 =
* A change since the previous version.
* Another change.

= 0.5 =
* List versions from most recent at top to oldest at bottom.

== Upgrade Notice ==

= 1.0 =
Upgrade notices describe the reason a user should upgrade.  No more than 300 characters.

= 0.5 =
This version fixes a security related bug.  Upgrade immediately.

== Arbitrary section ==

You may provide arbitrary sections, in the same format as the ones above.  This may be of use for extremely complicated
plugins where more information needs to be conveyed that doesn't fit into the categories of "description" or
"installation."  Arbitrary sections will be shown below the built-in sections outlined above.

== A brief Markdown Example ==

Ordered list:

1. Some feature
1. Another feature
1. Something else about the plugin

Unordered list:

* something
* something else
* third thing

Here's a link to [WordPress](http://wordpress.org/ "Your favorite software") and one to [Markdown's Syntax Documentation][markdown syntax].
Titles are optional, naturally.

[markdown syntax]: http://daringfireball.net/projects/markdown/syntax
            "Markdown is what the parser uses to process much of the readme file"

Markdown uses email style notation for blockquotes and I've been told:
> Asterisks for *emphasis*. Double it up  for **strong**.

`<?php code(); // goes in backticks ?>`