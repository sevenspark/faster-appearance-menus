=== Faster Appearance - Menus ===
Contributors: sevenspark
Donate link: http://bit.ly/DonateResponsiveSelect
Tags: menus, appearance, fast, fix, slow
Requires at least: 3.6
Tested up to: 3.6
Stable tag: 0.1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

If your Appearance > Menus screen has become very laggy after upgrading to WordPress 3.6 and you have a lot of menu items, this should speed it up.  [Full details](http://sevenspark.com/wordpress/speeding-up-the-appearance-menus-screen-in-wordpress-3-6)

Watch the video

<a href="http://www.youtube.com/watch?v=P1wOPN5zJzY&HD=1"><img src="http://i.imgur.com/zPY0IFo.png"></a>



== Description ==

The new accessibility javascript in the Appearance > Menus panel in WordPress 3.6 can significantly slow the page load speed when using a large number of menu items (> 50).  This plugin defers the accessibility processing to eliminate the scripting bottleneck and allow the Appearance > Menus screen to run much faster and more responsively.

[Full details](http://sevenspark.com/wordpress/speeding-up-the-appearance-menus-screen-in-wordpress-3-6)

This solution is fairly rough.  Hopefully we can develop a robust solution that can eventually become part of the core.  Pull requests through GitHub are welcome.

== Installation ==

1. Upload the `faster-appearance-menus` directory to the `/wp-content/plugins/` directory, or install via the Plugins uploader
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Enjoy faster menu management

== Frequently Asked Questions ==

= What are you on about? =

[Please read this](http://sevenspark.com/wordpress/speeding-up-the-appearance-menus-screen-in-wordpress-3-6)

== Screenshots ==

1. Faster Menu Management

== Changelog ==

= 0.1.1 =
* Updated script replacement strategy to preserve script dependencies

= 0.1 =
* Initial version
