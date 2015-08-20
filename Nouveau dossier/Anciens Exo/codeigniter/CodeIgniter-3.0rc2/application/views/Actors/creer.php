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

<div id='content-wrapper'>


<h1>Page creer actors</h1>

<!-- 6. $HORIZONTAL_FORM ===========================================================================

				Horizontal form
-->
				<form action="<?php echo site_url('actors/creer');?>" method='post' class="panel form-horizontal" enctype='multipart/form-data'>
					<div class="panel-heading">
						<span class="panel-title fa fa-plus"> Creation d'acteur</span>
					</div>
					<div class="panel-body">
						<div class="row form-group">
							<label class="col-sm-4 control-label">Nom de l'acteur:</label>
							<div class="col-sm-8">
								<input type="text" name="nom" value='<?php echo set_value("lastname")?>' class="form-control" placeholder='Nom'>
								<?php echo form_error('nom','<div class="alert alert-dark alert-danger">
								<button type="button" class="close" data-dismiss="alert">x</button>','</div>'); ?>
							</div>
						</div>
						<div class="row form-group">
							<label class="col-sm-4 control-label">Prénom de l'acteur:</label>
							<div class="col-sm-8">
								<input type="text" name="prenom" value='<?php echo set_value("firstname")?>' class="form-control" placeholder='Prénom'>
								<?php echo form_error('prenom','<div class="alert alert-dark alert-danger">
								<button type="button" class="close" data-dismiss="alert">x</button>','</div>'); ?>
							</div>
						</div>
						<div class="row form-group">
							<label class="col-sm-4 control-label">Rôle de l'acteur:</label>
							<div class="col-sm-8">
								<input type="text" name="role" value='<?php echo set_value("roles")?>' class="form-control">
								<?php echo form_error('role','<div class="alert alert-dark alert-danger">
								<button type="button" class="close" data-dismiss="alert">x</button>','</div>'); ?>
							</div>
						</div>
						<div class="row form-group">
							<label class="col-sm-4 control-label">Ville de l'acteur:</label>
							<div class="col-sm-8">
								<input type="text" name="ville" value='<?php echo set_value("city")?>' class="form-control">
								<?php echo form_error('ville','<div class="alert alert-dark alert-danger">
								<button type="button" class="close" data-dismiss="alert">x</button>','</div>'); ?>
							</div>
						</div>
						<div class="row form-group">
							<label class="col-sm-4 control-label">Date de naissance de l'acteur:</label>
							<div class="col-sm-8">
								<input type="date" name="date" value='<?php echo set_value("dob")?>' class="form-control">
								<?php echo form_error('date','<div class="alert alert-dark alert-danger">
								<button type="button" class="close" data-dismiss="alert">x</button>','</div>'); ?>
							</div>
						</div>
							
						<div class="panel-body form-controls-demo">
								
							<label class="col-sm-4 control-label">Nationalité de l'acteur:</label>	
							<div class='col-sm-8'>
								<select class="form-control" name='nationalite' value='<?php echo set_value("nationality")?>'>
									<option value=''></option>
									<option value="fr">France</option>
									<option value="en">Angleterre</option>
									<option value="usa">Etats-unis</option>
									<option value="au">Australie</option>
									<option value="de">Allemagne</option>
									<option value="es">Espagne</option>
								</select>
								<?php echo form_error('nationalite','<div class="alert alert-dark alert-danger">
								<button type="button" class="close" data-dismiss="alert">x</button>','</div>'); ?>
							</div>
								
						</div>
						
						<div class="row form-group">
							<label class="col-sm-4 control-label">Biographie:</label>
							<div class="col-sm-8">
								<textarea type="text" name="biographie" value='<?php echo set_value("biography")?>' class="form-control"></textarea>
								<?php echo form_error('biographie','<div class="alert alert-dark alert-danger">
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
						<button type='submit' class="btn btn-primary">Creer cet acteur</button>
					</div>
				</form>
<!-- /6. $HORIZONTAL_FORM -->



</div>
<!-- Vue footer incluse -->
<?php $this->load->view('partials/footer'); ?>