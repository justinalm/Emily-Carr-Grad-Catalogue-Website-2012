<?php 
/*
 Plugin Name: Remove Link URL
 Description: This plugin removes the Link URL that is enabled by default when images are uploaded to your WordPress blog. Helps prevent accidentally linking to images.
 Version: 1.0
 Author: Willshouse
 Author URI: http://techblog.willshouse.com/?ref=rlu-plugin
 Text Domain: remove-link-url
 */



class RemoveLinkUrl
{
	
	function RemoveLinkUrl()
	{
		add_action( 'init', array(&$this,'init'));
	}

	function init()
	{
		add_filter("attachment_fields_to_edit", array(&$this,'attachment_fields_to_edit'), null, 2);
	}

	function attachment_fields_to_edit($form_fields, $post)
	{

		if( ! empty($form_fields['url']['html']) )
		{
			if($filtered_html = preg_replace("#(.*?value=').*?(?:jpg|jpeg|png|gif|bmp|tiff|tif)('.*)#i",'$1$2',$form_fields['url']['html']))
			{
				$form_fields['url']['html'] = $filtered_html;
			}
		}

	    return $form_fields;
	}

}

global $RemoveLinkUrl;
$RemoveLinkUrl = new RemoveLinkUrl();