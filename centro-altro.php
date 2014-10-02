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
	      <table id="tabs-1" style="float:right;"> 
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
					<td  class="right"><?php the_sub_field('insegnante_lunedì')?> </td>
			   </tr>
			   <?php endwhile; 
					 endif;
				?> 
            </tbody>
		  </table>	
				  
		  <table id="tabs-2" style="float:right;"> 
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
					<td  class="right"><?php the_sub_field('insegnante_martedì')?> </td>
			    </tr>
			   <?php endwhile; 
					 endif;
				?> 
            </tbody>
		  </table>	
		  
		  <table id="tabs-3" style="float:right;"> 
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
					<td  class="right"><?php the_sub_field('insegnante_mercoledì')?> </td>
			   </tr>
			   <?php endwhile; 
					 endif;
				?> 
            </tbody>
		  </table>	
				  
		  <table id="tabs-4" style="float:right;"> 
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
					<td  class="right"><?php the_sub_field('insegnante_giovedì')?> </td>
			    </tr>
			   <?php endwhile; 
					 endif;
				?> 
            </tbody>
		  </table>	
		  
		  <table id="tabs-5" style="float:right;"> 
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
					<td  class="right"><?php the_sub_field('insegnante_venerdì')?> </td>
			   </tr>
			   <?php endwhile; 
					 endif;
				?> 
            </tbody>
		  </table>	
				  
		  <table id="tabs-6" style="float:right;"> 
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
					<td  class="right"><?php the_sub_field('insegnante_sabato')?> </td>
			    </tr>
			   <?php endwhile; 
					 endif;
				?> 
            </tbody>
		  </table>	
		  
		  <table id="tabs-7" style="float:right;"> 
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
					<td  class="right"><?php the_sub_field('insegnante_domenica')?> </td>
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


