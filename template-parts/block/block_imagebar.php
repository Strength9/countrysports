<?php
/*
Block Name: Image Bar
Block Description: Image Bar
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: s9blocks
*/
$sectionclass = 'imagebar';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include('______partials_global.php');

/* --------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="'.$blockclass .'">
	<ul>
		<li '.s9_xray_style_backgroundimage_URL('image_bar_1', $postid = '').'>&nbsp;</li>
		<li '.s9_xray_style_backgroundimage_URL('image_bar_2', $postid = '').'>&nbsp;</li>
		<li '.s9_xray_style_backgroundimage_URL('image_bar_3', $postid = '').'>&nbsp;</li>
		<li '.s9_xray_style_backgroundimage_URL('image_bar_4', $postid = '').'>&nbsp;</li>
		<li '.s9_xray_style_backgroundimage_URL('image_bar_5', $postid = '').'>&nbsp;</li>
		<li '.s9_xray_style_backgroundimage_URL('image_bar_6', $postid = '').'>&nbsp;</li>
		<li '.s9_xray_style_backgroundimage_URL('image_bar_7', $postid = '').'>&nbsp;</li>
		<li '.s9_xray_style_backgroundimage_URL('image_bar_8', $postid = '').'>&nbsp;</li>
	</ul>	
		
</section>';
?>
