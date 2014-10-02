<?php get_header(); ?>

 <div id="content" role="main">
 		
        <h2>Risultati per: "<i><?php echo $s; ?> </i>"</h2>
        
    	<?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?> 
    
        <article class="post">
        
            <h2 class="entry-title"><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            
            <p>
                In <?php the_category(','); ?>
                
                il <time datetime="<?php the_time('j M , Y') ?>" pubdate><?php the_time('j M , Y') ?></time>
            </p>
            
           
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
        
         
                <?php buby_pagination(); ?>
                
          
        
        <?php else : ?>
        
             <article class="post">
             
             	<h4>La ricerca per "<i><?php echo $s; ?> </i>" non ha dato nessun risultato.</h4>  
                   
              
                
                
            </article> 
         
        <?php endif; ?> 
        
       
    
    </div> <!-- #content -->
    
    <aside id="sidebar" role="complementary">
    
       <?php get_sidebar(); ?>
    
    </aside> <!-- #sidebar -->
   

<?php get_footer(); ?>
		

	