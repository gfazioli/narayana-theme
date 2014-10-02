<?php
/*
Template Name: Palinsesto
*/
get_header(); ?>

<!-- Row for main content area -->


	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
	
		<center>	
		<table style="border:none; width:100%; text-align:center; margin:0;" class="negative tabs">
			<tr>
			<td style="border:none; width:10%;">
			</td>
			<td style="border:none;" class="palinsesto1">
				<a  href="#tab1">
					<img src="<?php the_field("immagine_palinsesto1", $post_id); ?>" style="float:left; margin: 30px 15px 15px 0px; width:78px;"/>
					<p style="font-size:1.4em; text-transform:uppercase; text-align:center;"><?php the_field("titolo_palinsesto1", $post_id); ?></p>
					<hr style="margin:0;border:none;border-top:2px solid #fff;clear:none;">
					<p style="text-align:center; text-transform:lowercase;"><?php the_field("sottotitolo_palinsesto1", $post_id); ?></p>
				</a>
			</td>
			<td style="border:none;" class="palinsesto2">
				<a  href="#tab2">
					<img src="<?php the_field("immagine_palinsesto2", $post_id); ?>" style="float:left; margin: 30px 15px 15px 0px; width:78px;"/>
					<p style="font-size:1.4em; text-transform:uppercase; text-align:center;"><?php the_field("titolo_palinsesto2", $post_id); ?></p>
					<hr style="margin:0;border:none;border-top:2px solid #fff;clear:none;">
					<p style="text-align:center; text-transform:lowercase;"><?php the_field("sottotitolo_palinsesto2", $post_id); ?></p>
				</a>
			</td>
			<td style="border:none;" class="palinsesto3">
				<a href="#tab3">
					<img src="<?php the_field("immagine_palinsesto3", $post_id); ?>" style="float:left; margin: 30px 15px 15px 0px; width:78px;"/>
					<p style="font-size:1.4em; text-transform:uppercase; text-align:center;"><?php the_field("titolo_palinsesto3", $post_id); ?></p>
					<hr style="margin:0;border:none;border-top:2px solid #fff;clear:none;">
					<p style="text-align:center; text-transform:lowercase;"><?php the_field("sottotitolo_palinsesto3", $post_id); ?></p>
				</a>
			</td>
			<td style="border:none;" class="palinsesto4">
				<a href="#tab4">
					<img src="<?php the_field("immagine_palinsesto4", $post_id); ?>" style="float:left; margin: 30px 15px 15px 0px; width:78px;"/>
					<p style="font-size:1.4em; text-transform:uppercase; text-align:center;"><?php the_field("titolo_palinsesto4", $post_id); ?></p>
					<hr style="margin:0;border:none;border-top:2px solid #fff;clear:none;">
					<p style="text-align:center; text-transform:lowercase;"><?php the_field("sottotitolo_palinsesto4", $post_id); ?></p>
				</a>
			</td>
			<td style="border:none; width:10%;">
			</td>
			</tr>
		</table>			
		</center>

		<br class="clearfix"/>
		<br class="clearfix"/>
				
<!-- contenitori -->
<div class="contenitore_tabs">

<!-- insegnanti -->
        <div style="margin-left:50px; margin-right:50px;" id="tab1" class="blocco-tab">
			<?php
	if( have_rows('insegnante') ):
	while ( have_rows('insegnante') ) : the_row(); ?>

