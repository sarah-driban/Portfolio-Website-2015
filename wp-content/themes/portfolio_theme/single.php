
<?php get_header(); ?>
		
	<div class="main">
	
	<div class="container">

	
	<a href="<?php echo get_permalink(6); ?>" class="back_portfolio">Back to My Blog</a>	

	
	<div class="content">
	
	<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
	
		<div class="blog_post">	
		<div class="post_img"><?php the_post_thumbnail(); ?></div>

		<div class="post">
			<p class="article_title"><?php the_title(); ?></p>
            <h4><?php the_time("F j, Y"); ?></h4>
            <?php the_content(); ?>
        </div> 
       			
       			<div class="clear"></div>
	</div><!--END whole_post--> 

<?php endwhile; ?>
    
<?php else: ?>
    
    <div class="main group">
        <div class="content">
            <h2>Page Not Found</h2>
            <p>Sorry, this page you are looking for could not be found.</p>
        </div><!--END content-->

<?php endif; ?>
					
	
<?php get_footer(); ?>	
	