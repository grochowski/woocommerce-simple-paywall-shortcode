# Simple Paywall Shortcode for WooCommerce 🛒

## What it is

A simple shortcode helper for WooCommerce distributed as a Wordpress plugin that allows to wrap some content and show it only when current user has (or has not) bought items on given list.

Project was developed as a helper for one of sites I have been working on. It is as simple as it should be. Sharing is caring, so enjoy using it and feel free to add something.

Tested with: 
- WooCommerce: 4.5.1+
- Wordpress: 5.5.1+

## How to use it

### Page builder support 🧱

Plugin comes with an integration with following page builders:
- WPBakery / Visual Composer

Shortcode is enabled in UI of these page builders under the name of Simple Paywall and allows to wrap content that should be visible upon buying (or not) some products.

### Default shortcode usage 📋

Plugin can be used on any page and any place where shortcodes work in WooCommerce. Just type following code:

`` [simple-paywall should_buy="true" products="1211"] -- CONTENT HERE -- [/simple-paywall] ``

It works with parameters:

`` should_buy `` - if true, shortcode displays content when user has bought items. if false, content is displayed when given items were not bought.

`` products `` - can be a single ID number of product or a comma-separated list of IDs of items to test for

## How to install

Clone this repository or download ZIP, rename the folder to `` woocommerce-simple-paywall-shortcode `` and copy the folder to `` wp-content/plugins ``

## Maintenance

I am not working on this plugin actively and it was for single purpose only, but if you selfdom make any changes to it, feel free to send a pull request 🍋.

What could be done:
- general test if plugin works in different scenarios,
- integrations with other page builders,
- improving current page builder integration (e.g. WPBakery - easier product select)

## License

GNU GPL v3, as stated in LICENSE file.