<div>
	<div style="width:50%; float:left;">
		<img src="<?php the_sub_field('immagine_insegnante')?>" style="float:left; margin-right:30px;" class="circolareImmaginiBlog "/>
		<span class="descrizionePalinsesto" style="display:block;">
		<h1><?php the_sub_field('nome_insegnante')?> </h1>
		<h4><?php the_sub_field('ruolo_insegnante')?></h4> <br/>
		<p><?php the_sub_field('descrizione_insegnante')?></p></span>
	</div>
	
	<div class="tab-container" style="width:40%; float:right; margin-top:-15px;">
	<ul style="list-style-type:none; display:inline-flex; float:right; clear:both;" class="etabs tab-orario"> 
			<li class="tab"><a href="#tabs-1"><h2 style="border-left:none;">LUN</h2></a></li>
			<li class="tab"><a href="#tabs-2"><h2>MAR</h2></a></li>
			<li class="tab"><a href="#tabs-3"><h2>MER</h2></a></li>
			<li class="tab"><a href="#tabs-4"><h2>GIO</h2></a></li>
			<li class="tab"><a href="#tabs-5"><h2>VEN</h2></a></li>
			<li class="tab"><a href="#tabs-6"><h2>SAB</h2></a></li>
			<li class="tab"><a href="#tabs-7"><h2>DOM</h2></a></li>

	</ul>
	<br class="clearfix"/>
	      <table id="tabs-1" style="float:right;" class="tabs"> 
			<thead>
				<tr>
					<th class="left" width="25%">Orario</th>
					<th class="left" width="40%">Corso</th> 
					<th class="right" width="35%">Centro</th>
				</tr>
			</thead>
			<tbody> 
				<?php if( have_rows('fascia_oraria_lunedì') ): ?>
				 <?php while ( have_rows('fascia_oraria_lunedì') ) : the_row(); ?>
				<tr>
					<td><?php the_sub_field('orario_lunedì')?> </td>
					<td><?php the_sub_field('corso_lunedì')?> </td>
 
					<td class="right">
					<?php if( get_sub_field('luogo_lunedì') == 'luogo1') { ?>
   						<a href="#tab2" style="font-weight:300;"> 
					<?php } elseif( get_sub_field('luogo_lunedì') == 'luogo2') { ?>
 						<a href="#tab3" style="font-weight:300;">
					<?php } else { ?>
						<a href="#tab4" style="font-weight:300;">
 					<?php } ?> 
						<?php the_sub_field('centro_lunedì')?></a> </td>
			   	</tr>
			   <?php endwhile; 
					 endif;
				?> 
            </tbody>
		  </table>	
				  
		  <table id="tabs-2" style="float:right;"  class="tabs"> 
			<thead>
				<tr>
					<th class="left" width="25%">Orario</th>
					<th class="left" width="40%">Corso</th> 
					<th class="right" width="35%">Centro</th>
				</tr>
			</thead>
		    <tbody> 
			 <?php if( have_rows('fascia_oraria_martedì') ): ?>
				  <?php while ( have_rows('fascia_oraria_martedì') ) : the_row(); ?>
				<tr>
					<td><?php the_sub_field('orario_martedì')?> </td>
					<td><?php the_sub_field('corso_martedì')?> </td>
 
					<td class="right">
					<?php if( get_sub_field('luogo_martedì') == 'luogo1') { ?>
   						<a href="#tab2" style="font-weight:300;"> 
					<?php } elseif( get_sub_field('luogo_martedì') == 'luogo2') { ?>
 						<a href="#tab3" style="font-weight:300;">
					<?php } else { ?>
						<a href="#tab4" style="font-weight:300;">
 					<?php } ?> 
						<?php the_sub_field('centro_martedì')?></a> </td>
			   	</tr>
			   <?php endwhile; 
					 endif;
				?> 
            </tbody>
		  </table>	
		  
		  <table id="tabs-3" style="float:right;"  class="tabs"> 
			<thead>
				<tr>
					<th class="left" width="25%">Orario</th>
					<th class="left" width="40%">Corso</th> 
					<th class="right" width="35%">Centro</th>
				</tr>
			</thead>
			<tbody> 
				<?php if( have_rows('fascia_oraria_mercoledì') ): ?>
				 <?php while ( have_rows('fascia_oraria_mercoledì') ) : the_row(); ?>
				<tr>
					<td><?php the_sub_field('orario_mercoledì')?> </td>
					<td><?php the_sub_field('corso_mercoledì')?> </td>
 
					<td class="right">
					<?php if( get_sub_field('luogo_mercoledì') == 'luogo1') { ?>
   						<a href="#tab2" style="font-weight:300;"> 
					<?php } elseif( get_sub_field('luogo_mercoledì') == 'luogo2') { ?>
 						<a href="#tab3" style="font-weight:300;">
					<?php } else { ?>
						<a href="#tab4" style="font-weight:300;">
 					<?php } ?> 
						<?php the_sub_field('centro_mercoledì')?></a> </td>
			   	</tr>
			   <?php endwhile; 
					 endif;
				?> 
            </tbody>
		  </table>	
				  
		  <table id="tabs-4" style="float:right;"  class="tabs"> 
			<thead>
				<tr>
					<th class="left" width="25%">Orario</th>
					<th class="left" width="40%">Corso</th> 
					<th class="right" width="35%">Centro</th>
				</tr>
			</thead>
		    <tbody> 
			 <?php if( have_rows('fascia_oraria_giovedì') ): ?>
				  <?php while ( have_rows('fascia_oraria_giovedì') ) : the_row(); ?>
				<tr>
					<td><?php the_sub_field('orario_giovedì')?> </td>
					<td><?php the_sub_field('corso_giovedì')?> </td>
 
					<td class="right">
					<?php if( get_sub_field('luogo_giovedì') == 'luogo1') { ?>
   						<a href="#tab2" style="font-weight:300;"> 
					<?php } elseif( get_sub_field('luogo_giovedì') == 'luogo2') { ?>
 						<a href="#tab3" style="font-weight:300;">
					<?php } else { ?>
						<a href="#tab4" style="font-weight:300;">
 					<?php } ?> 
						<?php the_sub_field('centro_giovedì')?></a> </td>
			   	</tr>
			   <?php endwhile; 
					 endif;
				?> 
            </tbody>
		  </table>	
		  
		  <table id="tabs-5" style="float:right;"  class="tabs"> 
			<thead>
				<tr>
					<th class="left" width="25%">Orario</th>
					<th class="left" width="40%">Corso</th> 
					<th class="right" width="35%">Centro</th>
				</tr>
			</thead>
			<tbody> 
				<?php if( have_rows('fascia_oraria_venerdì') ): ?>
				 <?php while ( have_rows('fascia_oraria_venerdì') ) : the_row(); ?>
				<tr>
					<td><?php the_sub_field('orario_venerdì')?> </td>
					<td><?php the_sub_field('corso_venerdì')?> </td>
 
					<td class="right">
					<?php if( get_sub_field('luogo_venerdì') == 'luogo1') { ?>
   						<a href="#tab2" style="font-weight:300;"> 
					<?php } elseif( get_sub_field('luogo_venerdì') == 'luogo2') { ?>
 						<a href="#tab3" style="font-weight:300;">
					<?php } else { ?>
						<a href="#tab4" style="font-weight:300;">
 					<?php } ?> 
						<?php the_sub_field('centro_venerdì')?></a> </td>
			   	</tr>
			   <?php endwhile; 
					 endif;
				?> 
            </tbody>
		  </table>	
				  
		  <table id="tabs-6" style="float:right;"  class="tabs"> 
			<thead>
				<tr>
					<th class="left" width="25%">Orario</th>
					<th class="left" width="40%">Corso</th> 
					<th class="right" width="35%">Centro</th>
				</tr>
			</thead>
		    <tbody> 
			 <?php if( have_rows('fascia_oraria_sabato') ): ?>
				  <?php while ( have_rows('fascia_oraria_sabato') ) : the_row(); ?>
				<tr>
					<td><?php the_sub_field('orario_sabato')?> </td>
					<td><?php the_sub_field('corso_sabato')?> </td>
 
					<td class="right">
					<?php if( get_sub_field('luogo_sabato') == 'luogo1') { ?>
   						<a href="#tab2" style="font-weight:300;"> 
					<?php } elseif( get_sub_field('luogo_sabato') == 'luogo2') { ?>
 						<a href="#tab3" style="font-weight:300;">
					<?php } else { ?>
						<a href="#tab4" style="font-weight:300;">
 					<?php } ?> 
						<?php the_sub_field('centro_sabato')?></a> </td>
			   	</tr>
			   <?php endwhile; 
					 endif;
				?> 
            </tbody>
		  </table>	
		  
		  <table id="tabs-7" style="float:right;"  class="tabs"> 
			<thead>
				<tr>
					<th class="left" width="25%">Orario</th>
					<th class="left" width="40%">Corso</th> 
					<th class="right" width="35%">Centro</th>
				</tr>
			</thead>
		    <tbody> 
			 <?php if( have_rows('fascia_oraria_domenica') ): ?>
				  <?php while ( have_rows('fascia_oraria_domenica') ) : the_row(); ?>
				<tr>
					<td><?php the_sub_field('orario_domenica')?> </td>
					<td><?php the_sub_field('corso_domenica')?> </td>
 
					<td class="right">
					<?php if( get_sub_field('luogo_domenica') == 'luogo1') { ?>
   						<a href="#tab2" style="font-weight:300;"> 
					<?php } elseif( get_sub_field('luogo_domenica') == 'luogo2') { ?>
 						<a href="#tab3" style="font-weight:300;">
					<?php } else { ?>
						<a href="#tab4" style="font-weight:300;">
 					<?php } ?> 
						<?php the_sub_field('centro_domenica')?></a> </td>
			   	</tr>
			   <?php endwhile; 
					 endif;
				?> 
            </tbody>
		  </table>	
		  <br class="clearfix"/>
		 <p style="float: right; margin-right:10px;" id="esclamativo">  Palinsesto valido dal <?php the_sub_field('validità')?> </p>
	</div>	
