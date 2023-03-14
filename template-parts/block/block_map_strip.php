<?php
/*
Block Name: Map Block
Block Description: Map Block
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: s9blocks
*/

$sectionclass = 'mapblock';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include('______partials_global.php');
?>


<?php echo '<section '.$anchor.' class="'.$blockclass .'">
<div class="datacontainer"><div class="centralcol">'.s9_xray_textfield('address', $postid = 'options', $tag = 'div', $className = 'addressbox',$emptyText = '').'</div></div>'.
do_shortcode('[wpgmza id="1"]').'</section>';

