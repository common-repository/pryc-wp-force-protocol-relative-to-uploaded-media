=== PRyC WP: Force protocol relative to uploaded media ===
Contributors: PRyCpl
Donate link: https://cdn.pryc.eu/add/link/?link=paypal-wp-plugin-pryc-wp-force-protocol-relative-to-uploaded-media
Tags: WordPress, SSL, HTTP, HTTPS, URL, ssl, http, https
Requires at least: 3.0.1
Tested up to: 6.2.2
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Force protocol relative (\\ instead http:\\ or https:\\) for files added in the content editor (eg. post, page)

== Description ==
Force protocol relative (\\ instead http:\\ or https:\\) for files added in the content editor (eg. post, page)

Before, when add media:

`<a href="http://wordpress.org/wp-content/uploads/some-cool-photo.png"><img src="http://wordpress.org/wp-content/uploads/some-cool-photo.png" alt="Some cool photo" width="1920" height="1410" class="aligncenter size-full wp-image-19200813" /></a>`

After, when add media:

`<a href="//wordpress.org/wp-content/uploads/some-cool-photo.png"><img src="http://wordpress.org/wp-content/uploads/some-cool-photo.png" alt="Some cool photo" width="1920" height="1410" class="aligncenter size-full wp-image-19200813" /></a>`

The plugin works only for newly added media (does not change the older entries).

== Installation ==
1. Upload `pryc-wp-force-protocol-relative-to-uploaded-media` dir to the `/wp-content/plugins/` directory
2. Activate the plugin through the \'Plugins\' menu in WordPress

== Screenshots ==

== Changelog ==

= 1.0.1 =
* First public ver.

== Upgrade Notice ==

= 1.0.1 =
* First public ver.