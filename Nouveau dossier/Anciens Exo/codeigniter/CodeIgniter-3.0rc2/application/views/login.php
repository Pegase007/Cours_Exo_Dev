<!-- vue header incluse-->
<?php $this->load->view('partials/header'); ?>


<div id='content-wrapper'>

<?php if(isset($error)) { ?>
    <div class="alert alert-warning alert-dark"><?php echo $error; ?></div>
<?php } ?>
<!-- 6. $HORIZONTAL_FORM ===========================================================================

				Horizontal form
-->
		<form action="<?php echo site_url('welcome/login');?>" method='post' class="panel form-horizontal" enctype='multipart/form-data'>
			<div class="panel-heading">
				<span class="panel-title fa fa-plus"> Connectez vous</span>
			</div>
			<div class="panel-body">
				<div class="row form-group">
					<label class="col-sm-4 control-label">Nom d'utilisateur:</label>
					<div class="col-sm-8">
						<input type="text" name="nom" class="form-control" placeholder='Votre titre'>
						<?php echo form_error('nom','<div class="alert alert-dark alert-danger">
						<button type="button" class="close" data-dismiss="alert">x</button>','</div>'); ?>
					</div>
				</div>
				<div class="row form-group">
					<label class="col-sm-4 control-label">Mot de passe:</label>
					<div class="col-sm-8">
						<input type="password" name="mdp" class="form-control"></textarea>
						<?php echo form_error('mdp','<div class="alert alert-dark alert-danger">
						<button type="button" class="close" data-dismiss="alert">x</button>','</div>'); ?>
					</div>
				</div>
			</div>
			
			<div class="panel-footer text-right">
				<button type='submit' class="btn btn-primary">Connexion</button>
			</div>
		</form>
<!-- /6. $HORIZONTAL_FORM -->

</div><!-- Fin de content-wrapper -->




<!-- Vue footer incluse -->
<?php $this->load->view('partials/footer'); ?>
