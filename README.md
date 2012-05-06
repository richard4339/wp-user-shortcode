wp-user-shortcode
=================

A plugin for Wordpress that adds a user shortcode to link to a user's author page.

## Installation

1. Upload `wp-user-shortcode.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

## Frequently Asked Questions

### How do I enable this plugin?

Once the plugin itself is installed, use the shortcode in a post or page.

Any of the following examples are valid. They all assume the user is *example*

`
[user]example[/user]
`

`
[user user=example]
`

`
[user user="example"]
`

`
[user example]
`

### The output user isn't what I'm expecting.

In order to try to treat this properly, the plugin takes a *username* as the parameter. It returns the *display name*.

### I found a bug!

* Please report the bug on our [issue tracker](https://github.com/richard4339/wp-user-shortcode/issues) at [Github](https://github.com/richard4339/wp-user-shortcode/issues).

## Changelog

### 1.0

* First published version.

## License

<a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-sa/3.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">wp-user-shortcode</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="https://github.com/richard4339/wp-user-shortcode" property="cc:attributionName" rel="cc:attributionURL">Richard Lynskey</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution-ShareAlike 3.0 Unported License</a>.<br />Based on a work at <a xmlns:dct="http://purl.org/dc/terms/" href="https://github.com/richard4339/wp-user-shortcode" rel="dct:source">github.com</a>.