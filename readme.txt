=== Plugin Name ===
Plugin Name: WP Symposium Toolbar
Description: The Ultimate Toolbar Plugin - And the WordPress Toolbar can finally be part of your site.
Author: AlphaGolf_fr
Contributors: AlphaGolf_fr, Central Geek
Donate Link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=3DELJEHZEFGHQ
Tags: toolbar, adminbar, bar, navigation, nav-menu, menu, menus, theme, brand, branding, members, membership
Requires at least: 4.3
Tested up to: 4.3.1
Stable tag: 0.33.0
Version: 0.33.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==

Customize the WordPress Toolbar the way *you* want...

This plugin is targetted for WP Symposium sites.  However, if you're not running a Social Network site but you're willing to customize the Toolbar, you may use this plugin and benefit from its generic per-role settings, its custom menus, as well as its styling settings.  Give this plugin a try!

= In a nutshell =
When I began this project, I was aiming at primarily providing WP Symposium sites with a little more functionality.  I needed to ensure WP Symposium is actually activated, and what was initially a safeguard eventually became a feature : WP Symposium Toolbar can function as a stand alone plugin as well as integrate with WP Symposium.  Looking at the result, I'd like to stress that the scope of the generic options of this plugin by far exceeds those dedicated to WP Symposium sites solely...

Brand the Toolbar: put your logo over your menu at your colours.  Gather personal information in one place: in the top right corner of the Toolbar, leaving room in the site for its actual content.  Determine which information will be displayed in the Toolbar to each role of your site: hide unneeded information to your members, and eventually hide the backend of the site.  Provide navigation from the Toolbar via per role access to custom menus: control which roles can access which parts of your site.  Show the Toolbar to non logged-in members, with links to your Login page along with a custom Howdy message.  Multisite wise: each site of your network can have individual links and styles, or your network can function as though it is one big site.  On top of all this, style the Toolbar beyond the limits of your imagination: colours, gradients, shadow, fonts can all be changed from the Styles settings page, which by the way has a nice real-time preview mode for you to play with the styling before actually saving...

You are no longer bound to showing to your members information you don't want them to see.  You are no longer bound to using just a theme navbar for navigating your site, or network of sites.  You are no longer bound to displaying that dark bar that doesn't fit with the overall look of your site.  You are no longer bound to configuring several plugins to make the Toolbar at your wishes.

My warm thanks go to Louis, my friend at [Central Geek](http://centralgeek.com), for his help in specifying and testing the plugin.  He's always been available with wise advices whenever I was needing them, so that WPS Toolbar is as much his plugin as it is mine.

Now the usual bulleted list of features...

= Features =
* Decide to show or hide each of the default items in the WordPress Toolbar: site-related, content-related and user-related items
* Create your custom menus using the WordPress NavMenus page, and add them to the WP Toolbar, along with your custom icons on top of menus
* Per-role management for most of the settings, items and menus, adding visitors to the roles of the site
* Redesign the WP User Menu ("My Account"), by selecting each of its default items individually and adding your own custom items
* WP Symposium sites - Add links to WP Symposium to the WP Toolbar, providing single-click access to WP Symposium from anywhere in your WordPress site
* WP Symposium sites - Notify your users of new mails and new friend requests, while linking to their WP Symposium mailbox and friends' list
* Add share icons to the Toolbar, so that your members and visitors can share your site with their preferred social network
* Style the Toolbar your way: custom colours, gradient, transparency, shadow, fonts, for the Toolbar and its menus
* Real-time preview mode at the styling page  :-)
* Import / export the plugin settings, ideal for backups or exchanging those settings accross your sites

== Installation ==

= Installing the plugin =

Use the WordPress feature to install the plugin from the WP Dashboard, Plugins > Add New.  Search for the plugin by its name, or alternatively, upload the plugin as a ZIP file downloaded from wordpress.org.

A WP Symposium Toolbar plugin should then be available in the 'Plugins' menu in WordPress: activate the plugin.

