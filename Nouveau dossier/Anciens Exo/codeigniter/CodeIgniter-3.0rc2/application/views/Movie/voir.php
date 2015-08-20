<!-- vue header incluse-->
<?php $this->load->view('partials/header'); ?>
<!-- vue sidebar incluse -->
<?php $this->load->view('partials/sidebar'); ?>

<script>
	init.push(function () {

		$('.removecomm').click(function(e){
			e.preventDefault();//J'annule l'événement href de redirection quand je clique sur mon lien

			var current = $(this); //Je récupere mon élément courant sur lequelle he faus lib événement clique
			//alert(current.attr('href'));

			//Module AJAX GET en Jquery
			$.ajax({
				type: 'GET', //Type de la requéte : GET/POST
				url: current.attr('href'), //url d'envoi de ma requéte

				success: function(data){
					$.growl.notice({message: data});
					current.parents('.comments').fadeOut('slow');

				},
				error: function(){
					alert('la requéte n\'a pas abouti');
				}
			});
		});
	})
</script>

<div id='content-wrapper'>
	<div class='row'>
	<div class="stat-panel">
		<!-- Success background, bordered, without top and bottom borders, without left border, without padding, vertically and horizontally centered text, large text -->
		<a href="#" class="stat-cell col-xs-5 bg-info bordered no-border-vr no-border-l no-padding valign-middle text-center text-lg">
			<img src="<?php echo $voirfilms->image ?>" class='img-responsive'/>
		</a> <!-- /.stat-cell -->
		<!-- Without padding, extra small text -->
		<div class="stat-cell col-xs-7 no-padding ">
			
			<!-- Add parent div.stat-rows if you want build nested rows -->
			<div class="stat-rows">
				<div class="stat-row">
					<!-- Success darken background, small padding, vertically aligned text -->
					<a href="#" class="stat-cell bg-info darker padding-md valign-middle">
						<b><h1 style='text-align: center;'><?php echo $voirfilms->title?></h1></b>
						<i class="fa fa-film pull-right"></i>
					</a>
				</div>
				<div class="stat-row">
					<!-- Success darken background, small padding, vertically aligned text -->
					<a href="#" class="stat-cell bg-info  padding-sm valign-middle">
						<b>Année : </b><?php echo $voirfilms->annee?>
						<i class="fa fa-bug pull-right"></i>
					</a>
				</div>
				<div class="stat-row">
					<!-- Success darken background, small padding, vertically aligned text -->
					<a href="#" class="stat-cell bg-info darken padding-sm valign-middle">
						<b>Budget : </b><?php echo $voirfilms->budget?>
						<i class="fa fa-usd pull-right"></i>
					</a>
				</div>
				<div class="stat-row">
					<!-- Success background, small padding, vertically aligned text -->
					<a href="#" class="stat-cell bg-info padding-sm valign-middle">
						<b>Note : </b>
						<?php 
							$i = 1;
							while ($i <= $voirfilms->note_presse){ ?>
							<i class='fa fa-star'></i>
						<?php $i++; }
						?>
						<i class="fa fa-star-o pull-right"></i>
					</a>
				</div>
				<div class="stat-row">
					<!-- Success darken background, small padding, vertically aligned text -->
					<a href="#" class="stat-cell bg-info darken padding-sm valign-middle">
						<b>Prix :  </b><?php echo $voirfilms->price?>&euro;
						<i class="fa fa-money pull-right"></i>
					</a>
				</div>
				<div class="stat-row">
					<!-- Success darker background, small padding, vertically aligned text -->
					<a href="#" class="stat-cell bg-info padding-sm valign-middle">
						<b>Langue : </b> <?php echo $voirfilms->languages?>
						<i class="fa fa-users pull-right"></i>
					</a>
				</div>
				<div class="stat-row">
					<!-- Success darker background, small padding, vertically aligned text -->
					<a href="#" class="stat-cell bg-info darken padding-sm valign-middle">
						<b>Bande original : </b> <?php echo $voirfilms->bo?>
						<i class="fa fa-users pull-right"></i>
					</a>
				</div>
				<div class="stat-row">
					<!-- Success darker background, small padding, vertically aligned text -->
					<a href="#" class="stat-cell bg-info padding-sm valign-middle">
						<b>Distributeur : </b> <?php echo $voirfilms->distributeur?>
						<i class="fa fa-users pull-right"></i>
					</a>
				</div>
				
			</div> <!-- /.stat-rows -->
			<!-- 13. $ACCORDION_COLORS =========================================================================

				Accordion colors
