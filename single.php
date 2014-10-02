
<?php get_header(); ?>

<br class="clearfix"/>
<br class="clearfix"/>

 <div id="main">
 
    <?php 
	$category_id = get_cat_ID('Galleria');
	
	if (have_posts()) :?><?php while(have_posts()) : the_post(); ?> 
    
	 <?php if ( in_category($category_id) ) { ?>
          
		  
		  
		  
	<?php } else { ?>		   
    <section style="overflow:visible;">	      
			
			<br class="clearfix"/>
			
			<?php if ( has_post_thumbnail() ) { ?>
            <span style="float:left;">   
				<?php the_post_thumbnail( array(250,250), array('class' => 'circolareImmaginiBlog') ); ?>
            </span>
            <?php } ?> 
			
			<span style="float:left; margin-left:-250px; margin-top: -40px;" class="circolareDataBlog" >
				<center><span style="float:left; margin-left:27px; margin-top:10px; font-size:40px; font-weight:400;">
					<?php echo date('d')?></span><br />
				<span style="float:left; margin-left:30px; margin-top:-19px; text-transform:uppercase; font-weight:300; font-size:25px;">
					<?php echo date('M')?></span>
				</center>
			</span>
			
			<span style="float:left; margin-left: -100px; margin-top: 170px;" class="circolareTagBlog" >
				<center>
					<ul>
					<div style="margin-bottom:7px;"> </div>
					<span style="margin-bottom: 0px; text-transform:uppercase; font-weight:300; font-size:25px; padding-top:10px;"> <?php echo "TAGS" ?></span>
					
					<?php $posttags = get_the_tags();
					$conta==0;
						if ($posttags) {
							foreach($posttags as $tag) {
							  if($conta<=4) {
								$conta++;
								echo '<li style="font-weight:300; font-size:12px; line-height: 12px; list-style-type:none;">#' . $tag->name . '</li>'; 
							  }	
						}
					}
					?>
					</ul>
				</center>
			</span>
					
            <h1 style="float:left; margin-left:35px;"><?php the_title(); ?></h1> 
            <h4 style="float:left; margin-left:285px; margin-top:-210px; color:#000; font-weight:300;">
				<?php echo get_the_excerpt(); ?>
			</h4>
			
			<br class="clearfix"/>
                           
            <div style="float:left; margin-left:285px; margin-top:-170px;">
                <?php the_content();?> 
            </div> <!-- .entry-content -->
    </section> <!-- .post  -->
	
 <?php } ?>
    <br class="clearfix"/>
    <br class="clearfix"/>
        
	<?php endwhile; ?>
                
    <?php else : ?>
    <section>
             
		<h1><?php _e('Sorry, no posts matched your criteria.'); ?></h1>
                
    </section>

    <?php endif; ?> 
    
</div> <!-- #content -->
   

<?php get_footer(); ?>
		

	