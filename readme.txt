=== Multisite Plugin Manager ===
Contributors: uglyrobot
Tags: multisite, wpmu, plugins
Requires at least: 3.1
Tested up to: 3.5.1
Stable tag: trunk

Manage plugin access permissions across your entire multisite network.

== Description ==
Plugin management for Wordpress Multisite that supports the native plugins page. 
It uses a backend options page to adjust plugin permissions for all the sites in your network.

* Select what plugins sites have access to
* Choose plugins to Auto-Activate for all new blogs
* Mass activate/deactivate a plugin on all sites in your network (Very Handy!)
* Assign special plugin access permissions for specific sites in your network
* And as Super Admin, you can override all these to activate specific plugins on the sites you choose!
* Removes the plugin meta row links (Version, Author, Plugin) and any update messages for blog admins

= Development =

* GitHub Repository: [plugin-manager-mu](https://github.com/wp-repository/plugin-manager-mu)
* Issue-Tracker: [Plugin Manager MU Issues](https://github.com/wp-repository/plugin-manager-mu/issues) **Please use the Issue-Tracker at GitHub!!**
* Translation: [Translate > Plugin Manager MU](https://translate.foe-services.de/projects/plugin-manager-mu)


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

= 3.2 =
* "Dirty Fork" -> no renaming at this point
* added translation support
* fixes for WP 3.5
* support for *Pro Sites plugin* is deprecated from v3.2 on - no fixes + removal planned for v3.3

= 3.1.2 =
* Important reflected cross-site scripting vulnerability fix! Props Matthew Fuller @Mozilla 

= 3.1.1 =
* Readme updates
* Pro Sites support

= 3.1 =
* Fix auto-activate for new blogs

= 3.0 =
* Complete rewrite for WP 3.1