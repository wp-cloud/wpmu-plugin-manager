# Multisite Plugin Manager
__Manage plugin permissions in a WordPress MU installation__

## Details
[Homepage][1.1]

| WordPress					| Version			| *		| Development				|					|
| ----:						| :----				| :---: | :----						| :----				|
| Requires at least:		| __3.1__			| *		| [GitHub-Repository][1.3]	| [Translate][1.7]	|
| Tested up to:				| __3.5.1__			| *		| [Issue-Tracker][1.4]		|					|
| Current stable release:	| __[3.2][1.5]__	| *		|							|					|

[1.1]: https://github.com/wp-repository/mutlisite-plugin-manager
[1.3]: https://github.com/wp-repository/mutlisite-plugin-manager
[1.4]: https://github.com/wp-repository/mutlisite-plugin-manager/issues
[1.5]: https://github.com/wp-repository/mutlisite-plugin-manager/archive/3.2.zip
[1.7]: https://translate.foe-services.de/projects/mutlisite-plugin-manager

### Description
Plugin management for Wordpress Multisite that supports the native plugins page. 
It uses a backend options page to adjust plugin permissions for all the sites in your network.

* Select what plugins sites have access to
* Choose plugins to Auto-Activate for all new blogs
* Mass activate/deactivate a plugin on all sites in your network (Very Handy!)
* Assign special plugin access permissions for specific sites in your network
* And as Super Admin, you can override all these to activate specific plugins on the sites you choose!
* Removes the plugin meta row links (Version, Author, Plugin) and any update messages for blog admins


## Development
### Developers
| Name					| GitHub				| WordPress.org			| Web									| Status				|
| :----					| :----					| :----					| :----									| ----:					|
| Aaron					| -						| [uglyrobot][2.3.2]	| http://uglyrobot.com/					| Inactive				|
| Christian Foellmann	| [cfoellmann][2.4.1]	| [cfoellmann][2.4.2]	| http://www.foe-services.de			| Current maintainer	|

[2.3.2]: http://profiles.wordpress.org/uglyrobot
[2.4.1]: https://github.com/cfoellmann
[2.4.2]: http://profiles.wordpress.org/cfoellmann


## License
__[GPLv2](http://www.gnu.org/licenses/gpl-2.0.html)__

	Multisite Plugin Manager

	Copyright (C) 2009-2013 UglyRobot Web Development (http://uglyrobot.com)

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License, version 2, as 
	published by the Free Software Foundation.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>. 


## Changelog
* __3.3__ (future release)
	* added build testing via travis-ci.org
	* added custom unit tests @TODO
	* TBD
* __3.2__
	* __Forked (dirty) from [Multisite Plugin Manager](http://wordpress.org/extend/plugins/multisite-plugin-manager/) by [UglyRobot Web Development](http://uglyrobot.com)__
	* added translation support
	* fixes for WP 3.5
	* support for *Pro Sites plugin* is deprecated from v3.2 on - no fixes + removal planned for v3.3
* __3.1.2 =
	* Important reflected cross-site scripting vulnerability fix! Props Matthew Fuller @Mozilla 
* __3.1.1__
	* Readme updates
	* Pro Sites support
* __3.1__
	* Fix auto-activate for new blogs
* __3.0__
	* Complete rewrite for WP 3.1