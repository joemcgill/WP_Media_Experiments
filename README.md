# WP Media Experiments #
**Contributors:** @joemcgill  
**Tags:** media, images  
**Requires at least:** 5.0  
**Tested up to:** 5.2-beta1-45048-src  
**Stable tag:** 0.1.0  
**License:** GPLv2 or later  
**License URI:** https://www.gnu.org/licenses/gpl-2.0.html  

A WordPress plugin for testing experimental media functionality.

## Description ##

This is a plugin for testing out experimental media functionality that may eventually be considered for inclusion in WordPress Core. Inspiration for getting this started was Morten Rand-Hendriksen's (@mor10) [tweet about adding native lazy loading](https://twitter.com/mor10/status/1114987837370261504) to WordPress.

## Changelog ##

### 0.1.0 ###

- Scaffolds the plugin
- Adds initial functionality for filtering core image and gallery blocks
- Adds 'loading="lazy"' attributes to image, gallery, and media-text blocks
- Adds lazy loading to any image that is dynamically generated by `wp_get_attachment_image()`.
