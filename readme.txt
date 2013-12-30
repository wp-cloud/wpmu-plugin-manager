=== WPMU Plugin Manager ===
Contributors: cfoellmann, wp-repository
Tags: multisite, wpmu, plugins
Requires at least: 3.1
Tested up to: 3.9-alpha
Stable tag: 1.0
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

* GitHub Repository: [wp-repository](https://github.com/wp-repository) / [wpmu-plugin-manager-mu](https://github.com/wp-repository/wpmu-plugin-manager)
* [Issue-Tracker](https://github.com/wp-repository/wpmu-plugin-manager/issues) **Please use the Issue-Tracker on GitHub!!**
* Translation: [Translate > WPMU Plugin Manager](http://wp-translate.org/projects/wpmu-plugin-manager)


== Installation ==
= To Install: =

1.  Download the plugin file
1.  Unzip the file into a folder on your hard drive
1.  Upload the `/plugin-manager/` folder to the `/wp-content/plugins/` folder on your site
1.  Visit *Network Admin -> Plugins* and *Network Activate* it there.

= To Configure Network Wide Options =
1. Visit *Network Admin -> Plugins -> Plugin Management*
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

== Screenshots ==

1. The plugin management admin page
2. Overriding allowed plugins per site

== Changelog ==

= 1.0 =
* __Forked from [Multisite Plugin Manager](http://wordpress.org/plugins/multisite-plugin-manager/) by [UglyRobot Web Development](http://uglyrobot.com)