</div>	

<br class="clearfix"/>
<br class="clearfix"/>
<br class="clearfix"/>
<br class="clearfix"/>


		<?php endwhile;
	  
	endif;
?>		

	<script>
		$(document).ready(function(){
		$('.tab-container').easytabs();
		});
	  </script>


	    </div>

<!-- centro modena -->
        <div style="margin-left:50px; margin-right:50px;" id="tab2" class="blocco-tab">
			<?php
	if( have_rows('centromodena') ):
	while ( have_rows('centromodena') ) : the_row(); ?>

<div>
	<div style="width:50%; float:left;">
		<img src="<?php the_sub_field('immagine_centro')?>" style="float:left; margin-right:30px; margin-bottom:100px;" class="circolareImmaginiBlog "/>
		<span class="descrizioneCentro" style="display:block;">
		<h1><?php the_sub_field('nome_centro')?> </h1>
		<h4><?php the_sub_field('sottotitolo_centro')?></h4> <br/>
		<p><span><?php the_sub_field('contatti_centro')?></span>
		<?php the_sub_field('descrizione_centro')?></p></span>
	</div>

	<div class="tab-container" style="width:40%; float:right; margin-top:-15px;">
	<ul style="list-style-type:none; display:inline-flex; float:right;" class="etabs tab-orario centro"> 
			<li class="tab"><a href="#tabs-1"><h2 style="border-left:none;">LUN</h2></a></li>
			<li class="tab"><a href="#tabs-2"><h2>MAR</h2></a></li>
			<li class="tab"><a href="#tabs-3"><h2>MER</h2></a></li>
			<li class="tab"><a href="#tabs-4"><h2>GIO</h2></a></li>
			<li class="tab"><a href="#tabs-5"><h2>VEN</h2></a></li>
			<li class="tab"><a href="#tabs-6"><h2>SAB</h2></a></li>
			<li class="tab"><a href="#tabs-7"><h2>DOM</h2></a></li>

	</ul>
