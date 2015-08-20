<!-- vue header incluse-->
<?php $this->load->view('partials/header'); ?>
<!-- vue sidebar incluse -->
<?php $this->load->view('partials/sidebar'); ?>


<div id='content-wrapper'>
	<div class='row'>
	<div class="stat-panel">
		<!-- Success background, bordered, without top and bottom borders, without left border, without padding, vertically and horizontally centered text, large text -->
		<a href="#" class="stat-cell col-xs-5 bg-info bordered no-border-vr no-border-l no-padding valign-middle text-center text-lg">
			<img src="<?php echo $voirdirectors->image ?>" class='img-responsive' style='margin: auto;'/>
		</a> <!-- /.stat-cell -->
		<!-- Without padding, extra small text -->
		<div class="stat-cell col-xs-7 no-padding ">
			
			<!-- Add parent div.stat-rows if you want build nested rows -->
			<div class="stat-rows">
				<div class="stat-row">
					<!-- Success darken background, small padding, vertically aligned text -->
					<a href="#" class="stat-cell bg-info darker padding-md valign-middle">
						<b><h1 style='text-align: center;'><?php echo $voirdirectors->firstname?> <?php echo $voirdirectors->lastname?></h1></b>
						<i class="fa fa-bug pull-right"></i>
					</a>
				</div>
				<div class="stat-row">
					<!-- Success darken background, small padding, vertically aligned text -->
					<a href="#" class="stat-cell bg-info darken padding-sm valign-middle">
						<b>Date de naissance : </b><?php echo $voirdirectors->dob?>
						<i class="fa fa-bug pull-right"></i>
					</a>
				</div>
				<div class="stat-row">
					<!-- Success background, small padding, vertically aligned text -->
					<a href="#" class="stat-cell bg-info padding-sm valign-middle">
						<b>Ville : </b><?php echo $voirdirectors->ville?>
						<i class="fa fa-envelope-o pull-right"></i>
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
								<b>Biographie</b>
							</a>
						</div> <!-- / .panel-heading -->
						<div id="collapseOne-success" class="panel-collapse in">
							<div class="panel-body">
								<?php echo $voirdirectors->biography ?>
							</div> <!-- / .panel-body -->
						</div> <!-- / .collapse -->
					</div> <!-- / .panel -->
				</div>
			</div>
			
		</div><!-- Fin de stat-panel-->
	</div> <!-- Fin de row -->

	<div class='row'>
	<div class='col-md-7'>

			<div class="table-info">
				<div class="table-header">
					<div class="table-caption">
						Films tournés par ce réalisateur
					</div>
				</div>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>#</th>
							<th>Titre</th>
							<th>Annee</th>
							<th>Synopsis</th>
							<th>Budget</th>
							<th>Prix</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($filmsdirectors as $filmsdirector) { ?>
						<tr>
							<td><img src="<?php echo $filmsdirector->img ?>" alt=" " class="message-avatar" height ='100'></td>
							<td><?php echo $filmsdirector->title ?></td>
							<td><?php echo $filmsdirector->annee ?></td>
							<td><?php echo $filmsdirector->synopsis ?></td>
							<td><?php echo $filmsdirector->budget ?>&euro;</td>
							<td><?php echo $filmsdirector->price ?>&euro;</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
				
			</div><!-- / Info table -->
		</div><!-- Fin col-md-7 -->
	</div><!-- Fin de row --> 
</div> <!-- Fin de content-wrapper -->

		




	




<!-- Vue footer incluse -->
<?php $this->load->view('partials/footer'); ?>