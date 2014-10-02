<?php
/*
Template Name: Home
*/
get_header(); ?>

<div id="main">
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
 

    <center>
		<section style="overflow:unset; margin-top:-30px; position:relative; z-index:20;">
		  <div class="button" style=" height:50px;"> 
			<img src="http://narayana.tlco.info/wp-content/uploads/2014/09/sliderdown.png" />
		  </div>
		  <div class="contenuto treColonne" style="max-height: 400px; min-height:380px;">    
			<?php the_content(); ?>
		  </div>
		</section>
	</center>
	<br clear="both" />
	<br clear="both" />
	
<div style="background: #FF7E00; color:#fff; margin-top: -40px;" class="negative">

<div id="w">
    <h3 style="color:#fff;">News</h3>
    <hr style="width:10%; border-color:#fff;"/>
    
    <nav class="slidernav">
      <div id="navbtns" class="clearfix">
        <a href="#" class="previous" style="position:absolute; left:0; margin-top:45px; "><img src="http://narayana.tlco.info/wp-content/uploads/2014/09/frecciasxbianca1.png"/></a>
        <a href="#" class="next" style="position:absolute; right:0; margin-top:45px;"><img src="http://narayana.tlco.info/wp-content/uploads/2014/09/frecciadxbianca1.png"/></a>
      </div>
    </nav>
    
    <div class="crsl-items" data-navigation="navbtns">
      <div class="crsl-wrap">
	  
		<?php $query = new WP_Query( array( 'cat'=>-16) );
		
		while( $query->have_posts() ) {
		
			$query->the_post();
			$id = get_the_ID();
			$content = get_the_content();
			$permalink = get_the_permalink($id);
			$title = get_the_title();
			$giorno = get_the_date('d');
			$mese = get_the_date('M');		?>
				  
        <div class="crsl-item">
          <div class="thumbnail">            
            <div class="postdate">
		<span id="giornohome" style="font-weight:400; margin-bottom:0px; font-size:35px;"><?php echo $giorno; ?></span>
		<span style="font-size:23px; text-transform:uppercase; font-weight:300; margin-left:2px;"><?php echo $mese; ?></span>
	    </div> <!--post-->
          </div> <!--thumb-->         
          <h3><a href="<?php echo $permalink; ?>"><?php echo $title; ?></a></h3>       
		  <p><?php echo substr($content, 0, 200);  ?></p>
        </div><!-- crsl-item -->
        
		<?php } ?>
   	   
      </div><!-- crsl-wrap -->
    </div><!-- crsl-items -->
    
</div><!-- @end #w -->
</div>

<br clear="both" />

<?php endwhile; // End the loop ?>		

<script>
		$(document).ready(function(){
			$(".contenuto").hide();
			$(".button").toggle(function(){
				$(this).next().slideDown();
			},
			function(){
				$(this).next().slideUp();
			});

			$(".arrowright").click(function () {
				$(".dueColonne").toggle("slide", { direction: "left" }, 1000);
			});		
			
			$(".arrowleft").click(function () {
				$(".dueColonne").toggle("slide", { direction: "right" }, 1000);
			});

			$(function(){
				$('.crsl-items').carousel({
					visible: 2,
					itemMinWidth: 380,
					itemEqualHeight: 370,
					itemMargin: 100,
				});
  
				$("a[href=#]").on('click', function(e) {
					e.preventDefault();
				});
			});
			
		});			
</script>

<?php get_footer(); ?>
