

<?php get_header(); ?>
		
	<div class="main">
	
	<div class="container">
	
	<div class="content">	

	<div class="title">
		<h2>Portfolio</h2>
	</div>
		

		<div class="subnav">
			<div class="two">	
				<?php wp_nav_menu(array('menu' => 'Categories', 'container' => false, 'menu_class' => 'group')); ?>
			</div>
		</div>	
			
	
	
<?php if(is_category(3)) { ?>	
<?php $portfolioloop = new WP_Query(array(
    'paged'          => get_query_var('paged'),
    'post_type'      => 'portfolio',
    'posts_per_page' => 15,
    'tax_query'      => array(
        // Note: tax_query expects an array of arrays!
        array(
            'taxonomy' => 'category', // my guess
            'field'    => 'id',
            'terms'    => 3,
        ),
    ),
)); ?>  
  
  <?php while ( $portfolioloop->have_posts() ) : $portfolioloop->the_post(); ?>
  <div class="project">
		<div class="photo"><?php the_post_thumbnail(); ?></div>
		<div class="img_title">
			<a class="artwork" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</div>	
	</div><!--end project--!>
	
  <?php endwhile; // end of the loop. ?>
 <?php } ?> 
 
 
 
 <?php if(is_category(8)) { ?>	
<?php $portfolioloop = new WP_Query(array(
    'paged'          => get_query_var('paged'),
    'post_type'      => 'portfolio',
    'posts_per_page' => 9,
    'tax_query'      => array(
        // Note: tax_query expects an array of arrays!
        array(
            'taxonomy' => 'category', // my guess
            'field'    => 'id',
            'terms'    => 8,
        ),
    ),
)); ?>  
  
  <?php while ( $portfolioloop->have_posts() ) : $portfolioloop->the_post(); ?>
  <div class="project">
		<div class="photo"><?php the_post_thumbnail(); ?></div>
		<div class="img_title">
			<a class="artwork" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</div>	
	</div><!--end project--!>
	
  <?php endwhile; // end of the loop. ?>
 <?php } ?> 
 
 
 
 <?php if(is_category(5)) { ?>	
<?php $portfolioloop = new WP_Query(array(
    'paged'          => get_query_var('paged'),
    'post_type'      => 'portfolio',
    'posts_per_page' => 9,
    'tax_query'      => array(
        // Note: tax_query expects an array of arrays!
        array(
            'taxonomy' => 'category', // my guess
            'field'    => 'id',
            'terms'    => 5,
        ),
    ),
)); ?>  
  
  <?php while ( $portfolioloop->have_posts() ) : $portfolioloop->the_post(); ?>
  <div class="project">
		<div class="photo"><?php the_post_thumbnail(); ?></div>
		<div class="img_title">
			<a class="artwork" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</div>	
	</div><!--end project--!>
	
  <?php endwhile; // end of the loop. ?>
 <?php } ?> 
 
 
 
 <?php if(is_category(4)) { ?>	
<?php $portfolioloop = new WP_Query(array(
    'paged'          => get_query_var('paged'),
    'post_type'      => 'portfolio',
    'posts_per_page' => 9,
    'tax_query'      => array(
        // Note: tax_query expects an array of arrays!
        array(
            'taxonomy' => 'category', // my guess
            'field'    => 'id',
            'terms'    => 4,
        ),
    ),
)); ?>  
  
  <?php while ( $portfolioloop->have_posts() ) : $portfolioloop->the_post(); ?>
  <div class="project">
		<div class="photo"><?php the_post_thumbnail(); ?></div>
		<div class="img_title">
			<a class="artwork" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</div>	
	</div><!--end project--!>
	
  <?php endwhile; // end of the loop. ?>
 <?php } ?> 
 
 
 
 <?php if(is_category(7)) { ?>	
<?php $portfolioloop = new WP_Query(array(
    'paged'          => get_query_var('paged'),
    'post_type'      => 'portfolio',
    'posts_per_page' => 9,
    'tax_query'      => array(
        // Note: tax_query expects an array of arrays!
        array(
            'taxonomy' => 'category', // my guess
            'field'    => 'id',
            'terms'    => 7,
        ),
    ),
)); ?>  
  
  <?php while ( $portfolioloop->have_posts() ) : $portfolioloop->the_post(); ?>
  <div class="project">
		<div class="photo"><?php the_post_thumbnail(); ?></div>
		<div class="img_title">
			<a class="artwork" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</div>	
	</div><!--end project--!>
	
  <?php endwhile; // end of the loop. ?>
 <?php } ?> 


 
 <?php if(is_category(6)) { ?>	
<?php $portfolioloop = new WP_Query(array(
    'paged'          => get_query_var('paged'),
    'post_type'      => 'portfolio',
    'posts_per_page' => 9,
    'tax_query'      => array(
        // Note: tax_query expects an array of arrays!
        array(
            'taxonomy' => 'category', // my guess
            'field'    => 'id',
            'terms'    => 6,
        ),
    ),
)); ?>  
  
  <?php while ( $portfolioloop->have_posts() ) : $portfolioloop->the_post(); ?>
  <div class="project">
		<div class="photo"><?php the_post_thumbnail(); ?></div>
		<div class="img_title">
			<a class="artwork" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</div>	
	</div><!--end project--!>
	
  <?php endwhile; // end of the loop. ?>
 <?php } ?> 
 
 
 

					
		
	</div><!--END content-->
	</div><!--END container-->
	
	</div><!--END main-->
	
	

<?php get_footer(); ?>	
	