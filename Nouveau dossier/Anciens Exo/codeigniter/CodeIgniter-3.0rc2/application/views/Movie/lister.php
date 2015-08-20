<!-- vue header incluse-->
<?php $this->load->view('partials/header'); ?>
<!-- vue sidebar incluse -->
<?php $this->load->view('partials/sidebar'); ?>



<!-- 45.1. $JQUERY_DATA_TABLES_EXAMPLE =============================================================

		Examples
-->
		<!-- Javascript -->
		<script>
			init.push(function () {
				$('#jq-datatables-example').dataTable();
				$('#jq-datatables-example_wrapper .table-caption').text('Liste de mes films :');
				$('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
			});
			$('#myModal').on('shown.bs.modal', function () {
			  $('#myInput').focus();
			});

		</script>
		<!-- / Javascript -->
	<div id="content-wrapper">
		<?php 
		//Je récupére mon message flash grace a ma clé success
		$message = $this->session->flashdata('success');

		if(!empty($message)){ ?>
			<div class="alert alert-danger">
				<?php echo $message; ?>
			</div>

		<?php } ?>
		<div class="row">
			<a id="uidemo-jq-datatables-examples" href="#uidemo-jq-datatables-examples" class="header-2"></a>
			<div class="col-md-12">
				<div class="table-primary">
					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">
						<a href='<?php echo site_url("movie/creer/")?>'><button class="btn btn-xs btn-info btn-flat fa fa-plus">Ajouter un film</button></a>
						<thead>
							<tr>
								<th>#</th>
								<th>Titre</th>
								<th>Prix</th>
								<th>Budget</th>
								<th>Synopsis</th>
								<th>Note</th>
								<th>Visibilité</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($allmovies as $allmovie){?>
							<tr class="odd gradeX">
								<td><?php echo $allmovie->id ?></td>
								<td><a href='<?php echo site_url('movie/voir/'.$allmovie->id);?>'><?php echo $allmovie->title ?></a></td>
								<td><?php echo price($allmovie->price) ?></td>
								<td><?php echo $allmovie->budget ?></td>
								<td><?php echo readmore($allmovie->synopsis, 200, 'voir/'.$allmovie->id); ?></td>
								<td>
									<?php 
									echo generatestar($allmovie->note_presse)		
									 ?>
								</td>
								<td>
								<?php echo visibility($allmovie->visible) ?>

								</td>
								<td>
									<a href="<?php echo site_url('movie/editer/'.$allmovie->id)?>"><button class="btn btn-xs btn-warning btn-flat fa fa-pencil">Editer</button></a>
									<button class="btn btn-xs btn-danger btn-flat fa fa-times" data-toggle="modal" data-target="#myModal<?php echo $allmovie->id ?>" >Supprimer</button></a>
									
									<!-- Modal -->
									<div class="modal fade" id="myModal<?php echo $allmovie->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									  <div class="modal-dialog">
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        <h4 class="modal-title" id="myModalLabel">Suppression du film</h4>
									      </div>
									      <div class="modal-body">
									        Etes vous sur de vouloir supprimer ce film <?php echo $allmovie->title ?>
 ?
									      </div>
									      <div class="modal-footer">
									        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
									        <a href="<?php echo site_url('movie/supprimer/'.$allmovie->id);?>"><button type="button" class="btn btn-primary">Supprimer</button></a>
									      </div>
									    </div>
									  </div>
									</div>

									<?php if ($allmovie->visible == 1){ ?>
										<a href='<?php echo site_url("movie/desactiver/".$allmovie->id);?>'><button class="btn btn-xs btn-info btn-flat fa fa-times">Desactiver</button></a>
									<?php }else{ ?>
										<a href='<?php echo site_url("movie/activer/".$allmovie->id);?>'><button class="btn btn-xs btn-success btn-flat fa fa-check">Activer</button></a>
									<?php } ?>

									<?php if ($allmovie->cover == 1){ ?>
										<a href='<?php echo site_url("movie/retireravant/".$allmovie->id);?>'><button class="btn btn-xs btn-danger btn-flat fa fa-times">Retirer de l'avant</button></a>
									<?php }else{ ?>
										<a href='<?php echo site_url("movie/mettreavant/".$allmovie->id);?>'><button class="btn btn-xs btn-default btn-flat fa fa-heart">Mettre en avant</button></a>
									<?php } ?>
									<a href='<?php echo site_url('movie/voir/'.$allmovie->id);?>'>
										<button class="btn btn-xs btn-success btn-flat fa fa-eye">Voir</button>
									</a>					
									<button class="btn btn-xs btn-info btn-flat fa fa-shopping-cart">Ajouter au panier</button>
								</td>
						
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div> <!-- Fin de content-wrapper -->
<!-- Vue footer incluse -->
<?php $this->load->view('partials/footer'); ?>