= Configuring the plugin for your site =

A new menu item will appear in the WP Dashboard, called "Toolbar", where you will find options for the plugin.  The plugin default settings are relatively conservative, hence upon activation you shouldn't notice much difference in the Toolbar: once the plugin is activated, you should visit the options page, and modify these options so they fit your needs.  Please refer to the help tabs of the options page for more information.

If you're running WP Symposium, the first activation of the plugin will create default items in the WordPress Toolbar:

* For users, it'll add menu items under the WP User Menu on the upper right corner of the screen, and notification icons for mails and friend requests close to that WP User Menu.
* It will also add an Admin Menu with links to WP Symposium settings pages, visible only by site admins.  The content is that of the WP Dashboard sidebar menu for WP Symposium, you cannot edit it, only show or hide the whole menu.

Whether you're running WP Symposium or not, the first activation of the plugin will create one menu, with links to the Login / Register / Lost Password pages, as defined on your site.

You may, of course, modify these settings, create your own custom menus, edit the default ones, and eventually remove them from the WP Toolbar.

= Sorting out issues =

If you're running WP Symposium, remember to visit the WP Symposium Install page "after you add a WP Symposium shortcode to a page; change pages with WP Symposium shortcodes; if you change WordPress Permalinks" (as stated by WP Symposium), that will re-generate the WP Symposium Admin menu in the Toolbar.

For custom menus, WPS Toolbar has known issues with plugins/themes that filter menu items on a per-role basis.  In general, this is achieved through a field stored as a page metadata of any given name, and WPS Toolbar simply cannot find this information.

In general, if you notice odd things with the plugin, visit the Options page, and save the options (even unchanged), that will trigger a few cleanup tasks.

= Removing the plugin from your site =

I would be really sorry to hear that you are not happy with this plugin, but whatever the reason is, you should know that the uninstall process will not remove NavMenus that were created for the Toolbar, since they could be used somewhere else in your site. Therefore, after uninstalling the plugin, please visit the NavMenus page at Appearance > Menus, and remove manually the menus you are no longer using.

== Frequently Asked Questions ==

= When do I need this plugin? =

You need this plugin when you'd like to take advantage from its main features: per-role settings and custom menus, as well as its styling settings. When you'd like to hide some of the WP Toolbar default items: the WP logo, the Comments icon (e.g. if comments are totally deactivated on your site, or replaced with a forum), the authors' icons  (e.g. if your theme provides these links lower in the page). When you'd like to add or remove items from the User Menu. When you'd like to add a corporate menu in the upper left corner with your own icon. When you'd like to add navigation functionality to the Toolbar. When you'd like the Toolbar to show different information and links based on membership level. Etc...

= When don't I need this plugin? =

You don't need this plugin if your sole aim is to hide the WP Toolbar. There are other, smaller plugins that are targetted for that, or eventually you could achieve this with a few lines in your theme's functions.php file - google it.

= With such a level of functionalities, this plugin must be a resources hog? =

Performances have been addressed as best as possible. Most of the job of the plugin is performed off-line upon saving options from the options page. The remaining, dynamic part of the job is performed at page load: all it has to do is take the information or menu, and send it for display if the user can access it.

= I have activated your plugin, set the option to show the Toolbar to my role, however I can't see the Toolbar in the frontend ! =

In WPS Toolbar settings, make sure the Toolbar should actually show for the role you are using.  Even if you already did this, check again.

There's a personal setting in the WP profile page for each user to show or hide it independantly, so if the Toolbar is hidden from there, it won't show.  The plugin may enforce this, through its setting "Force the display of the WP Toolbar" from the "Toolbar" tab.  When activated, the user setting will be hidden from the WP profile page and the Toolbar will be focibly displayed for selected roles.

Some themes will interfere with the WP Toolbar, some will even stop it from showing at all.  Likewise for plugins, but you should be a little more aware of what the plugins you installed do.  If unsure, switch to the WordPress default theme, deactivate all plugins but WPS Toolbar.  If the Toolbar now shows in the frontend, reactivate them one by one until you found the conflict.