<br class="clearfix"/>
	      <table id="tabs-1" style="float:right;" class="tabs"> 
			<thead>
				<tr>
					<th class="left" width="25%">Orario</th>
					<th class="left" width="40%">Corso</th> 
					<th class="right" width="35%">Insegnante</th>
				</tr>
			</thead>
			<tbody> 
				<?php if( have_rows('fascia_oraria_lunedì') ): ?>
				 <?php while ( have_rows('fascia_oraria_lunedì') ) : the_row(); ?>
				<tr >
					<td><?php the_sub_field('orario_lunedì')?> </td>
					<td><?php the_sub_field('corso_lunedì')?> </td>
					<td  class="right"><a href="#tab1"  style="font-weight:300;"><?php the_sub_field('insegnante_lunedì')?></a> </td>
			   </tr>
			   <?php endwhile; 
					 endif;
				?> 
            </tbody>
		  </table>	
				  
		  <table id="tabs-2" style="float:right;" class="tabs"> 
			<thead>
				<tr>
					<th class="left" width="25%">Orario</th>
					<th class="left" width="40%">Corso</th> 
					<th class="right" width="35%">Insegnante</th>
				</tr>
			</thead>
		    <tbody> 
			 <?php if( have_rows('fascia_oraria_martedì') ): ?>
				  <?php while ( have_rows('fascia_oraria_martedì') ) : the_row(); ?>
				<tr>
					<td><?php the_sub_field('orario_martedì')?> </td>
					<td><?php the_sub_field('corso_martedì')?> </td>
					<td  class="right"><a href="#tab1"  style="font-weight:300;"><?php the_sub_field('insegnante_martedì')?></a></td>
			    </tr>
			   <?php endwhile; 
					 endif;
				?> 
            </tbody>
		  </table>	
		  
		  <table id="tabs-3" style="float:right;" class="tabs"> 
			<thead>
				<tr>
					<th class="left" width="25%">Orario</th>
					<th class="left" width="40%">Corso</th> 
					<th class="right" width="35%">Insegnante</th>
				</tr>
			</thead>
			<tbody> 
				<?php if( have_rows('fascia_oraria_mercoledì') ): ?>
				 <?php while ( have_rows('fascia_oraria_mercoledì') ) : the_row(); ?>
				<tr >
					<td><?php the_sub_field('orario_mercoledì')?> </td>
					<td><?php the_sub_field('corso_mercoledì')?> </td>
					<td  class="right"><a href="#tab1"  style="font-weight:300;"><?php the_sub_field('insegnante_mercoledì')?></a> </td>
			   </tr>
			   <?php endwhile; 
					 endif;
				?> 
            </tbody>
		  </table>	
				  
		  <table id="tabs-4" style="float:right;" class="tabs"> 
			<thead>
				<tr>
					<th class="left" width="25%">Orario</th>
					<th class="left" width="40%">Corso</th> 
					<th class="right" width="35%">Insegnante</th>
				</tr>
			</thead>
		    <tbody> 
			 <?php if( have_rows('fascia_oraria_giovedì') ): ?>
				  <?php while ( have_rows('fascia_oraria_giovedì') ) : the_row(); ?>
				<tr>
					<td><?php the_sub_field('orario_giovedì')?> </td>
					<td><?php the_sub_field('corso_giovedì')?> </td>
					<td  class="right"><a href="#tab1"  style="font-weight:300;"><?php the_sub_field('insegnante_giovedì')?></a> </td>
			    </tr>
			   <?php endwhile; 
					 endif;
				?> 
            </tbody>
		  </table>	
		  
		  <table id="tabs-5" style="float:right;" class="tabs"> 
			<thead>
				<tr>
					<th class="left" width="25%">Orario</th>
					<th class="left" width="40%">Corso</th> 
					<th class="right" width="35%">Insegnante</th>
				</tr>
			</thead>
			<tbody> 
				<?php if( have_rows('fascia_oraria_venerdì') ): ?>
				 <?php while ( have_rows('fascia_oraria_venerdì') ) : the_row(); ?>
				<tr >
					<td><?php the_sub_field('orario_venerdì')?> </td>
					<td><?php the_sub_field('corso_venerdì')?> </td>
					<td  class="right"><a href="#tab1"  style="font-weight:300;"><?php the_sub_field('insegnante_venerdì')?></a> </td>
			   </tr>
			   <?php endwhile; 
					 endif;
				?> 
            </tbody>
		  </table>	
				  
		  <table id="tabs-6" style="float:right;" class="tabs"> 
			<thead>
				<tr>
					<th class="left" width="25%">Orario</th>
					<th class="left" width="40%">Corso</th> 
					<th class="right" width="35%">Insegnante</th>
				</tr>
			</thead>
		    <tbody> 
			 <?php if( have_rows('fascia_oraria_sabato') ): ?>
				  <?php while ( have_rows('fascia_oraria_sabato') ) : the_row(); ?>
				<tr>
					<td><?php the_sub_field('orario_sabato')?> </td>
					<td><?php the_sub_field('corso_sabato')?> </td>
					<td  class="right"><a href="#tab1"  style="font-weight:300;"><?php the_sub_field('insegnante_sabato')?></a> </td>
			    </tr>
			   <?php endwhile; 
					 endif;
				?> 
            </tbody>
		  </table>	
		  
		  <table id="tabs-7" style="float:right;" class="tabs"> 
			<thead>
				<tr>
					<th class="left" width="25%">Orario</th>
					<th class="left" width="40%">Corso</th> 
					<th class="right" width="35%">Insegnante</th>
				</tr>
			</thead>
		    <tbody> 
			 <?php if( have_rows('fascia_oraria_domenica') ): ?>
				  <?php while ( have_rows('fascia_oraria_domenica') ) : the_row(); ?>
				<tr>
					<td><?php the_sub_field('orario_domenica')?> </td>
					<td><?php the_sub_field('corso_domenica')?> </td>
					<td  class="right"><a href="#tab1"  style="font-weight:300;"><?php the_sub_field('insegnante_domenica')?></a> </td>
			    </tr>
			   <?php endwhile; 
					 endif;
				?> 
            </tbody>
		  </table>	
		  <br class="clearfix"/>
		 <p style="float: right; margin-right:10px;" id="esclamativo">  Palinsesto valido dal <?php the_sub_field('validità')?> </p>
	</div>		  
