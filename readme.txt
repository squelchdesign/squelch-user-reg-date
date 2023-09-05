=== Squelch User Registration Date ===
Contributors: squelch
Donate link: https://squelchdesign.com/services/web-development/free-wordpress-plugins/squelch-user-reg-date/
Tags: squelch,user,registration,date,admin,columns
Requires at least: 4.0
Tested up to: 6.3.1
Stable tag: 1.0
Requires PHP: 7.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Adds a sortable column to the users screen of the admin dashboard which shows the date on which the user registered

== Description ==

A simple plugin that adds a sortable column to the users screen of the admin dashboard that shows the date and time at which a user registered.

Features:

*   nothing to configure,
*   no set-up is required beyond installing and activating the plugin,
*   adds no bloat to your site.

Works with all recent versions of WordPress and PHP.

== Frequently Asked Questions ==

= How do I configure this plugin? =

You don't need to configure anything, just install the plugin and activate it and user registration times and dates will be shown in the admin interface.

= I don't see the new column. What do I need to do? =

If you're not seeing the new column then you may need to turn it on via the "Screen Settings" tab at the top-right of the users screen.

= Can I sort on this new column? =

Absolutely, just click the column heading to sort by that column. Subsequent clicks will switch between ascending and descending ordering, just the same as the other fields.

= What is the date format? =

It uses WordPress's default date format

= I don't like the date format, can I change it? =

The plugin uses the date format configured in the Settings > General screen. You can change the format there and it will be reflected on the user screen.

= Can I change the date format without affecting other parts of my website? =

Technical users can set a custom date format using [WP-CLI](https://wp-cli.org/) or any other tool that allows options to be set. This can be achieved by setting the option `squelchuserregdate_format`:

    wp option set squelchuserregdate_format

Currently no configuration screen is provided for changing this option, the solution above is provided so that technical people can override the behaviour if it's absolutely necessary to have a different format to what's used elsewhere in WordPress.

= Is there a paid version of the plugin? =

No, it's 100% free.

= Where do I go to get support? =

If you encounter any issues with this plugin then please open a thread on the support forum linked off the plugin homepage.

= I'd like to suggest a feature =

Please open a thread on the support forum.

= This plugin doesn't do what I want, I'm going to leave a negative review =

Please open a thread on the support forum first. Leaving a negative review before I've had a chance to assist you does nobody any favours.

== Screenshots ==

1. User registration dates and times showing in the admin interface.

== Changelog ==

= 1.0 =
* Initial version

== Upgrade Notice ==

= 1.0 =
Initial version
