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
$blockclass = $sectionclass;
$anchor = '';
if( !empty( $block['anchor'] ) ) $anchor = ' id="' . sanitize_title( $block['anchor'] ) . '"';
if( !empty( $block['className'] ) ) $blockclass .= ' '.sanitize_title( $block['className'] );


$hero_size = s9_xray_textfield('hero_size', $postid = '', $tag = '', $className = '',$emptyText = '');
 
 // Check rows existexists.
 if( have_rows('slides') ):
 
	 // Loop through rows.
	 $sub_value = '';
	 $class = ' current';
	 while( have_rows('slides') ) : the_row();

 
		 // Load sub field value.
		 $sub_value .= '<li  class="item'.$class.'" style="background-image:url('.get_sub_field('slide_background').');">
		 	<h2>'.get_sub_field('central_text').'</h2>
		 	<h4>'.get_sub_field('strapline').'</h4>
		 </li>';
		 $class = '';

	 endwhile;
 
 $slider = '<section class="heroslider '.$hero_size.'"> 
 
 <div class=slider>
   <ul class=items>
	'.$sub_value.'
   </ul>
  
	 <button type="button" id="prev" class="button prev"></button>
	 <button type="button" id="next" class="button next"></button>

  
 </div>
 
 </section>
 <script>
 function slider(flag, num) {
   	var current = jQuery(".item.current"),
	   	next,
	   	index;
   	if (!flag) {
	 	next = current.is(":last-child") ? jQuery(".item").first() : current.next();
	 	index = next.index();
   	} else if (flag === "dot") {
	 	next = jQuery(".item").eq(num);
	 	index = num;
   	} else {
	 	next = current.is(":first-child") ? jQuery(".item").last() : current.prev();
	 	index = next.index();
   	}
   	next.addClass("current");
   	current.removeClass("current");
   	jQuery(".dot").eq(index).addClass("current").siblings().removeClass("current");
 }
 var setSlider = setInterval(slider, 8000);
 
 jQuery(".button").on("click", function() {
   clearInterval(setSlider);
   var flag = jQuery(this).is(".prev") ? true : false;
   slider(flag);
   setSlider = setInterval(slider, 4000);
 });

</script>
';
 // No value.
 else :
	 $slider = '<section '.$anchor.' class="'.$blockclass .' '.$hero_size.'" '.s9_xray_style_backgroundimage_URL('header_background', $postid = '').'>'.s9_xray_textfield('central_heading', $postid = '', $tag = 'h2', $className = '',$emptyText = '').s9_xray_textfield('strap_line', $postid = '', $tag = 'h4', $className = '',$emptyText = '').'</section>';
 endif;
 
 
echo $slider;

?>
