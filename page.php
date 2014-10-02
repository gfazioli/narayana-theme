<?php get_header(); ?>

 <div id="content" role="main">
 
    	<?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?> 
       
        <article class="post">
        
            <h2 class="entry-title"><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            
           
				<?php if ( has_post_thumbnail() ) { ?>
              
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('index-thumb', array('class' => 'index-thumb')); ?>
                    </a>
              
                 
                <?php } ?> 
           
            <div class="entry-content">
                <?php the_content('Leggi...');?> 
            </div> <!-- .entry-content -->

        </article> <!-- .post  -->
        
        <hr /> 

		<?php endwhile; ?>

        <?php else : ?>
        
             <article class="post">
             
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                
            </article> 
         
        <?php endif; ?> 

    </div> <!-- #content -->
    
    <aside id="sidebar" role="complementary">
    
       <?php get_sidebar(); ?>
    
    </aside> <!-- #sidebar -->

<?php get_footer(); ?>
		

	