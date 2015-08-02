<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php wp_title( '-', true, 'right' ); bloginfo( 'name' ); ?></title>
    
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="http://malsup.github.com/jquery.cycle2.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/cycle2.js"></script>
   
 	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,800italic,800,400' rel='stylesheet' type='text/css'>
     
	<?php wp_head(); ?>
	
</head>

<body <?php body_class() ?>>

<div class="outer_container">



	<div class="header">
	
	<div class="container">
	
			
			<div class="nav">
				<?php wp_nav_menu(array('menu' => 'Top Navigation', 'container' => false, 'menu_class' => 'group')); ?>
			</div>
						
			<div class="clear"></div>
			
			
				
		<div class="media">
				<a href="http://www.behance.net/sarahdriban"><img src="<?php bloginfo('template_url'); ?>/images/yelow_behance.png" class="social right blue"><img src="<?php bloginfo('template_url'); ?>/images/behance.png" class="social original"></a>
				<a href="http://www.linkedin.com/in/sarahdriban"><img src="<?php bloginfo('template_url'); ?>/images/linkedin.png" class="social original"><img src="<?php bloginfo('template_url'); ?>/images/yellow_linkedin.png" class="social blue"></a>	
		</div><!--END media-->
		
		
		
	</div><!--END container-->
	
	</div><!--END header-->
	
	