<?php get_header(); ?>

<!-- Row for main content area -->
<br class="clearfix"/>
<br class="clearfix"/>

	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>

		<section>
			<?php the_content();?> 
		</section>
  		
<br class="clearfix"/>
<br class="clearfix"/>
  
	<?php endwhile; // End the loop ?>

		
<?php get_footer();