</div>	

<br class="clearfix"/>
<br class="clearfix"/>
<br class="clearfix"/>
<br class="clearfix"/>


		<?php endwhile;
	  
	endif;
?>		

	<script>
		$(document).ready(function(){
		$('.tab-container').easytabs();
		});
	  </script>


	    </div> 

<!-- centro sassuolo -->
        <div style="margin-left:50px; margin-right:50px;" id="tab3" class="blocco-tab">
			<?php
	if( have_rows('centrosassuolo') ):
	while ( have_rows('centrosassuolo') ) : the_row(); ?>

	<div style="width:50%; float:left;">
		<img src="<?php the_sub_field('immagine_centro')?>" style="float:left; margin-right:30px; margin-bottom:100px;" class="circolareImmaginiBlog "/>
		<span class="descrizioneCentro" style="display:block;">
		<h1><?php the_sub_field('nome_centro')?> </h1>
		<h4><?php the_sub_field('sottotitolo_centro')?></h4> <br/>
		<p><span><?php the_sub_field('contatti_centro')?></span>
		<?php the_sub_field('descrizione_centro')?></p></span>
	</div>

	<div class="tab-container" style="width:40%; float:right; margin-top:-15px;">
	<ul style="list-style-type:none; display:inline-flex; float:right;" class="etabs tab-orario"> 
			<li class="tab"><a href="#tabs-1"><h2 style="border-left:none;">LUN</h2></a></li>
			<li class="tab"><a href="#tabs-2"><h2>MAR</h2></a></li>
			<li class="tab"><a href="#tabs-3"><h2>MER</h2></a></li>
			<li class="tab"><a href="#tabs-4"><h2>GIO</h2></a></li>
			<li class="tab"><a href="#tabs-5"><h2>VEN</h2></a></li>
			<li class="tab"><a href="#tabs-6"><h2>SAB</h2></a></li>
			<li class="tab"><a href="#tabs-7"><h2>DOM</h2></a></li>

	</ul>
