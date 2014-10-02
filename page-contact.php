<?php
/*
Template Name: Contatti
*/
get_header(); ?>


	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>

        <section>
			<div>
				<br class="clearfix"/>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2838.687568619449!2d10.955710799999997!3d44.644302200000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477fe8cb16cf4769%3A0x8cb12491b9827ab1!2sViale+dello+Sport%2C+41122+Modena+MO!5e0!3m2!1sit!2sit!4v1411043962894" width="900" height="450" frameborder="0" style="border:0"></iframe>
				<br class="clearfix"/>
			</div>

			<br class="clearfix"/>
			<br class="clearfix"/>

			<center>
				<div>
					<?php the_content(); ?>
				</div>
			</center>
	    </section>
		
	<?php endwhile; // End the loop ?>
	
   <br class="clearfix"/>
		
<?php get_footer(); ?>
