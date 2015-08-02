<?php //Template Name: Project ?>


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
			
	<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>

		

	
	<div class="project">
		<div class="photo"><?php the_post_thumbnail(); ?></div>
		<div class="img_title">
			<a class="artwork" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</div>	
	</div><!--end project--!>

	
	<?php endwhile; ?>
    
<?php else: ?>
    
    <div class="main group">
        <div class="content">
            <h2>Page Not Found</h2>
            <p>Sorry, this page you are looking for could not be found.</p>
        </div><!--END content-->

<?php endif; ?>
					
		
	</div><!--END content-->
	</div><!--END container-->
	
	</div><!--END main-->
	
	

<?php get_footer(); ?>	
	