<br class="clearfix"/>
	      <table id="tabs-1" style="float:right;" class="tabs"> 
			<thead>
				<tr>
					<th class="left" width="25%">Orario</th>
					<th class="left" width="40%">Corso</th> 
					<th class="right" width="35%">Insegnante</th>
				</tr>
			</thead>
			<tbody> 
				<?php if( have_rows('fascia_oraria_lunedì') ): ?>
				 <?php while ( have_rows('fascia_oraria_lunedì') ) : the_row(); ?>
				<tr >
					<td><?php the_sub_field('orario_lunedì')?> </td>
					<td><?php the_sub_field('corso_lunedì')?> </td>
					<td  class="right"><a href="#tab1"  style="font-weight:300;"><?php the_sub_field('insegnante_lunedì')?></a> </td>
			   </tr>
			   <?php endwhile; 
					 endif;
				?> 
            </tbody>
		  </table>	
				  
		  <table id="tabs-2" style="float:right;" class="tabs"> 
			<thead>
				<tr>
					<th class="left" width="25%">Orario</th>
					<th class="left" width="40%">Corso</th> 
					<th class="right" width="35%">Insegnante</th>
				</tr>
			</thead>
		    <tbody> 
			 <?php if( have_rows('fascia_oraria_martedì') ): ?>
				  <?php while ( have_rows('fascia_oraria_martedì') ) : the_row(); ?>
				<tr>
					<td><?php the_sub_field('orario_martedì')?> </td>
					<td><?php the_sub_field('corso_martedì')?> </td>
					<td  class="right"><a href="#tab1"  style="font-weight:300;"><?php the_sub_field('insegnante_martedì')?></a> </td>
			    </tr>
			   <?php endwhile; 
					 endif;
				?> 
            </tbody>
		  </table>	
		  
		  <table id="tabs-3" style="float:right;" class="tabs"> 
			<thead>
				<tr>
					<th class="left" width="25%">Orario</th>
					<th class="left" width="40%">Corso</th> 
					<th class="right" width="35%">Insegnante</th>
				</tr>
			</thead>
			<tbody> 
				<?php if( have_rows('fascia_oraria_mercoledì') ): ?>
				 <?php while ( have_rows('fascia_oraria_mercoledì') ) : the_row(); ?>
				<tr >
					<td><?php the_sub_field('orario_mercoledì')?> </td>
					<td><?php the_sub_field('corso_mercoledì')?> </td>
					<td  class="right"><a href="#tab1"  style="font-weight:300;"><?php the_sub_field('insegnante_mercoledì')?></a> </td>
			   </tr>
			   <?php endwhile; 
					 endif;
				?> 
            </tbody>
		  </table>	
				  
		  <table id="tabs-4" style="float:right;" class="tabs"> 
			<thead>
				<tr>
					<th class="left" width="25%">Orario</th>
					<th class="left" width="40%">Corso</th> 
					<th class="right" width="35%">Insegnante</th>
				</tr>
			</thead>
		    <tbody> 
			 <?php if( have_rows('fascia_oraria_giovedì') ): ?>
				  <?php while ( have_rows('fascia_oraria_giovedì') ) : the_row(); ?>
				<tr>
					<td><?php the_sub_field('orario_giovedì')?> </td>
					<td><?php the_sub_field('corso_giovedì')?> </td>
					<td  class="right"><a href="#tab1"  style="font-weight:300;"><?php the_sub_field('insegnante_giovedì')?></a> </td>
			    </tr>
			   <?php endwhile; 
					 endif;
				?> 
            </tbody>
		  </table>	
		  
		  <table id="tabs-5" style="float:right;" class="tabs"> 
			<thead>
				<tr>
					<th class="left" width="25%">Orario</th>
					<th class="left" width="40%">Corso</th> 
					<th class="right" width="35%">Insegnante</th>
				</tr>
			</thead>
			<tbody> 
				<?php if( have_rows('fascia_oraria_venerdì') ): ?>
				 <?php while ( have_rows('fascia_oraria_venerdì') ) : the_row(); ?>
				<tr >
					<td><?php the_sub_field('orario_venerdì')?> </td>
					<td><?php the_sub_field('corso_venerdì')?> </td>
					<td  class="right"><a href="#tab1"  style="font-weight:300;"><?php the_sub_field('insegnante_venerdì')?></a> </td>
			   </tr>
			   <?php endwhile; 
					 endif;
				?> 
            </tbody>
		  </table>	
				  
		  <table id="tabs-6" style="float:right;" class="tabs"> 
			<thead>
				<tr>
					<th class="left" width="25%">Orario</th>
					<th class="left" width="40%">Corso</th> 
					<th class="right" width="35%">Insegnante</th>
				</tr>
			</thead>
		    <tbody> 
			 <?php if( have_rows('fascia_oraria_sabato') ): ?>
				  <?php while ( have_rows('fascia_oraria_sabato') ) : the_row(); ?>
				<tr>
					<td><?php the_sub_field('orario_sabato')?> </td>
					<td><?php the_sub_field('corso_sabato')?> </td>
					<td  class="right"><a href="#tab1"  style="font-weight:300;"><?php the_sub_field('insegnante_sabato')?></a> </td>
			    </tr>
			   <?php endwhile; 
					 endif;
				?> 
            </tbody>
		  </table>	
		  
		  <table id="tabs-7" style="float:right;" class="tabs"> 
			<thead>
				<tr>
					<th class="left" width="25%">Orario</th>
					<th class="left" width="40%">Corso</th> 
					<th class="right" width="35%">Insegnante</th>
				</tr>
			</thead>
		    <tbody> 
			 <?php if( have_rows('fascia_oraria_domenica') ): ?>
				  <?php while ( have_rows('fascia_oraria_domenica') ) : the_row(); ?>
				<tr>
					<td><?php the_sub_field('orario_domenica')?> </td>
					<td><?php the_sub_field('corso_domenica')?> </td>
					<td  class="right"><a href="#tab1"  style="font-weight:300;"><?php the_sub_field('insegnante_domenica')?></a> </td>
			    </tr>
			   <?php endwhile; 
					 endif;
				?> 
            </tbody>
		  </table>	
		  <br class="clearfix"/>
		  		 <p style="float: right; margin-right:10px;" id="esclamativo">  Palinsesto valido dal <?php the_sub_field('validità')?> </p>

	</div>		  
	

<br class="clearfix"/>
<br class="clearfix"/>
<br class="clearfix"/>
<br class="clearfix"/>


		<?php endwhile;
	  
	endif;
?>		

	<script>
		$(document).ready(function(){
		$('.tab-container').easytabs();
		});
	  </script>


	    </div>	

