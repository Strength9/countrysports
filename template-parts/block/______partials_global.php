<?php 

$blockclass = $sectionclass;
$anchor = '';
if( !empty( $block['anchor'] ) ) $anchor = ' id="' . sanitize_title( $block['anchor'] ) . '"';
if( !empty( $block['className'] ) ) $blockclass .= ' '.sanitize_title( $block['className'] );


 $sideimage = $sectiontreepos=$sectiontree= '';
 $sectiontree = s9_xray_textfield('tree_background', $postid = '', $tag = '', $className = '',$emptyText = '');
 $sectiontreepos = s9_xray_textfield('tree_background_position', $postid = '', $tag = '', $className = '',$emptyText = '');


if (($sectiontreepos != '') && ( $sectiontree != '') && ($sectiontree != 'none')){
	$sideimage = 'style="background-image:url(/wp-content/themes/countrysports/assets/img/sides/'.$sectiontreepos.'_'.$sectiontree.');  background-position:'.$sectiontreepos.' center;"';
};
?>
