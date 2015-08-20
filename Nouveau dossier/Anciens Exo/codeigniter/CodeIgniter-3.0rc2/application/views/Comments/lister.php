<!-- vue header incluse-->
<?php $this->load->view('partials/header'); ?>
<!-- vue sidebar incluse -->
<?php $this->load->view('partials/sidebar'); ?>

<div id='content-wrapper'>

	<h1>Lister comments</h1>



<!-- 45.1. $JQUERY_DATA_TABLES_EXAMPLE =============================================================

		Examples
-->
		<!-- Javascript -->
		<script>
			init.push(function () {
				$('#jq-datatables-example').dataTable();
				$('#jq-datatables-example_wrapper .table-caption').text('Liste de mes commentaires :');
				$('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
			});
		</script>
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
					$(".modal").modal("hide");

				},
				error: function(){
					alert('la requéte n\'a pas abouti');
				}
			});
		});
	})
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
						
						<thead>
							<tr>
								<th>#</th>
								<th>Nom d'utilisateur</th>
								<th>Commentaires</th>
								<th>Film</th>
								<th>Actions</th>
								
							</tr>
						</thead>
						<tbody>
							<?php foreach ($voircomments as $voircomment){?>
							<tr class="odd gradeX comments">
								<td><a href="<?php echo site_url('comments/voir/'.$voircomment->cid)?>"><img src="<?php echo $voircomment->img ?>" height='150' width='100'></a></td>
								<td><a href="<?php echo site_url('comments/voir/'.$voircomment->cid)?>"><?php echo $voircomment->username ?></a></td>
								<td><?php echo $voircomment->content ?></td>
								<td><?php echo $voircomment->title ?></td>
								
								<td>
									<!-- Pour Julien -->
									<?php if($voircomment->state == 1){ ?>
										<a href=""><button class="btn btn-xs btn-success btn-flat fa fa-eye">Visible</button></a>
									<?php } else if($voircomment->state == 2){ ?>
										<a href=""><button class="btn btn-xs btn-primary btn-flat fa fa-pencil">En cours de validation</button></a>
									<?php } else if($voircomment->state == 0){ ?>
										<a href=""><button class="btn btn-xs btn-warning btn-flat fa fa-eye-slash">Inactif</button></a>
									<?php } ?>


									<button class="btn btn-xs btn-danger btn-flat fa fa-times" data-toggle="modal" data-target="#myModal<?php echo $voircomment->cid ?>" >Supprimer</button></a>
									
									<!-- Modal -->
									<div class="modal fade" id="myModal<?php echo $voircomment->cid ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									  <div class="modal-dialog">
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        <h4 class="modal-title" id="myModalLabel">Suppression de commentaires</h4>
									      </div>
									      <div class="modal-body">
									        Etes vous sur de vouloir supprimer ce commentaires de  <?php echo $voircomment->username ?> sur <?php echo $voircomment->title ?>
 
									      </div>
									      <div class="modal-footer">
									        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
									        <a href="<?php echo site_url('comments/supprimer/'.$voircomment->cid);?>"class='removecomm'><button type="button" class="btn btn-primary">Supprimer</button></a>
									      </div>
									    </div>
									  </div>
									</div>
									
									
									
									<a href="<?php echo site_url('comments/voir/'.$voircomment->cid)?>"><button class="btn btn-xs btn-info btn-flat fa fa-eye">Voir</button></a>
									
									
									
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