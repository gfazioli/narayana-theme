<?php
/*
Template Name: Galleria
*/
get_header(); ?>

<!-- Row for main content area -->
<br class="clear"/>
<br clear="both" />
<br clear="both" />

<ul class="gallerylist">
 <?php 
	$category_id = get_cat_ID('Galleria');
	
	if (have_posts()) :?><?php while(have_posts()) : the_post(); ?> 
    
	 <?php if ( in_category($category_id) ) { ?>
            

	<?php //$query = new WP_Query( array('cat'=>16) );
		
		//while( $query->have_posts() ) {
		
			//$query->the_post();
			//$content = get_the_content();
			//$conta=0; ?>

	<li style="margin-bottom: 50px; height:300px; border:1px solid #000;">		
	<div style="height:200px;">
                <?php 
				$image_ids = get_field('galleria', false, false);

				$shortcode = '[gallery ids="' . implode(',', $image_ids) . '"]';

				echo do_shortcode( $shortcode ); ?>
    </div> <!-- .entry-content -->
			
	<div class="customNavigation">
		<a class="btn prev" style="float:left; position:relative; z-index:4; margin-top: -150px;"><img src="http://narayana.tlco.info/wp-content/uploads/2014/09/frecciasxbianca1.png"/></a>
		<a class="btn next" style="float:right; position:relative; z-index:4; margin-top: -150px;"><img src="http://narayana.tlco.info/wp-content/uploads/2014/09/frecciadxbianca1.png"/></a>
	</div> 
			
	<div class="circolareGalleria" style="margin-top: -230px; width: 250px; height: 250px; border-radius:999em; -moz-border-radius:999em; -webkit-border-radius:999em; -o-border-radius: 999em;  background-color: #000; color: #fff;">
		<center>
			<h2><?php echo the_title(); ?></h2>
			<p><?php echo the_excerpt(); ?></p>
		</center>
		<span class="circolareNumFoto">
			<p style="margin-left:-35px; font-size:40px; font-weight:400; margin-top: -5px;"><?php echo $conta;?></p>
			<p style="font-size:25px; margin-left:-35px; margin-top:-30px;">FOTO</p>
		</span>
	</div>			
	
	</li>		  
		   
	<?php } ?>			
				
</ul>

<script>
$(document).ready(function() {
     	 
    var owl = $(".owl-demo");
     
    owl.owlCarousel({
		items : 6, //10 items above 1000px browser width
		itemsDesktop : [1000,6], //5 items between 1000px and 901px
		itemsDesktopSmall : [900,4], // betweem 900px and 601px
		itemsTablet: [600,3], //2 items between 600 and 0
		itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
    });
     
    // Custom Navigation Events
    $(".next").click(function(){
		owl.trigger('owl.next');
    });
	
	$(".prev").click(function(){
		owl.trigger('owl.prev');
    });
	
});



</script>
	
<br clear="both" />
<br clear="both" />


<?php get_footer(); ?>

