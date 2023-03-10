<?php
/*
Block Name: Page Hero
Block Description: Page Hero
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: s9blocks
*/
$sectionclass = 'pagehero';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include('______partials_global.php');

/*
central_heading
strap_line





 --------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="'.$blockclass .'" '.s9_xray_style_backgroundimage_URL('header_background', $postid = '').'>'.s9_xray_textfield('central_heading', $postid = '', $tag = 'h2', $className = '',$emptyText = '').s9_xray_textfield('strap_line', $postid = '', $tag = 'h4', $className = '',$emptyText = '').'</section>';
?>
