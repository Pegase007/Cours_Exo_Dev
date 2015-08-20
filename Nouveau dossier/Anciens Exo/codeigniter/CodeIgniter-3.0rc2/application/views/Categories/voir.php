<!-- vue header incluse-->
<?php $this->load->view('partials/header'); ?>
<!-- vue sidebar incluse -->
<?php $this->load->view('partials/sidebar'); ?>

<div id='content-wrapper'>
	<div class='row'>
		<div class='col-md-6'>
			<h1>Categorie <?php echo $voircatego1->ttl ?></h1>
			<img src="<?php echo $voircatego1->img ?>" alt="categorieimg" class='img-responsive'>
			<p style='text-align: center; font-weight: bold;'><?php echo $voircatego1->descrip ?></p>
		</div>
		<div class='col-md-6'>
			<h1>Films de la categorie <?php echo $voircatego1->ttl ?></h1>

			<div class="row">
				<?php foreach ($voircategos as $voircatego) { ?>
					<div class="col-md-6">
						<?php if (count($categories1) == 0){ ?>
							<h1> Aucun film de cette catégorie </h1>
						<?php }else{ ?>
						
						<img src="<?php echo $voircatego->img ?>" height='400' width='200' alt="categoriefilm">
						<p><b><?php echo $voircatego->ttl ?></b></p>
						<?php } ?>
						
					</div>
				<?php } ?>
			</div>

		</div>
	</div>
</div> <!-- Fin de content-wrapper -->
<!-- Vue footer incluse -->
<?php $this->load->view('partials/footer'); ?>