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
				$('#jq-datatables-example_wrapper .table-caption').text('Liste de mes catégories :');
				$('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
			});
		</script>
		<!-- / Javascript -->
	<div id='content-wrapper'>
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
						<a href='<?php echo site_url("categories/creer/")?>'><button class="btn btn-xs btn-info btn-flat fa fa-plus">Ajouter une catégorie</button></a>
						<thead>
							<tr>
								<th>Id</th>
								<th>Titre</th>
								<th>Description</th>
								<th>Actions</th>
								
							</tr>
						</thead>
						<tbody>
							<?php foreach ($allcategories as $allcategorie){?>
							<tr class="odd gradeX">
								<td><?php echo $allcategorie->id ?></td>
								<td><a href='<?php echo site_url('categories/voir/'.$allcategorie->id);?>'><?php echo $allcategorie->title ?></a></td>
								<td><?php echo $allcategorie->description ?></td>
								
								<td>
									<a href="<?php echo site_url('categories/editer/'.$allcategorie->id)?>"><button class="btn btn-xs btn-warning btn-flat fa fa-pencil">Editer</button></a>
									<button class="btn btn-xs btn-danger btn-flat fa fa-times" data-toggle="modal" data-target="#myModal<?php echo $allcategorie->id ?>" >Supprimer</button></a>
									
									<!-- Modal -->
									<div class="modal fade" id="myModal<?php echo $allcategorie->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									  <div class="modal-dialog">
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        <h4 class="modal-title" id="myModalLabel">Suppression du film</h4>
									      </div>
									      <div class="modal-body">
									        Etes vous sur de vouloir supprimer cette catégorie ? <?php echo $allcategorie->title ?>
 ?
									      </div>
									      <div class="modal-footer">
									        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
									        <a href="<?php echo site_url('categories/supprimer/'.$allcategorie->id);?>"><button type="button" class="btn btn-primary">Supprimer</button></a>
									      </div>
									    </div>
									  </div>
									</div>
									
									
									<a href='<?php echo site_url('categories/voir/'.$allcategorie->id);?>'><button class="btn btn-xs btn-info btn-flat fa fa-eye">Voir</button></a>
									
									
									
								</td>
								
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
			<!-- Vue footer incluse -->
		<?php $this->load->view('partials/footer'); ?>
