<!DOCTYPE html>

<!--[if lt IE 7]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />

    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />    
    
    <!-- Mobile viewport optimized: j.mp/bplateviewport -->
 	<meta name="viewport" content="width=device-width, initial-scale=1.0" />   
   
   <!-- JavaScript -->
   
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.7.1.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
   
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.hashchange.min.js" type="text/javascript"></script>

	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.easytabs.min.js" type="text/javascript"></script>
  

    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.flexslider-min.js"></script>
   
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/responsiveCarousel.min.js"></script>   


	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/owl.carousel.min.js"></script>

	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/masonry.pkgd.min.js"></script>

	
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/slick.min.js"></script>
	
   <script>
  	$(document).ready(function(){   
	        //When btn is clicked
			$(".btn-responsive-menu").click(function() {
			  	$("#mainmenu").toggleClass("show");
			});
			
			// When resize
			$(window).resize(function () {
				if ($(window).width() > 767) {
					$("#mainmenu").show();
				} else {
					$("#mainmenu").hide();
				}
			});
	});		
   </script>

   
    <!-- Style -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/style.css" rel="stylesheet" />
    <link href="<?php bloginfo('stylesheet_directory'); ?>/css/responsive.css" rel="stylesheet" />
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>

	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/flexslider.css" type="text/css">

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/owl.carousel.css" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/owl.theme.css" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/owl.transitions.css" type="text/css">
	
    <?php wp_head(); ?> 
 
</head>
<body>
<div>
  
   <?php if(is_page('Home')){ ?>
   	
	<div class="flexslider" style="position:relative; z-index: 10; ">
	    <ul class="slides">
		<?php
			$rows = get_field('slide');
					
			if($rows) { 
								
				foreach($rows as $row) {
				$bgimg = $row['immagine']['sizes']['large']; 
  			 	
				$output = "<li style='background-image: url(". $bgimg ."); '>\n";
				$output .= "  <div class='quote' style='position: fixed; margin-left:70px; margin-top:370px;'>\n";
				$output .= "  <p>" . $row['citazione'] . "</p> ";
				$output .= "  <hr>";
				$output .= "  <h3>" . $row['autore'] . "</h3> ";
				$output .= "  </div>\n";
				$output .= "</li>\r\n\n";
 
				echo $output;
				}
			}
		?>
		</ul>
	</div>				

		<div id="mainmenu" style="position:relative; z-index:20; margin-top:-765px; margin-right:50px;">
			<?php wp_nav_menu(); ?>
		</div> <!-- #mainmenu -->			   

	 <div class="btn-responsive-menu" style="position:relative; z-index: 20; margin-top:-765px; ">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
        </div>

		
		<div  style="position:relative; z-index:20; float:left; margin-left:50px; margin-right:50px; margin-top:-780px; margin-bottom:20px;">
			  <img  id="logo" src="http://narayana.tlco.info/wp-content/uploads/2014/09/logo.png" />
		</div>
		
		
	
		<script>
		
		$(window).load(function() {
			$(".flexslider").flexslider({
				animation: "slide",
			});
		});

		</script>
		
	<div id="main" style="z-index:999; position:relative;">
	
    <?php }
	
	   elseif(is_single()) {
		$img_ID = get_field('immagine_header');?>
	
		<header id="header" style="background-image: url( <?php echo the_field('immagine_header'); ?> ); background-repeat: no-repeat; background-size: 100% 100%;">
		
		    <span style="float:left; margin-left:50px; margin-right:50px; margin-top:20px; margin-bottom:20px;">
				<img src="http://narayana.tlco.info/wp-content/uploads/2014/09/logo.png" width="120px;"/>
			</span>
		
			<div id="mainmenu" style="z-index:999; margin-top:-170px; margin-right:50px;">
				<?php wp_nav_menu(); ?>
			</div> <!-- #mainmenu -->
			   
            <div class="btn-responsive-menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </div>
		
			<br class="clearfix"/>
    		  
         </header> <!-- #header -->
		<div id="main">
	
      <?php } 
   
		else  {	
		$img_ID = get_field('immagine_header');?>
	
		<header id="header" style="background-image: url( <?php echo the_field('immagine_header'); ?> ); background-repeat: no-repeat; background-size: 100% 100%;">
		
		    <span style="float:left; margin-left:50px; margin-right:50px; margin-top:20px; margin-bottom:20px;">
				<img src="http://narayana.tlco.info/wp-content/uploads/2014/09/logo.png" width="120px;"/>
			</span>
		
			<div id="mainmenu" style="z-index:999; margin-top:-170px; margin-right:50px;">
				<?php wp_nav_menu(); ?>
			</div> <!-- #mainmenu -->
			   
            <div class="btn-responsive-menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </div>
		
			<br class="clearfix"/>
    		  
		</header> <!-- #header -->
		<div id="main">
		
      <?php }  ?>  
	  


    <!-- Prompt IE 6 and 7 users to install Chrome Frame:		chromium.org/developers/how-tos/chrome-frame-getting-started -->
    <!--[if lt IE 8]>
        <p class="chromeframe alert alert-warning">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p>
    <![endif]--> 
