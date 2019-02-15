=== WPMU Plugin Manager ===
Contributors: cfoellmann, wp-cloud, wpstoreio
Tags: multisite, wpmu, plugins
Requires at least: 3.1
Tested up to: 5.1.0
Stable tag: 1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Manage plugin access permissions across your entire multisite network.

== Description ==
Plugin management for Wordpress Multisite that supports the native plugins page. 
It uses a backend options page to adjust plugin permissions for all the sites in your network.

* Select what plugins sites have access to
* Choose plugins to Auto-Activate for all new blogs
* Mass activate/deactivate a plugin on all sites in your network
* Assign special plugin access permissions for specific sites in your network
* And as Super Admin, you can override all these to activate specific plugins on the sites you choose!
* Removes the plugin meta row links (Version, Author, Plugin) and any update messages for blog admins

= Development =

* GitHub Repository: [wp-cloud](https://github.com/wp-cloud) / [wpmu-plugin-manager](https://github.com/wp-cloud/wpmu-plugin-manager)
* [Issue-Tracker](https://github.com/wp-cloud/wpmu-plugin-manager/issues) **Please use the Issue-Tracker on GitHub!!**

== Installation ==
= To Install: =

1.  Download the plugin file
1.  Unzip the file into a folder on your hard drive
1.  Upload the `/wpmu-plugin-manager/` folder to the `/wp-content/plugins/` folder on your site
1.  Visit *Network Admin -> Plugins* and *Network Activate* it there.

= To Configure Network Wide Options =
1. Visit *Network Admin -> Plugins -> Manage*
1. Select what kind of access each plugin should have. You can choose:
	* No access (default)
	* All Users
	* All Users (Auto-Activate) - activates the plugin for all new blogs
1. You may also mass activate/deactivate a plugin on all sites in your network (Very Handy!)

= To Override Plugin Access Per Site =
1. Visit the *Network Admin -> Sites* list
1. Click the "*Edit*" link for the site you wish to modify
1. Look at the bottom of the "*Settings*" tab screen for the per blog options

== Frequently Asked Questions ==

= Can I use this plugin for non-multisite WP installs? =
No, this plugin is only compatible (and useful) with Multisite installs.

= Why can I not (de)activate a plugin on all sites in a large network? =
Large networks with more than 10.000 sites are probably going to timeout when this function is used.
To prevent inconsistencies in your plugin configuration this process is blocked.

== Screenshots ==

1. The plugin management admin page
2. Overriding allowed plugins per site

== Changelog ==

= 1.1 (2019-02-dd) =
 * FIXED WP-CLI problem
 * ADD safety block for large networks

= 1.0 =
* __Forked from [Multisite Plugin Manager](http://wordpress.org/plugins/multisite-plugin-manager/) by [UglyRobot Web Development](http://uglyrobot.com)
