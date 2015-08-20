<!-- vue header incluse-->
<?php $this->load->view('partials/header'); ?>
<!-- vue sidebar incluse -->
<?php $this->load->view('partials/sidebar'); ?>




<!-- Javascript -->
		<script>
			init.push(function () {
				if (! $('html').hasClass('ie8')) {
					$('textarea').summernote({
						height: 200,
						tabsize: 2,
						codemirror: {
							theme: 'monokai'
						}
					});
				}
				$('#summernote-boxed').switcher({
					on_state_content: '<span class="fa fa-check" style="font-size:11px;"></span>',
					off_state_content: '<span class="fa fa-times" style="font-size:11px;"></span>'
				});
				$('#summernote-boxed').on($('html').hasClass('ie8') ? "propertychange" : "change", function () {
					var $panel = $(this).parents('.panel');
					if ($(this).is(':checked')) {
						$panel.find('.panel-body').addClass('no-padding');
						$panel.find('.panel-body > *').addClass('no-border');
					} else {
						$panel.find('.panel-body').removeClass('no-padding');
						$panel.find('.panel-body > *').removeClass('no-border');
					}
				});
				$('textarea').code('');
				$('#image').pixelFileInput({placeholder: 'Aucun fichier ...'});
			});
		</script>
		<!-- / Javascript -->


<!-- 6. $HORIZONTAL_FORM ===========================================================================

				Horizontal form
-->
		
		
<!-- /6. $HORIZONTAL_FORM -->





<div id='content-wrapper'>
	<h1>Page créer user</h1>











<form action="<?php echo site_url('users/creer');?>" method='post' class="panel form-horizontal" enctype='multipart/form-data'>
			<div class="panel-heading">
				<span class="panel-title fa fa-plus"> Creation d'utilisateur</span>
			</div>
			<div class="panel-body">
				<div class="row form-group">
					<label class="col-sm-4 control-label">Nom d'utilisateur :</label>
					<div class="col-sm-8">
						<input type="text" name="nom" value='<?php echo set_value("nom")?>' class="form-control" placeholder='Nom'>
						<?php echo form_error('nom','<div class="alert alert-dark alert-danger">
						<button type="button" class="close" data-dismiss="alert">x</button>','</div>'); ?>
					</div>
				</div>
				<div class="row form-group">
					<label class="col-sm-4 control-label">Mot de passe :</label>
					<div class="col-sm-8">
						<input type="password" name="mdp" value='<?php echo set_value("mdp")?>' class="form-control" placeholder='Mot de passe'>
						<?php echo form_error('mdp','<div class="alert alert-dark alert-danger">
						<button type="button" class="close" data-dismiss="alert">x</button>','</div>'); ?>
					</div>
				</div>
				<div class="row form-group">
					<label class="col-sm-4 control-label">Retaper mot de passe :</label>
					<div class="col-sm-8">
						<input type="password" name="mdp1" value='<?php echo set_value("mdp1")?>' class="form-control">
						<?php echo form_error('mdp1','<div class="alert alert-dark alert-danger">
						<button type="button" class="close" data-dismiss="alert">x</button>','</div>'); ?>
					</div>
				</div>
				<div class="row form-group">
					<label class="col-sm-4 control-label">Email :</label>
					<div class="col-sm-8">
						<input type="email" name="mail" value='<?php echo set_value("mail")?>' class="form-control">
						<?php echo form_error('mail','<div class="alert alert-dark alert-danger">
						<button type="button" class="close" data-dismiss="alert">x</button>','</div>'); ?>
					</div>
				</div>
				
					
				<div class="panel-body form-controls-demo">
						
					<label class="col-sm-4 control-label">Roles :</label>	
					<div class='col-sm-8'>
						<select class="form-control" name='roles' value='<?php echo set_value("roles")?>'>
							<option value=''></option>
							<option value="0">Utilisateur</option>
							<option value="1">Admin</option>
							<option value="2">Super admin</option>
				
						</select>
						<?php echo form_error('roles','<div class="alert alert-dark alert-danger">
						<button type="button" class="close" data-dismiss="alert">x</button>','</div>'); ?>
					</div>
						
				</div>
				
				
				<div class='row form-group'>
				<label class='col-sm-4 control-label'>Image:</label>
				<div class='col-sm-8'>
					<input accept='image' capture='capture' type='file' name='image' id='image'/>
				</div>
			</div>
			<div class="panel-footer text-right">
				<button type='submit' class="btn btn-primary">Creer cet utilisateur</button>
			</div>
</form>
























</div><!-- Fin de content-wrapper -->












<!-- Vue footer incluse -->
<?php $this->load->view('partials/footer'); ?>