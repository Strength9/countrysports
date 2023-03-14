<?php
/*
Block Name: Contact Block
Block Description: Contact Block
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: s9blocks
*/
$sectionclass = 'contactblock';
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
	 	<div class="wcp-column contactinfo c_l">
		 
		 '.s9_xray_textfield('main_title', $postid = '', $tag = 'h2', $className = '',$emptyText = '').
		   s9_xray_textfield('strapline', $postid = '', $tag = 'h4', $className = '',$emptyText = '')
		   .s9_xray_textfield('text_area', $postid = '', $tag = '', $className = '',$emptyText = '').'
		   
		   <ul>
		   	<li>'.s9_xray_maillink($fieldname = 'email_address', $postid = 'options', $titletext ='', $extratext = '<i class="icon fa-regular fa-envelope"></i> <span class="title">Email Us</span>',$className = '',$emptyText = '').'</li>
				
				<li>'.s9_xray_telink($fieldname = 'telephone_number', $postid = 'options', $titletext ='', $extratext = '<i class="icon fa-regular fa-phone"></i>  <span class="title">Phone Us</span>',$className = '',$emptyText = '').'</li>
				
		   		<li><a href="#"><i class="icon fa-regular fa-house"></i>  <span class="title">By Post</span> <div class="t a">'.s9_xray_textfield('address', $postid = 'options', $tag = '', $className = 'addressbox',$emptyText = '').'</div></a></li>
		   
		   </ul>
		 </div>
	 	<div class="wcp-column contactform">'.do_shortcode('[wpforms id="156"]').'</div>
	</div>
</section>';
?>
