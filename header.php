<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php wp_title('');  ?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); 

$headerlogo = s9_xray_imagefield("header_logos", $postid = "options",  $className = "countrysports");

?>
</head>

<body <?php body_class();?>>
<header>
	
	<nav class="navigation-menu">
		
		  <label class="menuopen" aria-label="Open navigation menu" for="menu-toggle">
		  <i class="fa-light fa-bars"></i></label>
		  <input type="checkbox" id="menu-toggle" />
		  <?php wp_nav_menu( array(  'menu' => 'MainNavigation','container'  => '', 'container_class' => '', 'container_id'    => '',   'depth' => 3 , 'items_wrap' => ' <ul class="main-navigation">
		  <div class="logo"><a href="'.home_url().'">'.$headerlogo.'</a></div>
		  <label for="menu-toggle"  aria-label="Close navigation menu" class="menuclose"><i class="fa-thin fa-square-xmark"></i></label>%3$s</ul>' ) );?>  
	</nav>
</header>