= According to my settings, the admin role should see the Search icon, however I can't see it ! =

It will show only in the frontend and not in the backend, have you checked in the frontend, really ?

== Screenshots ==

1. Share your thoughts with the World under your custom Toolbar: gradients, transparency, colorful...
2. Make the WP Toolbar match your theme using a wide variety of possibilities for colours, sizes, etc.
3. Under the WP Help tabs, the first section of the options allows selecting Toolbar items for each role of your site
4. Create your custom User Menu ("My Account"), here in a minimalist set to which the WPS Profile menu was attached, displayed along with notification icons for WP Symposium mail and friends
5. Ever dreamt of attaching your custom menu to the WP Toolbar ? Now your dream comes true...  Multisite users, even better: define Network Custom Menus from one place...

== Credits ==

This plugin would never have been what it is without the help and/or work from the following people.

= Specs & Tests =

First of all, Louis, my friend at [Central Geek](http://centralgeek.com), has been very helpful in specifying the plugin, and his many tests, pushing the plugin to its limits.  If you haven't done already, you should definitely visit Central Geek and drop a line there.  He's a MultiSite Guru as well, so if you're running WordPress in multisite, just get in touch with him, you'll surely having plenty of things to share.

= Icons =

The set of fonticons bundled with the plugin was created using [IcoMoon](http://icomoon.io/app), and gathers icons from various packages:

* WP Symposium Friends icon: IcoMoon
* WP Symposium Mail icon: Font Awesome
* WP Symposium icon: by Louis at [Central Geek](http://centralgeek.com)
* Share icons from: IcoMoon (Lightweight, Rounded Corners, Plain Circles variant), Entypo (Plain Circles), Typicons (Lightweight, Rings)

With my thanks for their work, I'm happy to attribute these fonts as follows.  Most of these icons were resized so they fit in the Toolbar with the same apparent size, which is the only modification I did.

* [IcoMoon](http://icomoon.io/#icons) by [Keyamoon](http://keyamoon.com), License GPL
* [Font Awesome](http://fortawesome.github.com/Font-Awesome/) by [Dave Gandy](https://github.com/davegandy), CC BY 3.0
* [Entypo](http://www.entypo.com/) by [Daniel Bruce](http://danielbruce.se), CC BY-SA 3.0 
* [Typicons](http://typicons.com/) by [Stephen Hutchings](https://github.com/stephenhutchings), CC BY-SA 3.0

Last but not least, please note that all brand icons are trademarks of their respective owners.

= Translations =

* French translation by the author
* Spanish translation by Maria Ramos at WebHostingHub

== Changelog ==

= 0.33.0. =

* Change: WP 4.3 compliance: Customize icon, CSS selectors
* Bugfix: avoid clashing with themes or other plugins using icomoon
* Bugfix: WPMS, remove the Import from Main Site button when on a subsite locally activated

= 0.32.0. =

* Change: adjust default colors in preview mode for WP 4.2+ as per #31234
* Change: Share tab, add two sets of icons
* Change: Share tab, add a field for a custom breakpoint value below which share icons are hidden
* Bugfix: Custom Menus no longer picking fonticons
* Bugfix: WPMS, network menus loose their fonticon on subsites
* Bugfix: fix conflict with theme, introduced by using add_theme_support
* Bugfix: add a test to check for WP roles before actually using them
* Bugfix: add a test on DOING_AJAX when loading backend-only CSS files to avoid conflicts in frontend with AJAX plugins/themes

= 0.31.0. =

* Bugfix: Styles, submenus arrows and Multisite "My Sites" menu blavatars not picking the correct menu font shadow, both in preview and save
* Bugfix: fix a PHP warning when using WP Symposium in Multisite
* Bugfix: Styles, menu shadow, default value not always used for preview

= 0.30.0. =

* Change: code improvement, increase the "requires at least" to WP 3.8, remove pre-3.8 specific and make use of wp_get_sites() in WPMS
* Change: code improvement, instantiate a custom class that extends the WordPress default class and add only needed nodes instead of letting WordPress create the whole Toolbar before removing nodes
* Change: the above allows extra locations for custom menus, hence the feature change for "add or replace the WP Logo menu"
* Change: WPMS, add a role for Super Admins
* Change: code improvement, make use of add_theme_support() to bump frontend page content down to the correct offset according to Toolbar height setting
* Change: code improvement, Admin page, move all Javascript code to a dedicated file
* Change: Toolbar, remove "Shortlink" setting
* Change: code improvement, simplify the way avatars are hidden from Toolbar
* Change: Styles, add a setting to limit the width of Toolbar, so admins can manually align Toolbar items with page content
* Change: Share, add RSS Feed and Mail To links to social icons
* Change: Share, add the option to use their brand colors on hover
* Bugfix: Import, less restrictive validation for strings: allow quotes etc.
* Bugfix: WPS, incorrect top margins for mail and friend icons when only one icon is displayed
* Bugfix: Styles, missing Toolbar shadow in responsive mode
* Bugfix: Custom Menus, get rid of PHP notices when adding a new menu and no menu exists already
* Bugfix: WPMS in RTL, remove an extra "float:right;" in admin tabs for correct display of subsites
* Bugfix: Styles, do not allow hex values with other than 3-digit and 6-digit for colours, upon saving
* Bugfix: Styles, do not allow negative values for font & icon shadow blur, in preview
* Bugfix: Import, discard unknown roles in arrays of roles
* Bugfix: Import, make sure custom menus are imported in all cases, change the way icons are stored to avoid the clash with the backslash

= 0.29.0. =

* Change: make use of plugins_url() instead of WP_PLUGIN_URL so that the plugin supports SSL certificates
* Change: cleanup in the CSS selectors for Toolbar items, for WP3.8+
* Bugfix: WP 3.8+, fix hover color on some of the labels in the frontend when no hover colour is set
* Bugfix: Styles, preview mode, correct default font size, default icon size, username font size
* Bugfix: WPMS, WPS Profile link not always picking the Home Site
* Bugfix: Styles, menu shadow transparency was not used

= 0.28.0. =

* Change: WP 3.8, Option to add fonticons to all default toplevel menu items (and now, admins can iconify all the Toolbar items at all screen sizes)
* Change: split the containers' shadow in two different settings, to reflect WP default shadow (also acts as Bugfix from WP default shadow)
* Change: WP 3.9, make use of 'rel' meta added to WP_Admin_Bar::add_node() for Custom Menus relationships set from WP NavMenus page (requires at least WP 3.9)
* Bugfix: get rid of PHP notices for icon size (pre-3.8 WP versions), and font size (all WP versions)
* Bugfix: Styles, preview mode, correct avatar colors
* Bugfix: WP 3.8, Styles, correct shadow colors for the W logos in My Sites, both previewed and saved
* Bugfix: WP 3.8, correct default icon size in responsive mode
* Bugfix: get rid of PHP notices when a gradient is set without a background color
* Bugfix: Styles, username now adheres to WP default color when no font color is set in dropdown menus, likewise on hover
* Bugfix: WP 3.8, Styles, make menu items' background colors transparent on hover (no default value)
* Bugfix: WP 3.8, make sure the default CSS file is loaded at all pages when Admin chooses to style the Toolbar accross the whole dashbard
* Bugfix: WP 3.8, use SSL on the URL over the share icons when SSL is active on the server

= 0.27.0. =

* Change: WP 3.8, Styles, added options to style fonticons independantly from labels: size, colour, hover colour
* Change: WP 3.8, add the option to show social icons and share the site with: LinkedIn, Facebook, Twitter, Google Plus, Stumble Upon
* Change: Styles, implement default values shown & hidden via Javascript
* Change: add the option to display custom menus in responsive mode (under 783px width), instead of being hidden by WordPress
* Bugfix: in RTL, correct display for the User Menu
* Bugfix: Styles, preview doesn't like 3-digits colors that can actually be used by colorpickers
* Bugfix: Import, failed import of style leads to no CSS stored
* Bugfix: add the plugin build number to CSS and JS files, to ensure that the correct version of the files is always sent to the client regardless of caching
* Bugfix: Styles, preview mode, correct menu font colors in hover
* Bugfix: Styles, correct menu font colors for display and user names
* Bugfix: WP 3.8, Styles, improve vertical centering of icons on Toolbar, as well as Search field
* Bugfix: security issue, strip tags from Import feature
* Bugfix: WPMS, Styles, default CSS now loaded at all subsites so that the Toolbar reflects the default admin color scheme

= 0.26.0. =

* Change: WP 3.8, Styles, added the option to choose to style the Toolbar in the whole dashboard, in addition to the plugin option page, Styles tab for the preview
* Change: WPMS, added the network feature to list All Sites in a dedicated menu for Super Admins (in addition to My Sites)
* Change: CSS, do not duplicate background color over 782px breakpoint when not needed (no gradient,..)
* Change: recompute gradients when browser window width changes
* Bugfix: WP 3.8, Styles, incorrect font and background colours, added default values based on WP default color scheme in case user has chosen another scheme
* Bugfix: WP 3.8, Styles, icon not hovered when no hover color is set
* Bugfix: make sure styles are generated upon upgrading the plugin

= 0.25.0. =

* Change: add WPS icon to WPS Admin menu
* Change: the rendering of the row for "new site settings" at the Sites tab of the plugin options page
* Change: WPMS, add error messages to Multisite features
* Change: error messages no longer removed upon clicking, need to reload page to get rid of them
* Bugfix: WP 3.8, Styles, preview mode, several issues: manage default values according to WP version, Toolbar items hover missing colour, User Info not picking colour
* Bugfix: do not go through symposium_toolbar_custom_profile_update for single sites and do not create useless users metadata
* Bugfix: WP 3.8, missing avatar in responsive mode when small avatar hidden from Toolbar in plugin settings
* Bugfix: style secondary submenus to use their parent's background color even when using WP default value
* Bugfix: WPMS, update subsites in all cases as needed, and update style upon new site creation
* Bugfix: in RTL, list roles and sites' tabs in descending order from R to L
* Bugfix: get rid of PHP notices due to WPST searching for WPS paths when WPS not activated
* Bugfix: WPMS, network menus no longer clash with site menus
* Bugfix: WP 3.8, WP Search icon had stopped folding / unfolding when on the left side of Toolbar
* Bugfix: secure the hook 'symposium_toolbar_add_user_action' behind a test to ensure the current user is actually logged in
* Bugfix: move 'symposium_toolbar_custom_profile_option' to the "public" part of the code so it can be found when Edit Profile is called from frontend by other plugins

= 0.24.0. =

* Change: WPMS, change internal name 'my_home_site' into 'wpst_my_home_site' for the field added to WP profile page
* Bugfix: get rid of PHP warnings on get_option default values for some setups
* Bugfix: WP 3.8, Styles tab, saved CSS, secondary-level dropdown menus no longer picking colours due to a change in WP 3.8 (submenu div vs. ul)
* Bugfix: WP 3.8, Styles tab, preview mode, default value for icon colour
* Bugfix: Styles tab, confirmation message no longer fired from the colorpickers, due to Javascript variable not shared between the splitted files
* Bugfix: WP 3.7.1, styles not taken into account when no hover colour is selected for menus

= 0.23.0. =

Important! The plugin is now WP 3.8 compliant, as well as backwards compatible. Whether you are running WP 3.7.1 or WP 3.8, update this plugin now!
Multisites installations will benefit from the significant addition of the following functionalities:

1. Force the display of the Toolbar network wide, for selected users, from one place
2. Home Site feature, users can then choose a home site, where the User Menu and the WPS notification icons will bring them preferably to any other of the network
3. Select the subsites you want to be synchronized with the Main Site, by propagating selected settings to these sites automatically rather than visiting subsites one by one
4. Create Network Custom Menus that will be displayed on all sites without Site Admins being able to remove them
5. Share WP Symposium features from the sites where WP Symposium is activated, with all sites of the network

Now the detailed changelog entry...

* Change: WPMS, when plugin is network activated, add tabs to the Main Site admin page, holding Network settings
* Change: WPMS, from Main Site 'Custom Menus' tab, option to make a custom menu network-wide
* Change: WPMS, from 'WP Symposium' tab, the option to *search* for WPS features network wide is replaced with the option to *share* them, so that subsites that are not running WPS and might actually need these features, can benefit from these even though WPS tab is hidden on plugin options page at these sites
* Bugfix: WPMS, propagate options accross the network upon both activation and updates
* Change: User Menu, option to edit the link to the Edit Profile page, defaulting to the WPS Profile page on WP Symposium sites
* Change: on non WP Symposium sites, move the WPS Toolbar settings into the Appearance menu
* Bugfix: ensure a role's name is set before using it for display on the plugin options page
* Bugfix: removed redundant tabs in the HTML of the plugin options page
* Bugfix: when forcing the display of the Toolbar from a subsite, remove the WP Profile option for all users
* Bugfix: display custom rows with symposium_toolbar_add_user_action even when all the default items are removed
* Change: added a carousel of tabs, so that they display on one row regardless of the screen size while ensuring the active tab is always displayed
* Change: User Guide and Dev Guide are now integrated in the admin page, and their content is set dynamically as per selected tabs (in Multisite)
* Change: non-Javascript friendly admin page
* Change: WP 3.8 compliance, preview now only active on the Styles tab, responsive mode for smaller screens, etc.
* BugFix: ensure a full RTL display of the options page
* Added Spanish translation, thanks to Maria Ramos at [WebHostingHub](http://www.webhostinghub.com)

= 0.22.0. =

* Bugfix: do not rely on register_activation_hook for upgrades to ensure options are updated
* Bugfix: WP Symposium, avoid redirecting to WPS profile page upon saving from WP profile page
* Bugfix: make the plugin work with alternate Search fields like the one proposed by JetPack, and ensure the best possible compatibility with styling its Toolbar items
* Code cleanup in the JS file, and rename variables to comply with WordPress naming convention

= 0.21.0. =

* Bugfix: Styles, default height of the first row in the Site Name frontend dropdown menu
* Bugfix: Styles, issue with hover overlapping some of the borders, but not all
* Change: Toolbar tab, option to force the display of the WP Toolbar for logged-in users, and hide the checkbox "Show Toolbar while viewing site" at the WP Profile page
* Change: Custom Menus, add an error message when the same menu is being displayed for a given role on different locations
* Change: make translatable the error string displayed when the admin leaves the page without saving
* Bugfix: Styles, dropdown menus highlighted items inheriting colour from normal ones when no specific colour set
* Bugfix: Styles, preview mode, font shadow not removed whenever H or V are unset, both for Toolbar and Dropdown menus
* Bugfix: Styles, preview mode, Toolbar borders "default" not working when coming from another, saved value

= 0.20.0. =

* Bugfix: Styles, preview mode, CSS issue in the User Menu, User Info not picking up changes in font color / attributes / shadow
* Bugfix: Styles, saved mode, sort out rendering issues with font styles and shadow settings in the dropdown menus
* Change: WPMS, autodetect URLs for WP Symposium profile / friends / mail accross the network, and option to deactivate this behaviour
* Change: WPMS, add the pseudo-role "User" for network users not member of the current site, to add specific navigation items for such users

= 0.19.0. =

* Bugfix: Styles, CSS issue in the User Menu, User Info now displays colors and fonts as well as reacts to hover event
* Bugfix: Styles, preview mode, menu font shadow, the normal and hover shadows were erroneously linked so that it was needed to define both to show them
* Bugfix: Styles, preview mode, toplevel menu items now keep the focus, both in the Toolbar and the dropdown menus
* Bugfix: Styles, make the font shadows settings save
* Change: remove the Error messages from the options tab upon click, with a JQuery 'slide up' effect rather than a JS 'hide'
* Bugfix: CSS issue with visitor's Howdy and blank avatar
* Bugfix: sort out flat menus as replacement to WP Logo, by using the first parentless item as parent to any further parentless item
* Change: WP Symposium, add the option to show notification icons only when a new event occurs (new mail, new friend)

= 0.18.0. =

**Important !! This release changes the way settings are stored for site visitors. After the upgrade, please check your settings for visitors. Sorry for the inconvenience and thanks for your understanding**

* Options page reworked with tabs rather than closing boxes
* Styles added, along with a preview mode at this tab.
* Change: renamed pseudo-role 'visitor' into 'wpst_visitor' to avoid clashes with a home-made role or any other plugin or theme
* Change: removed the checkbox under the Custom Menus table: WP highlighted links can now be styled specifically, while the plugin cannot create highlighted links in custom menus anyway (as it requires groups of links)
* Bugfix: WPMS with menus in subsites being incorrectly linked to main site
* Bugfix: WPMS, export in subsites now dumps the settings of the current site, not the main
* Change: further to the bugfix above, WPMS subsites now have a button to import main site's settings
* Bugfix: missing custom menus no longer mess up the Toolbar menus, and display an error message at the plugin options page
* Bugfix: the search icon can now be moved and removed
* Change: the hook 'symposium_toolbar_add_user_action' now allows to add several items to user actions - developers, make sure you are returning an array of arrays!

PS: I am jumping from 0.0.17 to 0.18.0 to free up the third digit and use it for project internal communication.

= 0.0.17. =

* Bugfix: CSS issue in the User Menu - hopefully all cases are covered this time...
* Bugfix: hide the WP Profile setting to show/hide the Toolbar ("Show Toolbar when viewing site"), when the role cannot see the Toolbar
* Bugfix: make the option "add the username to the display name, if different" do what it's supposed to do
* Change: Option to add the role under the display name, in the User Menu
* First draft of the file developpers.txt, describing the hooks available so far.

= 0.0.16. =

* Bugfix: CSS issue in the User Menu

= 0.0.15. =

This release focuses on hardening the plugin: validate the import before saving, ensure the stored options are of the proper type, and warn the admin of any discrepency through the options page...

* Protect all array_intersect() with check if the stored option is actually an array, to avoid PHP warnings
* Narrow the output for the Export to this plugin options
* Add checks to the Import: empty field, unknown option name, wrong option value, and error messages as appropriate
* Add error messages to the options page to warn admin of discrepancies in stored options for: arrays of roles, checkboxes, missing menus

= 0.0.14. =

* Fix help tabs content that was affected by previous bugfix

= 0.0.13. =

* Getting rid of PHP notices - sorry

= 0.0.12. =

* Per-role management of the display for most of the items, including visitors' role for non-logged-in
* Option to add custom menus at predefined locations in the WP Toolbar, for given roles, along with custom icons for toplevel items
* Make use of WP NavMenus for the User Menu and other custom menus - but not the WPS Admin Menu which isn't supposed to be modified
* Help tab at the top right of the dashboard options page describing the plugin and its options

= 0.0.11. =

* Bug fix, profile_url undefined
* Remove capability from the User Menu (temporarilly, things will likely change here)

= 0.0.10. =

* Correct link to "symposium_debug" over the admin menu title "WP Symposium"
* Options to hide the Toolbar top links: wp-logo, site-name, my-sites (for multisites), get-shortlink, edit, new-content, comments, updates, search
* Option to hide the Howdy message

= 0.0.9. =

* Hide some debug info at the WPS Install page for multisites

= 0.0.8. =

* First official release, as beta, for feedback and tests

