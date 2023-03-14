<?php
/*
Block Name: Call to Action
Block Description: Call to Action
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: s9blocks
*/
$sectionclass = 'calltoaction';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include('______partials_global.php');


/* 


--------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="'.$blockclass .'"  '.s9_xray_style_backgroundimage_URL('background_image', $postid = '').'>
	<div class="wcp-columns">
		 <div class="wcp-column full">
			 '.s9_xray_textfield('main_title', $postid = '', $tag = 'h2', $className = '',$emptyText = '').
			  s9_xray_textfield('strapline', $postid = '', $tag = 'h4', $className = '',$emptyText = '').s9_xray_textfield('text_area', $postid = '', $tag = '', $className = '',$emptyText = '').'
			  '.s9_xray_linkfield('link_text', $postid = '', $tag = '', $className = 'linkbox').'
		 </div>
	</div>
</section>';
?>
