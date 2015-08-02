
<?php get_header(); ?>
		
	<div class="main">
	
	<div class="container">
	
	<div class="content">	
	
	<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>


		<?php the_content(); ?>
		
	</div><!--END content-->
	</div><!--END container-->
	
	</div><!--END main-->
	
	<?php endwhile; ?>
    
<?php else: ?>
    
    <div class="main group">
        <div class="content">
            <h2>Page Not Found</h2>
            <p>Sorry, this page you are looking for could not be found.</p>
        </div><!--END content-->

<?php endif; ?>

<?php get_footer(); ?>	
	