-->
		
			<div class="panel-body" style='padding : 0;'>
				

				<!-- Success -->
				<div class="panel-group panel-group-info" id="accordion-success-example">
					<div class="panel">
						<div class="panel-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-success-example" href="#collapseOne-success">
								<b>Description</b>
							</a>
						</div> <!-- / .panel-heading -->
						<div id="collapseOne-success" class="panel-collapse in">
							<div class="panel-body">
								<?php echo $voirfilms->description ?>
							</div> <!-- / .panel-body -->
						</div> <!-- / .collapse -->
					</div> <!-- / .panel -->
				</div>
			</div>
			<div class="panel-group panel-group-info" id="accordion-success-example">
				<div class="panel">
					<div class="panel-heading">
						<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-success-example" href="#collapseTwo-success">
							<b>Synopsis</b>
						</a>
					</div> <!-- / .panel-heading -->
					<div id="collapseTwo-success" class="panel-collapse collapse">
						<div class="panel-body">
							<?php echo $voirfilms->synopsis ?>
						</div> <!-- / .panel-body -->
					</div> <!-- / .collapse -->
				</div> <!-- / .panel -->
			</div>
			<div class="panel-group panel-group-info" id="accordion-success-example">
				<div class="panel">
					<div class="panel-heading">
						<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-success-example" href="#collapseThree-success">
							<b>Trailer</b>
						</a>
					</div> <!-- / .panel-heading -->
					<div id="collapseThree-success" class="panel-collapse collapse">
						<div class="panel-body">
							<?php echo $voirfilms->trailer ?>
						</div> <!-- / .panel-body -->
					</div> <!-- / .collapse -->
				</div> <!-- / .panel -->
			</div>
			
		</div><!-- Fin de stat-panel-->
	</div> <!-- Fin de row -->

	<!-- 8. $MESSAGES_LIST_ALT =========================================================================

				Alt messages list-->
	<div class='row'>
		<div class='col-md-5'>
			<div class="panel widget-messages-alt">
				<div class="panel-heading">
					<span class="panel-title"><i class="panel-title-icon fa fa-envelope"></i>Commentaires sur ce film</span>
				</div> <!-- / .panel-heading -->
				<div class="panel-body padding-sm">
					<div class="messages-list">

						<?php foreach ($commentfilms as $commentfilm){ ?>
						<div class="message comments">
							<img src="<?php echo $commentfilm->img ?>" alt="" class="message-avatar">
							<a href="#" class="message-subject"><?php echo $commentfilm->content ?></a>
							<div class="message-description">
								from <a href="#"><?php echo $commentfilm->username ?></a>
								&nbsp;&nbsp;·&nbsp;&nbsp;
								Le <?php echo $commentfilm->date_created ?><br>
								<a href='#'><i class='fa fa-pencil'></i>Modifier</a>
								<a href="<?php echo site_url('comments/supprimerDansVoir/'.$voirfilms->id."/".$commentfilm->cid);?>" class='removecomm'> <i class='fa fa-times'></i>Supprimer</a>
							</div> <!-- / .message-description -->
						</div> <!-- / .message -->

						<?php } ?>

					</div> <!-- / .messages-list -->
					<a href="#" class="messages-link">MORE MESSAGES</a>
				</div> <!-- / .panel-body -->
			</div> <!-- / .panel -->
		</div><!-- Fin de col-md-5 -->
		<div class='col-md-7'>

			<div class="table-info">
				<div class="table-header">
					<div class="table-caption">
						Acteurs ayant joués dans ce film
					</div>
				</div>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>#</th>
							<th>Prénom</th>
							<th>Nom</th>
							<th>Ville de naissance</th>
							<th>Date de naissance</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($actorfilms as $actorsfilm) { ?>
						<tr>
							<td><img src="<?php echo $actorsfilm->image ?>" alt=" " class="message-avatar" height ='100'></td>
							<td><?php echo $actorsfilm->firstname ?></td>
							<td><?php echo $actorsfilm->lastname ?></td>
							<td><?php echo $actorsfilm->city ?></td>
							<td><?php echo $actorsfilm->dob ?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
				
			</div>
			<!-- / Info table -->

		</div><!-- Fin col-md-7 -->
	</div><!-- Fin de row -->
<!-- /8. $MESSAGES_LIST_ALT -->



</div> <!-- Fin de content-wrapper -->

		




	




<!-- Vue footer incluse -->
<?php $this->load->view('partials/footer'); ?>
