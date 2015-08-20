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


<h1>Page creer movie</h1>

<!-- 6. $HORIZONTAL_FORM ===========================================================================

	Horizontal form
-->
	<form action="<?php echo site_url('movie/creer');?>" method='post' enctype='multipart/form-data' class="panel form-horizontal">
		<div class="panel-heading">
			<span class="panel-title fa fa-plus"> Creation de films</span>
		</div>
		<div class="panel-body">
			<div class="row form-group">
				<label class="col-sm-4 control-label">Titre du film:</label>
				<div class="col-sm-8">
					<input type="text" name="titre" value='<?php echo set_value("title")?>' class="form-control" placeholder='Titre'>
					<?php echo form_error('titre','<div class="alert alert-dark alert-danger">
					<button type="button" class="close" data-dismiss="alert">x</button>','</div>'); ?>
				</div>
			</div>
			<div class="row form-group">
				<label class="col-sm-4 control-label">Année du film:</label>
				<div class="col-sm-8">
					<input type="number" min='1950' max='2020' name="annee" value='<?php echo set_value("annee")?>' class="form-control" placeholder='ex: 2010'>
					<?php echo form_error('annee','<div class="alert alert-dark alert-danger">
					<button type="button" class="close" data-dismiss="alert">x</button>','</div>'); ?>
				</div>
			</div>
			<div class="row form-group">
				<label class="col-sm-4 control-label">Budget du film:</label>
				<div class="col-sm-8">
					<input type="number" min='20000' max='999999999' name="budget" value='<?php echo set_value("budget")?>' class="form-control" placeholder='Minimum 200000'>
					<?php echo form_error('budget','<div class="alert alert-dark alert-danger">
					<button type="button" class="close" data-dismiss="alert">x</button>','</div>'); ?>
				</div>
			</div>
			<div class="row form-group">
				<label class="col-sm-4 control-label">Date de sortie du film:</label>
				<div class="col-sm-8">
					<input type="date" name="date" value='<?php echo set_value("dob")?>' class="form-control">
					<?php echo form_error('date','<div class="alert alert-dark alert-danger">
					<button type="button" class="close" data-dismiss="alert">x</button>','</div>'); ?>
				</div>
			</div>
			
				
			<div class="panel-body form-controls-demo">
					
				<label class="col-sm-4 control-label">Bande original:</label>	
				<div class='col-sm-8'>
					<div class='col-sm-4'>
						<select class="form-control" name='bo' value='<?php echo set_value("bo")?>'>
							<option value=''></option>
							<option value="vo">VO</option>
							<option value="vost">VOST</option>
							<option value="vf">VF</option>
						</select>
						<?php echo form_error('bo','<div class="alert alert-dark alert-danger">
						<button type="button" class="close" data-dismiss="alert">x</button>','</div>'); ?>
					</div>
					<div class="col-sm-4">
							<label class="checkbox-inline">
								<input type="checkbox" name='visible' value="1" class="px"> <span class="lbl">Visible</span>
							</label>
							<?php echo form_error('visible','<div class="alert alert-dark alert-danger">
						<button type="button" class="close" data-dismiss="alert">x</button>','</div>'); ?>
					
							<label class="checkbox-inline">
								<input type="checkbox" name='couv' value="1" class="px"> <span class="lbl">En couverture</span>
							</label>
							<?php echo form_error('couv','<div class="alert alert-dark alert-danger">
						<button type="button" class="close" data-dismiss="alert">x</button>','</div>'); ?>
					
					
					</div>

					<label>Distributeur:</label>
					<p class="row form-group pull-right">

						<label class="radio">
							<input type="radio" name="distrib" value='Warner_bros' class="px">
							<span class="lbl">Warner Bros</span>
						</label>
						<label class="radio">
							<input type="radio" name="distrib" value='hbo' class="px">
							<span class="lbl">HBO</span>
						</label>
						<label class="radio">
							<input type="radio" name="distrib" value='century_fox' class="px">
							<span class="lbl">Century Fox</span>
							
						</label>
						<?php echo form_error('distrib','<div class="alert alert-dark alert-danger">
						<button type="button" width="50" class="close" data-dismiss="alert">x</button>','</div>'); ?>
					</p>
				</div>
					
			</div>
		<div class="row form-group">
			<label class="col-sm-4 control-label">Catégorie:</label>	
				<div class='col-sm-8'>
					<div class="row">
						<div class='col-sm-4'>
							<select class="form-control" name='catego'>
								<option value=''></option>
								<?php foreach ($allcategories as $allcategorie) {?>
								
								<option value="<?php echo $allcategorie->id ?>"><?php echo $allcategorie->title ?></option>
								<?php }?>
							</select>

							<?php echo form_error('catego','<div class="alert alert-dark alert-danger">
							<button type="button" class="close" data-dismiss="alert">x</button>','</div>'); ?>
						</div>
					
					
					<label class="col-sm-3 control-label">Image du film:</label>
					<div class="col-sm-5">
						<input type="file" name="image" capture="capture" id="image" class="form-control" placeholder='http://' value='<?php echo set_value("image")?>'>
						<?php echo form_error('image','<div class="alert alert-dark alert-danger">
						<button type="button" class="close" data-dismiss="alert">x</button>','</div>'); ?>
					</div>
				</div>
			</div>
		</div>

			<div class="row form-group">
				<label class="col-sm-4 control-label">Synopsis:</label>
				<div class="col-sm-8">
					<textarea type="text" name="synopsis" value='<?php echo set_value("synopsis")?>' class="form-control"></textarea>
					<?php echo form_error('synopsis','<div class="alert alert-dark alert-danger">
					<button type="button" class="close" data-dismiss="alert">x</button>','</div>'); ?>
				</div>
			</div>

			<div class="row form-group">
				<label class="col-sm-4 control-label">Description:</label>
				<div class="col-sm-8">
					<textarea type="text" name="description" value='<?php echo set_value("description")?>' class="form-control"></textarea>
					<?php echo form_error('description','<div class="alert alert-dark alert-danger">
					<button type="button" class="close" data-dismiss="alert">x</button>','</div>'); ?>
				</div>
			</div>

			<div class="row form-group">
				<label class="col-sm-4 control-label">Trailer du film:</label>
				<div class="col-sm-8">
					<textarea type="url" name="trailer" value='<?php echo set_value("trailer")?>' class="form-control"></textarea>
					<?php echo form_error('trailer','<div class="alert alert-dark alert-danger">
					<button type="button" class="close" data-dismiss="alert">x</button>','</div>'); ?>
				</div>
			</div>

			

		</div>
		<div class="panel-footer text-right">
			<button type='submit' class="btn btn-primary">Creer ce film</button>
		</div>

	
	</form>
<!-- /6. $HORIZONTAL_FORM -->



</div>
<!-- Vue footer incluse -->
<?php $this->load->view('partials/footer'); ?>