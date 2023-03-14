<?php
/*
Block Name: Single Central Text
Block Description: Single Central Text
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: s9blocks
*/
$sectionclass = 'singlecentraltext';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include('______partials_global.php');

/*

 --------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="'.$blockclass .'" '. $sideimage.'>
	<div class="wcp-columns">
	 	<div class="wcp-column full">
			 '.s9_xray_textfield('main_title', $postid = '', $tag = 'h2', $className = '',$emptyText = '').
			  s9_xray_textfield('strapline', $postid = '', $tag = 'h4', $className = '',$emptyText = '').s9_xray_textfield('text_area', $postid = '', $tag = '', $className = '',$emptyText = '').'
			  <a href="#" class="linkbox" title ="read More">Sign Up Today</a>
		 </div>
	</div>
</section>';
?>
