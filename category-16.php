<?php get_header(); ?>

<ul class="gallerylist">
				
 <?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?> 
 <li class="owl-demo" >    

   <div style="overflow:hidden; margin-bottom:100px; max-height:200px; "  class="js-masonry"
  data-masonry-options='{ "columnWidth": 1, "itemSelector": ".item" }' >
			
		<!--<?php //$image_ids = get_field('galleria', false, false);
				//$shortcode = '[gallery ids="' . implode(',', $image_ids) . '"]';
					//if($image_ids):
					//foreach( $image_ids as $image ): 
					//$conta++; ?>
		
				<?php //endforeach;
					//endif;		 ?>
				  <?php //echo do_shortcode( $shortcode ); ?>-->

	<?php $images = get_field('galleria');

		if( $images ): ?>
		<ul >
			<?php foreach( $images as $image ):
				$conta++; ?>			
            <li>
                <a href="<?php echo $image['url']; ?>">
                     <img class="item" src="<?php echo $image['sizes']['thumbnail'];?>"   />
                </a>
            </li>
			<?php endforeach; ?>
		</ul>
			<?php endif; ?>
			
    </div> <!-- .entry-content -->
		
	<div class="customNavigation">
		<a class="btn prev" style="float:left; position:relative; z-index:4; margin-top: -200px;"><img src="http://narayana.tlco.info/wp-content/uploads/2014/09/frecciasxbianca1.png"/></a>
		<a class="btn next" style="float:right; position:relative; z-index:4; margin-top: -200px;"><img src="http://narayana.tlco.info/wp-content/uploads/2014/09/frecciadxbianca1.png"/></a>
	</div> 
			
	<div class="circolareGalleria" style=" position:relative; margin-top: -300px; width: 250px; height: 250px; border-radius:999em; -moz-border-radius:999em; -webkit-border-radius:999em; -o-border-radius: 999em;  background-color: #000; color: #fff;">
		<center>
			<h2><?php echo the_title(); ?></h2>
			<p><?php echo the_excerpt(); ?></p>
		</center>
		<div class="circolareNumFoto">
			<p style="margin-left:-35px; font-size:40px; font-weight:400; margin-top: -5px;"><?php echo $conta;?></p>
			<p style="font-size:25px; margin-left:-35px; margin-top:-30px;">FOTO</p>
		</div>
	</div>					
			
 </li>        
 <?php 
 $conta=0;
 endwhile; ?>               
         
 <?php else : ?>
        
 <li>         
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>                
 </li> 
         
 <?php endif; ?> 

 
 <script>
$(document).ready(function() {
	
	$(".next").click(function () {
 
    // Set the effect type
    var effect = 'slide';
 
    // Set the options for the effect type chosen
    var options = { direction: 'left' };
 
    // Set the duration (default: 400 milliseconds)
    var duration = 700;
 
    $('.item').toggle(effect, options, duration);
});

	$(".prev").click(function () {
 
    // Set the effect type
    var effect = 'slide';
 
    // Set the options for the effect type chosen
    var options = { direction: 'right' };
 
    // Set the duration (default: 400 milliseconds)
    var duration = 700;
 
    $('.item').toggle(effect, options, duration);
});


});
</script>	
 
           
</ul> <!-- #content -->
		

<?php get_footer();
