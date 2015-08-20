<!-- vue header incluse-->
<?php $this->load->view('partials/header'); ?>
<!-- vue sidebar incluse -->
<?php $this->load->view('partials/sidebar'); ?>

<div id='content-wrapper'>




<form action='<?php echo site_url ("movie/rechercher")?>' class="search-form bg-primary" method='post'>
	<div class="input-group input-group-lg">
		<span class="input-group-addon no-background"><i class="fa fa-search"></i></span>
		<input type="text" name="mot" class="form-control" placeholder="Type your search here..." value="<?php echo set_value('mot') ?>">
		<span class="input-group-btn">
			<button class="btn" type="submit">Search</button>
		</span>
	</div> <!-- / .input-group -->
</form>



<div class="panel-body tab-content">

	<!-- Classic search -->
	<ul class="search-classic tab-pane fade in active" id="search-tabs-all">
		<?php

		if(!empty($movies)){

			foreach ($movies as $movie) { ?>
				<li>
					<a class="search-title" href="<?php echo site_url('movie/voir/' .$movie->id) ?>"><?php echo $movie->mtitle ;?>
					</a>
					<div class="search-content">
						<?php echo $movie->synopsis ;?>
						
					</div>
				</li>
			<?php }
		}else{
			echo "<div class='alert alert-danger'>".validation_errors()."</div";
		}?>
		
	</ul>
	</div>


</div><!-- Fin de content-wrapper -->












<!-- Vue footer incluse -->
<?php $this->load->view('partials/footer'); ?>