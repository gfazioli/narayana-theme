<?php /*** Funzione Menu Attiva ***/

	if (function_exists('add_theme_support')) {
		add_theme_support('menus');
	}

?>
<?php /*** Formattazione Widget ***/

	if ( function_exists('register_sidebar') )
	register_sidebar(array(
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',	
	'after_widget' => '</aside>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
	
	if ( function_exists('register_sidebar') )
	register_sidebar(array(
	'name'          => __( 'Footer1', 'narayana-theme' ),
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',	
	'after_widget' => '</aside>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
	
	if ( function_exists('register_sidebar') )
	register_sidebar(array(
	'name'          => __( 'Footer2', 'narayana-theme' ),
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',	
	'after_widget' => '</aside>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
?>
<?php /*** Paginazione con numeri ***/

function buby_pagination($pages = '', $range = 9)
{  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         echo "<div class='pagination'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div>\n";
     }
}

?>
<?php /*** Funzione Thumbnail Attiva ***/

add_theme_support('post-thumbnails');

if ( function_exists('add_theme_support') ) {
	add_theme_support('post-thumbnails');
}
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'index-thumb', 600, 999 ); 	//(cropped) 
			
}
?>

<?php
function archive() {
    
    $html = '<section style="overflow:visible;"><ul class="archiveslist">';

	$query = new WP_Query( array('posts_per_page'=>100, 'cat'=>-16) );
		
		while( $query->have_posts() ) {
		
			$query->the_post();
			$id = get_the_ID();
			$content = get_the_content();
						
			$html .=  '<li><a href="' . get_the_permalink($id) . '" >
							<span id="immagineBlog">' 
								.get_the_post_thumbnail( $id, array(250,250), array('class' => 'circolareImmaginiBlog') ).' </span>
					 		<center><div id="dataBlog" class="circolareDataBlog">
								<span id="giornoBlog">' . get_the_date('d') . '</span><br class="clearfix"/>
								<span id="meseBlog">' . get_the_date('M') . '</span>
							</div></center><br class="clearfix"/>
					   <div class="articoloBlog">
					   <h1>' . get_the_title() . '</h1>
					   <h4>' . get_the_excerpt(). '</h4><br class="clearfix"/>
					   <p>' . substr($content, 0, 200) . '</p><br class="clearfix"/>
					   <h6>' . "LEGGI DI PIÙ" . '</h6></div>
					</a></li>' ;
		}
		
		wp_reset_postdata();
		
	$html .= '</ul></section>';

	return $html;
}
?>

<?php
function galleria() {
    
    $html = '<section style="overflow:visible;"><ul class="gallerylist">';

	$query = new WP_Query( array('cat'=>16) );
		
		while( $query->have_posts() ) {
		
			$query->the_post();
			$id = get_the_ID();
			$content = get_the_content();
			$conta=0;	
				
			$html .=  '<li style="margin-bottom:100px; max-height:250px; ">			
						<div class="circolareGalleria" style=" margin-top: 0px; width: 250px; height: 250px; border-radius:999em; -moz-border-radius:999em; -webkit-border-radius:999em; -o-border-radius: 999em;  background-color: #000; color: #fff;">
							<center>
								<h2>' . get_the_title() . '</h2>
								<p>' . get_the_excerpt(). '</p>
							</center>
							 <span class="circolareNumFoto" ><p style="margin-left:-35px; font-size:40px; font-weight:400; margin-top: -5px;"> '. $conta .'</p><p style="font-size:25px; margin-left:-35px; margin-top:-30px;">FOTO</p></span>
						</div>
						<div style="display: inline-flex; position:relative; z-index:1;">' . do_shortcode( $content ) . '</div> 
		     			 <br class="clearfix"/>
			    	   </li>' ;
		}
		
		wp_reset_postdata();
		
	$html .= '</ul></section>'; ?>

	
	<?php return $html;?>
		
	
<?php }
