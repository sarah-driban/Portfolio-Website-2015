
<?php get_header(); ?>
		
	<div class="main">
	
	<div class="container">
	
	<div class="content">	
	
	<div class="title">
		<h2>Blog</h2>
	</div>
	
	<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>


	


	<div class="whole_post">	
		<div class="post_img"><?php the_post_thumbnail(); ?></div>

		<div class="post">
			<a class="blog_title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <h4><?php the_time("F j, Y"); ?></h4>
            <?php the_excerpt(); ?>
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
					
	
		
	</div><!--END content-->
	</div><!--END container-->
	
	</div><!--END main-->
	
	

<?php get_footer(); ?>	
	