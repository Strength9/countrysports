<?php 
$footfacebook = s9_xray_socialicon('facebook_link', $postid = 'options', $fontawesome = 'fa-brands fa-square-facebook', $titletext = 'Find Us On Facebook',$emptyText = '', '');
$twitter_link = s9_xray_socialicon('twitter_link', $postid = 'options', $fontawesome = 'fa-brands fa-square-twitter', $titletext = 'Find Us On Twitter',$emptyText = '', '');
$instagram_link = s9_xray_socialicon('instagram_link', $postid = 'options', $fontawesome = 'fa-brands fa-square-instagram', $titletext = 'Find Us On Insta',$emptyText = '', '');
$inkedin_link = s9_xray_socialicon('linkedin_link', $postid = 'options', $fontawesome = 'fa-brands fa-linkedin', $titletext = 'Find Us On Linked In',$emptyText = '', '');
$tik_tok_link = s9_xray_socialicon('tik_tok_link', $postid = 'options', $fontawesome = 'fa-brands fa-tiktok', $titletext = 'Find Us On tic tok',$emptyText = '', '');
if (strlen($footfacebook.$twitter_link.$instagram_link.$inkedin_link.$tik_tok_link) > 0) {$socialmedialinks = '<ul><li class="socials">'.$footfacebook.$twitter_link.$instagram_link.$inkedin_link.$tik_tok_link.'</li></ul>';} else { $socialmedialinks = '';}; ?>




<footer>
	<section class="footercontent">
				  <div class="bussdetails">
					  <a href="<?php echo get_home_url();?>"><?php  $footerlogo; ?></a>
					  <p>Shooting  •  Fishing  •  Equine</p>
					
						
				  </div>
				  <div class="menu1">
					  <?php wp_nav_menu( array(  'menu' => 'Footer1','container'  => 'li', 'container_class' => '', 'container_id'    => '',   'depth' => 1, 'items_wrap' => '<ul ><li class="title"><span>Quick Links</span></li>%3$s</ul>' ) );?>
					</div>
				  <div class="menu2">
					<?php wp_nav_menu( array(  'menu' => 'Footer2','container'  => 'li', 'container_class' => '', 'container_id'    => '',   'depth' => 1, 'items_wrap' => '<ul ><li class="title"><span>The Legal Bits</span></li>%3$s</ul>' ) );?>
				  </div>
				  <div class="contactdetails">
					  <ul>
						  <li class="title"><span>Contact Info</span></li>
						  
						 <li><?php echo s9_xray_maillink($fieldname = 'email_address', $postid = 'options', $titletext ='Email the team', $extratext = '<i class="fa-regular fa-envelope"></i> ',$className = '',$emptyText = '');?></li>
						 
						 <li><?php echo s9_xray_telink($fieldname = 'telephone_number', $postid = 'options', $titletext ='Email the team', $extratext = '<i class="fa-regular fa-phone"></i> ',$className = '',$emptyText = '');?></li>

						  
						 
					  </ul>
					  <?php echo $socialmedialinks;?>
				  </div>
					<div class="copyrightstrip">
						<div><p>© Copyright 2023. All Rights Reserved | Website by Strength 9 Ltd</p></div>
					</div>
	</section>
	
	
</footer>

<?php wp_footer(); ?>

</body>
</html>

