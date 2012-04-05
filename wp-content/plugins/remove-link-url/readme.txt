=== Remove Link URL ===
Contributors: willshouse
Donate link: http://techblog.willshouse.com/donate/
Plugin link: http://techblog.willshouse.com/remove-link-url/
Tags: admin, media, upload, links, willshouse
Requires at least: 2.5
Tested up to: 3.4
Stable tag: 1.0

This plugin removes the Link URL that is enabled by default when images are uploaded to your WordPress blog.

== Description ==

This plugin removes the Link URL that is enabled by default when images are uploaded to your WordPress blog. This helps prevent accidentally linking to images. A screenshots is available to help clarify where this affects Wordpress.

= Notes =

* This plugin removes links for image files ending with the following extensions: .jpg, .jpeg, .png, .gif, .bmp, .tiff, .tif
* Files with other extensions - such as PDF files - will continue to work normally
* If you have existing posts and want to remove the links from images: Wordpress actually stores the links as part of the post content, so removing the links would either require looping through the posts and running a regular expression, or perhaps cheating with jQuery and removing links after the post is rendered. In short, this plugin helps remove links from images that your users post *from now on*, but doesn't touch your existing posts :)

[Suggest new features and improvements here](http://techblog.willshouse.com/remove-link-url/)


== Installation ==

= Install =

1. Download the remove-link-url.zip file to your computer.
1. Unzip the file.
1. Upload the `remove-link-url` directory to your `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.

That's it. At this time there is no configuration menu for this plugin.

= Requirements =

* Wordpress 2.5 or above


== Screenshots ==

1. Media Upload Screen


== Changelog ==

= 1.0 - Initial Release =
* Tested and working for up to Wordpress 3.4 alpha
