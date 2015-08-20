<!-- vue header incluse-->
<?php $this->load->view('partials/header'); ?>
<!-- vue sidebar incluse -->
<?php $this->load->view('partials/sidebar'); ?>










<div id='content-wrapper'>
<h1>Page lister users</h1>
	<div class="row">
			<a id="uidemo-jq-datatables-examples" href="#uidemo-jq-datatables-examples" class="header-2"></a>
			<div class="col-md-12">
				<div class="table-primary">
					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">
						<a href='<?php echo site_url("users/creer/")?>'><button class="btn btn-xs btn-info btn-flat fa fa-plus">Ajouter un utilisateur</button></a>
						<thead>
							<tr>
								<th>#</th>
								<th>Nom d'utilisateur</th>
								<th>Derniére connexion</th>
								<th>Creation du compte</th>
								<th>Nombre de commentaires postés</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($allUsers as $allUser){?>
							<tr class="odd gradeX comments">
								<td><a href="#"><img src="<?php echo $allUser->image ?>" height='150' width='100'></a></td>
								<td><a href="#"><?php echo $allUser->username ?></a></td>
								<td><?php echo $allUser->last_login ?></td>
								<td><?php echo $allUser->created_at ?></td>
								<td><?php echo $allUser->nbcomment ?></td>
								
								<td>
									<a href="<?php echo site_url('users/editer/'.$allUser->id)?>"><button class="btn btn-xs btn-warning btn-flat fa fa-pencil">Editer</button></a>
									<button class="btn btn-xs btn-danger btn-flat fa fa-times" data-toggle="modal" data-target="#myModal<?php echo $allUser->id ?>" >Supprimer</button></a>
									
									<!-- Modal -->
									<div class="modal fade" id="myModal<?php echo $allUser->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									  <div class="modal-dialog">
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        <h4 class="modal-title" id="myModalLabel">Suppression du film</h4>
									      </div>
									      <div class="modal-body">
									        Etes vous sur de vouloir supprimer cet utilisateur <?php echo $allUser->username ?>
 ?
									      </div>
									      <div class="modal-footer">
									        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
									        <a href="<?php echo site_url('users/supprimer/'.$allUser->id);?>"><button type="button" class="btn btn-primary">Supprimer</button></a>
									      </div>
									    </div>
									  </div>
									</div>
								</td>
								
							
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

</div><!-- Fin de content-wrapper -->












<!-- Vue footer incluse -->
<?php $this->load->view('partials/footer'); ?>