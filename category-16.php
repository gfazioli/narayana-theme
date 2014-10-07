<?php get_header(); ?>

<br /> <br/>
<ul class="gallerylist">
				
<?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?> 
 <li >    
<div >
	<?php $images = get_field('galleria');

		if( $images ): ?>
		<ul class="owl-demo" class="js-masonry" data-masonry-options='{ "columnWidth": 60, "itemSelector": ".masonry"}'>
			<?php foreach( $images as $image ):
				$conta++; ?>			
            <li class="item masonry"  >
                <a href="<?php echo $image['url']; ?>" >
                    <img src="<?php echo $image['sizes']['thumbnail'];?>"/>
                </a>
            </li>
			<?php endforeach; ?>
		</ul>
			<?php endif; ?>
	</div>
			
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
	
 var owl = $(".owl-demo");
 
owl.owlCarousel({
items : 4, //10 items above 1000px browser width
itemsDesktop : [1000,4], //5 items between 1000px and 901px
itemsDesktopSmall : [900,3], // betweem 900px and 601px
itemsTablet: [600,2], //2 items between 600 and 0
itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
});
 
// Custom Navigation Events
$(".next").click(function(){
owl.trigger('owl.next');
})
$(".prev").click(function(){
owl.trigger('owl.prev');
})



});
</script>	
 
           
</ul> <!-- #content -->
		

<?php get_footer();
