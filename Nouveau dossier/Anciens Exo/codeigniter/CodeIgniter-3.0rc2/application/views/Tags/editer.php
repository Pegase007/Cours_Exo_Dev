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
				$('#image').pixelFileInput({placeholder: 'Aucun fichier ...'});
			});
		</script>
		<!-- / Javascript -->


<div id='content-wrapper'>
<h1>Page editer tags</h1>

<!-- 6. $HORIZONTAL_FORM ===========================================================================

				Horizontal form
-->
				<form action="<?php echo site_url('tags/editer/'.$tags->id);?>" method='post' class="panel form-horizontal" enctype='multipart/form-data'>
					<div class="panel-heading">
						<span class="panel-title fa fa-plus"> Edition de tags</span>
					</div>
					<div class="panel-body">
						<div class="row form-group">
							<label class="col-sm-4 control-label">Tag :</label>
							<div class="col-sm-8">
								<input value="<?php echo $tags->tag ?>" type="text" name="tag" class="form-control" placeholder='Votre tag'>
								<?php echo form_error('tag','<div class="alert alert-dark alert-danger">
								<button type="button" class="close" data-dismiss="alert">x</button>','</div>'); ?>
							</div>
						</div>
					</div>
					<div class="panel-footer text-right">
						<button type='submit' class="btn btn-primary">Modifier ce tag</button>
					</div>
				</form>
<!-- /6. $HORIZONTAL_FORM -->

</div><!-- Fin de content-wrapper -->

<!-- Vue footer incluse -->
<?php $this->load->view('partials/footer'); ?>
