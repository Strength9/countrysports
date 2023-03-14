<?php
/*
Block Name: Full Screen text
Block Description: full screen text
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: s9blocks
*/
$sectionclass = 'fullscreen';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include('______partials_global.php');


/* --------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="'.$blockclass .'">
	<div class="wcp-columns">
	 	<div class="wcp-column full">
		 	'.s9_xray_textfield('strapline', $postid = '', $tag = 'h4', $className = 'strapline',$emptyText = '').
			 s9_xray_textfield('main_title', $postid = '', $tag = 'h1', $className = '',$emptyText = '').'
			   <div class="contentbox">'.
			   s9_xray_textfield('text_area', $postid = '', $tag = '', $className = '',$emptyText = '').'
			   </div>
		 
		 </div>
	</div>
</section>';
?>
