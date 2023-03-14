<?php
/*
Block Name: Text and Image Block
Block Description: Double Image Rounded Corners
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: s9blocks
*/
$sectionclass = 'textandimage';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/*
strapline
main_title
text_area
textimage_column_alignment

ti : Text and image
it : Image and text

s9_xray_textfield('textimage_column_alignment', $postid = '', $tag = '', $className = '',$emptyText = 'ti')
s9_xray_textfield('text_area', $postid = '', $tag = '', $className = '',$emptyText = '')

dble_small_image
dble_large_image



 --------------------------------------------------------------------------- */
 $treeimage = $sectiontreepos=$sectiontree= '';
 $sectiontree = s9_xray_textfield('tree_background', $postid = '', $tag = '', $className = '',$emptyText = '');
 $sectiontreepos = s9_xray_textfield('tree_background_position', $postid = '', $tag = '', $className = '',$emptyText = '');


include('______partials_global.php');

/* --------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="'.$blockclass .'" '. $sideimage.'>
	<div class="wcp-columns '.s9_xray_textfield('textimage_column_alignment', $postid = '', $tag = '', $className = '',$emptyText = 'ti').'">
	 	<div class="wcp-column c_l textcol">
		 	'.s9_xray_textfield('main_title', $postid = '', $tag = 'h2', $className = '',$emptyText = '').
		 	s9_xray_textfield('strapline', $postid = '', $tag = 'h4', $className = '',$emptyText = '').s9_xray_textfield('text_area', $postid = '', $tag = '', $className = '',$emptyText = '').'
		</div>
	 	<div class="wcp-column imagecol">
				<div class="rdpairimage">
				  <div class="smallimage"'.s9_xray_style_backgroundimage_URL("dble_small_image", $postid = '').'></div>  
				  <div class="largeimage"'.s9_xray_style_backgroundimage_URL("dble_large_image", $postid = '').'></div>
				</div>
		</div>
	</div>
	
	
</section>';
?>