<!-- altri centri -->
        <div style="margin-left:50px; margin-right:50px;"id="tab4" class="blocco-tab">
			<?php
	if( have_rows('centroaltro') ):
	while ( have_rows('centroaltro') ) : the_row(); ?>

	<div style="width:50%; float:left;">
		<img src="<?php the_sub_field('immagine_centro')?>" style="float:left; margin-right:30px; margin-bottom:100px;" class="circolareImmaginiBlog "/>
		<span class="descrizioneCentro" style="display:block;">
		<h1><?php the_sub_field('nome_centro')?> </h1>
		<h4><?php the_sub_field('sottotitolo_centro')?></h4> <br/>
		<p><span><?php the_sub_field('contatti_centro')?></span>
		<?php the_sub_field('descrizione_centro')?></p></span>
	</div>

	<div class="tab-container" style="width:40%; float:right; margin-top:-15px;">
	<ul style="list-style-type:none; display:inline-flex; float:right;" class="etabs tab-orario"> 
			<li class="tab"><a href="#tabs-1"><h2 style="border-left:none;">LUN</h2></a></li>
			<li class="tab"><a href="#tabs-2"><h2>MAR</h2></a></li>
			<li class="tab"><a href="#tabs-3"><h2>MER</h2></a></li>
			<li class="tab"><a href="#tabs-4"><h2>GIO</h2></a></li>
			<li class="tab"><a href="#tabs-5"><h2>VEN</h2></a></li>
			<li class="tab"><a href="#tabs-6"><h2>SAB</h2></a></li>
			<li class="tab"><a href="#tabs-7"><h2>DOM</h2></a></li>

	</ul>
<br class="clearfix"/>
	      <table id="tabs-1" style="float:right;" class="tabs"> 
			<thead>
				<tr>
					<th class="left" width="25%">Orario</th>
					<th class="left" width="40%">Corso</th> 
					<th class="right" width="35%">Insegnante</th>
				</tr>
			</thead>
			<tbody> 
				<?php if( have_rows('fascia_oraria_lunedì') ): ?>
				 <?php while ( have_rows('fascia_oraria_lunedì') ) : the_row(); ?>
				<tr >
					<td><?php the_sub_field('orario_lunedì')?> </td>
					<td><?php the_sub_field('corso_lunedì')?> </td>
					<td  class="right"><a href="#tab1"  style="font-weight:300;"><?php the_sub_field('insegnante_lunedì')?></a> </td>
			   </tr>
			   <?php endwhile; 
					 endif;
				?> 
            </tbody>
		  </table>	
				  
		  <table id="tabs-2" style="float:right;" class="tabs"> 
			<thead>
				<tr>
					<th class="left" width="25%">Orario</th>
					<th class="left" width="40%">Corso</th> 
					<th class="right" width="35%">Insegnante</th>
				</tr>
			</thead>
		    <tbody> 
			 <?php if( have_rows('fascia_oraria_martedì') ): ?>
				  <?php while ( have_rows('fascia_oraria_martedì') ) : the_row(); ?>
				<tr>
					<td><?php the_sub_field('orario_martedì')?> </td>
					<td><?php the_sub_field('corso_martedì')?> </td>
					<td  class="right"><a href="#tab1"  style="font-weight:300;"><?php the_sub_field('insegnante_martedì')?></a> </td>
			    </tr>
			   <?php endwhile; 
					 endif;
				?> 
            </tbody>
		  </table>	
		  
		  <table id="tabs-3" style="float:right;" class="tabs"> 
			<thead>
				<tr>
					<th class="left" width="25%">Orario</th>
					<th class="left" width="40%">Corso</th> 
					<th class="right" width="35%">Insegnante</th>
				</tr>
			</thead>
			<tbody> 
				<?php if( have_rows('fascia_oraria_mercoledì') ): ?>
				 <?php while ( have_rows('fascia_oraria_mercoledì') ) : the_row(); ?>
				<tr >
					<td><?php the_sub_field('orario_mercoledì')?> </td>
					<td><?php the_sub_field('corso_mercoledì')?> </td>
					<td  class="right"><a href="#tab1"  style="font-weight:300;"><?php the_sub_field('insegnante_mercoledì')?></a> </td>
			   </tr>
			   <?php endwhile; 
					 endif;
				?> 
            </tbody>
		  </table>	
				  
		  <table id="tabs-4" style="float:right;" class="tabs"> 
			<thead>
				<tr>
					<th class="left" width="25%">Orario</th>
					<th class="left" width="40%">Corso</th> 
					<th class="right" width="35%">Insegnante</th>
				</tr>
			</thead>
		    <tbody> 
			 <?php if( have_rows('fascia_oraria_giovedì') ): ?>
				  <?php while ( have_rows('fascia_oraria_giovedì') ) : the_row(); ?>
				<tr>
					<td><?php the_sub_field('orario_giovedì')?> </td>
					<td><?php the_sub_field('corso_giovedì')?> </td>
					<td  class="right"><a href="#tab1"  style="font-weight:300;"><?php the_sub_field('insegnante_giovedì')?></a> </td>
			    </tr>
			   <?php endwhile; 
					 endif;
				?> 
            </tbody>
		  </table>	
		  
		  <table id="tabs-5" style="float:right;" class="tabs"> 
			<thead>
				<tr>
					<th class="left" width="25%">Orario</th>
					<th class="left" width="40%">Corso</th> 
					<th class="right" width="35%">Insegnante</th>
				</tr>
			</thead>
			<tbody> 
				<?php if( have_rows('fascia_oraria_venerdì') ): ?>
				 <?php while ( have_rows('fascia_oraria_venerdì') ) : the_row(); ?>
				<tr >
					<td><?php the_sub_field('orario_venerdì')?> </td>
					<td><?php the_sub_field('corso_venerdì')?> </td>
					<td  class="right"><a href="#tab1"  style="font-weight:300;"><?php the_sub_field('insegnante_venerdì')?></a> </td>
			   </tr>
			   <?php endwhile; 
					 endif;
				?> 
            </tbody>
		  </table>	
				  
		  <table id="tabs-6" style="float:right;" class="tabs"> 
			<thead>
				<tr>
					<th class="left" width="25%">Orario</th>
					<th class="left" width="40%">Corso</th> 
					<th class="right" width="35%">Insegnante</th>
				</tr>
			</thead>
		    <tbody> 
			 <?php if( have_rows('fascia_oraria_sabato') ): ?>
				  <?php while ( have_rows('fascia_oraria_sabato') ) : the_row(); ?>
				<tr>
					<td><?php the_sub_field('orario_sabato')?> </td>
					<td><?php the_sub_field('corso_sabato')?> </td>
					<td  class="right"><a href="#tab1"  style="font-weight:300;"><?php the_sub_field('insegnante_sabato')?></a> </td>
			    </tr>
			   <?php endwhile; 
					 endif;
				?> 
            </tbody>
		  </table>	
		  
		  <table id="tabs-7" style="float:right;" class="tabs"> 
			<thead>
				<tr>
					<th class="left" width="25%">Orario</th>
					<th class="left" width="40%">Corso</th> 
					<th class="right" width="35%">Insegnante</th>
				</tr>
			</thead>
		    <tbody> 
			 <?php if( have_rows('fascia_oraria_domenica') ): ?>
				  <?php while ( have_rows('fascia_oraria_domenica') ) : the_row(); ?>
				<tr>
					<td><?php the_sub_field('orario_domenica')?> </td>
					<td><?php the_sub_field('corso_domenica')?> </td>
					<td  class="right"><a href="#tab1"  style="font-weight:300;"><?php the_sub_field('insegnante_domenica')?></a> </td>
			    </tr>
			   <?php endwhile; 
					 endif;
				?> 
            </tbody>
		  </table>	
		  <br class="clearfix"/>
		  <p style="float: right; margin-right:10px;" id="esclamativo">  Palinsesto valido dal <?php the_sub_field('validità')?> </p>

	</div>		  
	

