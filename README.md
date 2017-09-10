# WAX Custom login

This mu-plugin customize the login page without any parameters needed.  
As all themes have a screenshot, the idea is to reuse it on the login page.  
Because it is not mandatory (but recommended) to have a screenshot saved in PNG format, this mu-plugin use wp_get_theme() to get a WP_Theme object for the active theme and find the good file : https://codex.wordpress.org/Function_Reference/wp_get_theme .  
Because screenshots often include text in the bottom, a zoom (background-size:170%) is added to the image on custom login page to hide text.  


## Features

* Replace WordPress logo with active theme's screenshot
* Make login image link to home URL
* Add a zoom of 70% with background-size:170%
* Rewrite login image url title

## Screenshots

![Screenshot](https://github.com/webaxones/wax-custom-login/raw/master/assets/screenshots/screenshot-1.png "Screenshot")

## Installation

This is a must have plugin, so, use at it as a mu-plugin.
Since this is a folder, you must use a MU Loader and I know of no better than this one : https://github.com/BeAPI/wp-mu-loader.

### via Composer

1. Add a line to your repositories array: `{ "type": "git", "url": "https://github.com/webaxones/wax-custom-login.php" }`
2. Add a line to your require block: `"webaxones/wax-custom-login": "dev-master"`
3. Run: `composer update`

### Manual

1. Copy the plugin folder into your must use plugins folder.

## Changelog

### 1.0.0 - 10 Sep 2017
* Initial