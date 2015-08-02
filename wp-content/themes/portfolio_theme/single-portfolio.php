
<?php get_header(); ?>
		
	<div class="main">
	
	<div class="container">

	
	<a href="<?php echo get_permalink(27); ?>" class="back_portfolio">Back to Portfolio</a>	

	
	<div class="content">
	
	<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
	
		<div class="title">
			<h2><?php the_title(); ?></h2>
		</div>	
		
        <h4><?php the_content(); ?></h4>
        
        <?php echo the_field('callout'); ?>
        <?php echo the_field('one'); ?>
        <?php echo the_field('two'); ?>
        <?php echo the_field('three'); ?>
        <?php echo the_field('four'); ?>
        
        </div> 
       			
       			<div class="clear"></div>







<?php endwhile; ?>
    
<?php else: ?>
    
    <div class="main group">
        <div class="content">
            <h2>Page Not Found</h2>
            <p>Sorry, this page you are looking for could not be found.</p>
        </div><!--END content-->

<?php endif; ?>
					
	
<?php get_footer(); ?>	
	