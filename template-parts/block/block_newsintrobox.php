<?php
/*
Block Name: News Intro Box
Block Description: News Intro Box
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: s9blocks
*/
$sectionclass = 'newsintroblock';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include('______partials_global.php');



/* --------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="'.$blockclass .'" '. $sideimage.'>
	<div class="wcp-columns">
	 	<div class="wcp-column full">
		 
		 <div class="newsarticles">
		 <div classs="latestsarticle">
		 	<div class="newsholder" '.s9_xray_style_backgroundimage_URL('newsholder_image', $postid = '').'> </div>
		   		<article class="article1">
			 		<div class="image"></div>
			 		<div class="text">
			   		<date>Wednesday 24th Feb 2023</date>
			   		<h3>Nori grape silver beet broccoli</h3>
			   		<p>kombu beet Bunya nuts Pea prairie turnip leek lentil turnip greens parsnip. Sea lettuce lettuce water chestnut eggplant winter purslane.</p>
			   		<A href="#" title="Read More"> Read more</a>
			 		</div>
		   		</article>
		   </div>
		   <div class="introduction">
			'.s9_xray_textfield('main_title', $postid = '', $tag = 'h2', $className = '',$emptyText = '').
			 s9_xray_textfield('strapline', $postid = '', $tag = 'h4', $className = '',$emptyText = '').s9_xray_textfield('text_area', $postid = '', $tag = '', $className = '',$emptyText = '').'
		   </div>
		 </div>
		 
		 </div>
	</div>
</section>';
?>