<br class="clearfix"/>
<br class="clearfix"/>
<br class="clearfix"/>
<br class="clearfix"/>


		<?php endwhile;
	  
	endif;
?>		

	<script>
		$(document).ready(function(){
		$('.tab-container').easytabs();
		});
	  </script>


        </div>
    </div>
	
	<script>
		$(document).ready(function(){
			
			$(".palinsesto1").mouseover(function(){
				$(".palinsesto1").css("background-color","#FF6600");
			});
			$(".palinsesto1").mouseout(function(){
				$(".palinsesto1").css("background-color","#ff7e00");
			});
			
			$(".palinsesto2").mouseover(function(){
				$(".palinsesto2").css("background-color","#FF6600");
			});
			$(".palinsesto2").mouseout(function(){
				$(".palinsesto2").css("background-color","#ff7e00");
			});
			
			$(".palinsesto3").mouseover(function(){
				$(".palinsesto3").css("background-color","#FF6600");
			});
			$(".palinsesto3").mouseout(function(){
				$(".palinsesto3").css("background-color","#ff7e00");
			});
			
			$(".palinsesto4").mouseover(function(){
				$(".palinsesto4").css("background-color","#FF6600");
			});
			$(".palinsesto4").mouseout(function(){
				$(".palinsesto4").css("background-color","#ff7e00");
			});
						//Quando la pagina viene caricata
			$(".blocco-tab").hide(); //nascondi tutti i contenuti delle tabs
			$(".tab td:first").addClass("active").show(); //Attiva la prima tab
			$(".blocco-tab:first").show(); //Mostra il contenuto della prima tab

			//Al click sulla linguetta della tab
			$(".tabs td").click(function() {
				$(".tabs td").removeClass("active"); //Rimuovi ogni classe "active"
				$(this).addClass("active"); //E aggiungila solo a quella su cui ho cliccato
				$(".blocco-tab").hide(); //Nascondi tutti i contenuti delle tab
				var activeTab = $(this).find("a").attr("href"); //Trova l'href per identificare in modo univoco la tab ed il contenuto
				$(activeTab).fadeIn(); //Mostrami quest'ultimo con effetto di fadeIn
				return false;
			});
				
		});
	</script>
	
	
	
	<?php endwhile; // End the loop ?>

		<div class="clear"></div>
<?php get_footer(); ?>
