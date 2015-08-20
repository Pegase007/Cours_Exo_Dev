<!-- vue header incluse-->
<?php $this->load->view('partials/header'); ?>
<!-- vue sidebar incluse -->
<?php $this->load->view('partials/sidebar'); ?>
	
	<div id='content-wrapper'>
		<h1>Bienvenue 3wa</h1>
		<div class='row'>
			<div class='col-md-6'>
				<h2 class="panel panel-primary">Films a l'affiche</h2>
				<?php foreach($filmsAffiche as $film){?>
				<div class='col-md-7'>
					<a href='<?php echo site_url('movie/voir/'.$film->id)?>'><img src='<?php echo $film->image ?>' class='img-responsive'/></a>
					<a href='<?php echo site_url('movie/voir/'.$film->id)?>'><h2 class='panel panel-info'><b><?php echo $film->title ?></b></h2></a>
				</div>
				<div class='col-md-5'>
					<p class='description'><?php echo $film->description?></p>
				</div>
				<?php } ?>
			</div>
		
			<div class='col-md-6'>
				<h2 class="panel panel-primary">Films attendus</h2>
				<?php foreach($filmsattendu as $filmsa){?>
				<div class='col-md-7'>
					<a href='<?php echo site_url('movie/voir/'.$filmsa->id)?>'><img src='<?php echo $filmsa->image ?>' class='img-responsive'/></a>
					<a href='<?php echo site_url('movie/voir/'.$filmsa->id)?>'><h2 class='panel panel-info'><b><?php echo $filmsa->title ?></b></h2></a>
				</div>
				<div class='col-md-5'>
					<p class='description'><?php echo $filmsa->description?></p>
				</div>
				<?php } ?>			
			</div>
		</div><!-- fin de row -->

		<div class="row">
			<h2 class='panel panel-primary'>Les 4 meilleurs acteurs</h2>
			<?php foreach($bestactors as $actors){?>
		 	<div class="col-sm-6 col-md-3">
		    <div class="thumbnail">
		    
		     <img src='<?php echo $actors->image ?>' class='img-responsive' alt='actors'/>
		      <div class="caption">
		        <h3><?php echo $actors->firstname ?>
					<?php echo $actors->lastname?></h3>
		        <p><?php echo $actors->biography?></p>
		        <p><a href="<?php echo site_url('actors/voir/'.$actors->id)?>" class="btn btn-primary" role="button">En savoir plus</a> </p>
		      </div>
		      
		    </div>
		  </div>
		  <?php } ?>
		</div><!--Fin de row -->
		

		<h2 class='panel panel-primary'>Toutes les catégories</h2>
		<?php foreach($categories as $categorie){?>
		<div class='btn-group' role='groupe' aria-label="">
			<a href='<?php echo site_url('categories/voir/'.$categorie->id)?>'><button type='button' class='btn btn-default' style='margin-right: 3em;margin-top: 1em;'>
				<p><?php echo $categorie->title ?></p>
			</button></a>
		</div>
		<?php }?>


		<h2 class='panel panel-primary'>Les 4 meilleurs réalisateurs</h2>
		<div class='row'>
			<?php foreach($bestdirectors as $director){?>
			<div class='col-md-3'>
				<div class="panel panel-success panel-dark widget-profile">
					<div class="panel-heading">
						<div class="widget-profile-bg-icon"><i class="fa fa-flask"></i></div>
						<a href='<?php echo site_url('directors/voir/'.$director->id)?>'><img src='<?php echo $director->image ?>' class='img-responsive'/></a>
						<div class="widget-profile-header">
							<span><?php echo $director->firstname ?>
						<?php echo $director->lastname?></span><br>
							
						</div>
					</div> <!-- / .panel-heading -->
					<div class="list-group">
						<a href="#" class="list-group-item"><i class="fa fa-gift list-group-icon"></i><?php echo $director->dob ?><span class="badge badge-info"></span></a>
						<a href="#" class="list-group-item"><i class="fa fa-home list-group-icon"></i><?php echo $director->ville ?><span class="badge badge-warning"></span></a>		
						<a href="#" class="list-group-item"><?php echo $director->biography ?></a>
					</div>
				</div>
			</div>
			<?php } ?>
		</div><!--fin de row-->

		
		<div class='row'>
			<div class='col-md-6'>
				<?php foreach($random_movies as $random_movie){?>
				<h2 class='panel panel-primary'>Film aléatoire</h2>
				<div class="panel panel-danger panel-dark panel-body-colorful widget-profile widget-profile-centered">
					<div class="panel-heading">
						<a href='<?php echo site_url('movie/voir/'.$random_movie->id)?>'><img src='<?php echo $random_movie->image ?>'class='img-responsive'/>	</a>					
						<div class="widget-profile-header">
							<span style='font-size: 300%;font-weight: bold;'><?php echo $random_movie->title?></span><br>
							
						</div>
					</div> <!-- / .panel-heading -->
					<div class="panel-body">
						<div class="widget-profile-text" style="padding: 0;">
							<p><?php echo $random_movie->description ?></p>
						</div>
					</div>
				</div>	
				<?php } ?>
			</div>			
				


				<div class='col-md-6'>
				<h2 class='panel panel-primary'>Les 5 prochaines séances</h2>
				<div class="table-info">	
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>#</th>
								<th>Titre du film</th>
								<th>Date de la séance</th>
								<th>Adresse du cinéma</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($nextsessions as $nextsession) {?>
							<tr>
								
								<td><img src='<?php echo $nextsession->image ?>' width='100' height='150'/></td>
								<td><b><p><?php echo $nextsession->letitre ?></p></b></td>
								<td><p><?php echo $nextsession->date_session ?></p></td>
								<td><p><?php echo $nextsession->ville ?></p></td>
							
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				</div>
			</div><!--  Fin de row -->


			
			<div class='row'>
				<div class='col-md-6'>
					<h2 class='panel panel-primary'>Statistiques</h2>
					<div class="stat-panel">
						<!-- Success background, bordered, without top and bottom borders, without left border, without padding, vertically and horizontally centered text, large text -->
						<a href="#" class="stat-cell col-xs-5 bg-success bordered no-border-vr no-border-l no-padding valign-middle text-center text-lg">
							<i class="fa fa-film"></i>&nbsp;&nbsp;
							<strong>
							<?php foreach($stats2 as $stat2){?>
							<p><?php echo $stat2->movies ?>
							<?php }?> films</p></strong>
						</a> <!-- /.stat-cell -->
						<!-- Without padding, extra small text -->
						<div class="stat-cell col-xs-7 no-padding valign-middle">
							<!-- Add parent div.stat-rows if you want build nested rows -->
							<div class="stat-rows">
								<div class="stat-row">
									<!-- Success background, small padding, vertically aligned text -->
									<a href="#" class="stat-cell bg-success padding-sm valign-middle">
										<?php foreach($stats1 as $stat1){?>
										<p><?php echo $stat1->cats ?> catégories
										<?php }?>
										<i class="fa fa-folder-open-o pull-right"></i></p>
									</a>
								</div>
								<div class="stat-row">
									<!-- Success darken background, small padding, vertically aligned text -->
									<a href="#" class="stat-cell bg-success darken padding-sm valign-middle">
										<?php foreach($stats3 as $stat3){?>
										<p><?php echo $stat3->actors ?> acteurs
										<?php }?>
										<i class="fa fa-users pull-right"></i></p>
									</a>
								</div>
								<div class="stat-row">
									<!-- Success darker background, small padding, vertically aligned text -->
									<a href="#" class="stat-cell bg-success darker padding-sm valign-middle">
										<?php foreach($stats4 as $stat4){?>
										<p><?php echo $stat4->realis ?> réalisateurs
										<?php }?>
										<i class="fa fa-user pull-right"></i></p>
									</a>
								</div>
							</div> <!-- /.stat-rows -->
						</div> <!-- /.stat-cell -->
					</div>	
				</div>
			
				<div class='col-md-6'>	
				<h2 class='panel panel-primary'>Mots clés</h2>
				<?php foreach($motscles as $motscle){?>
					<?php if ($motscle->nbtag == 1){?>
					<p style='font-size : 100%'>

					<?php }elseif($motscle->nbtag  == 2){?>
					<p style='font-size : 200%;text-align: right;'>
				
					<?php }elseif($motscle->nbtag  >= 3){ ?>
					<p style='font-size : 300%;text-align: center;'>

					<?php } ?>
						<?php echo $motscle->nbtag ?>
						<?php echo $motscle->word ?>
					</p>
				<?php } ?>
				</div>
			</div> <!-- fin de row -->

			

		
		<div class='row'>
		<!-- 11. $RECENT_ACTIVITY ==========================================================================

			Recent activity
-->
			<!-- Javascript -->
			<script>
				init.push(function () {
					$('#dashboard-recent .panel-body > div').slimScroll({ height: 300, alwaysVisible: true, color: '#888',allowPageScroll: true });
				})
			</script>
			<!-- / Javascript -->

			<div class="col-md-7">
			
				<h2 class='panel panel-primary'>Les 5 derniers commentaires:</h2>
				<div class="panel panel-warning" id="dashboard-recent">
					<div class="panel-heading">
						<span class="panel-title"><i class="panel-title-icon fa fa-fire text-danger"></i>Recent</span>
						<ul class="nav nav-tabs nav-tabs-xs">
							<li class="active">
								<a href="#dashboard-actifs-comments" data-toggle="tab">Actifs</a>
							</li>
							<li>
								<a href="#dashboard-encours-comments" data-toggle="tab">En cours de validation</a>
							</li>
							<li>
								<a href="#dashboard-inactifs-comments" data-toggle="tab">Inactifs</a>
							</li>
						</ul>
					</div> <!-- / .panel-heading -->
					<div class="tab-content">

						<!-- Comments widget -->

						<!-- Without padding -->
						<div class="widget-comments panel-body tab-pane no-padding fade active in" id="dashboard-actifs-comments">
							<!-- Panel padding, without vertical padding -->
							<div class="panel-padding no-padding-vr">
								<?php foreach ($commentactifs as $commentactif){?>
								
								<div class="comment">
									<img src='<?php echo $commentactif->image ?>' class='comment-avatar'/>
									<div class="comment-body">
										<div class="comment-by">
											<a href="#" title=""><?php echo $commentactif->username ?>
											</a> commented on <a href="#" title=""><?php echo $commentactif->title ?></a>
										</div>
										<div class="comment-text">
											<?php echo $commentactif->content ?>
										</div>
										<div class="comment-actions">
											<a href="#"><i class="fa fa-pencil"></i>Edit</a>
											<a href="#"><i class="fa fa-times"></i>Remove</a>
											<span class="pull-right"><?php echo $commentactif->date_created?></span>
										</div>
									</div> <!-- / .comment-body -->
								</div> <!-- / .comment -->
								<?php } ?>
								
							</div>
						</div> <!-- / .widget-comments -->

						<div class="widget-comments panel-body tab-pane no-padding fade in" id="dashboard-encours-comments">
							<!-- Panel padding, without vertical padding -->
							<div class="panel-padding no-padding-vr">
								<?php foreach ($commentencours as $commentencour){?>

								<div class="comment">
									<img src="<?php echo $commentencour->image ?>" alt="" class="comment-avatar">
									<div class="comment-body">
										<div class="comment-by">
											<a href="#" title=""><?php echo $commentencour->username ?>
											</a> commented on <a href="#" title=""><?php echo $commentencour->title ?></a>
										</div>
										<div class="comment-text">
											<?php echo $commentencour->content ?>
										</div>
										<div class="comment-actions">
											<a href="#"><i class="fa fa-pencil"></i>Edit</a>
											<a href="#"><i class="fa fa-times"></i>Remove</a>
											<span class="pull-right"><?php echo $commentencour->date_created?></span>
										</div>
									</div> <!-- / .comment-body -->
								</div> <!-- / .comment -->
								<?php } ?>

							</div>
						</div> <!-- / .widget-comments -->

							<div class="widget-comments panel-body tab-pane no-padding fade in" id="dashboard-inactifs-comments">
							<!-- Panel padding, without vertical padding -->
								<div class="panel-padding no-padding-vr">
									<?php foreach ($commentinactifs as $commentinactif){?>
									<div class="comment">
										<img src="<?php echo $commentinactif->image ?>" alt="" class="comment-avatar">
										<div class="comment-body">
											<div class="comment-by">
												<a href="#" title=""><?php echo $commentinactif->username ?>
												</a> commented on <a href="#" title=""><?php echo $commentinactif->title ?></a>
											</div>
											<div class="comment-text">
												<?php echo $commentinactif->content ?>
											</div>
											<div class="comment-actions">
												<a href="#"><i class="fa fa-pencil"></i>Edit</a>
												<a href="#"><i class="fa fa-times"></i>Remove</a>
												<span class="pull-right"><?php echo $commentinactif->date_created?></span>
											</div>
										</div> <!-- / .comment-body -->
									</div> <!-- / .comment -->
									<?php } ?>
								</div>
							</div> <!-- / .widget-comments -->

						</div>
					</div> <!-- / .widget-threads -->
				</div> <!-- Fin de col-md-7 -->
<!-- /11. $RECENT_ACTIVITY -->

<!-- 6. $EXAMPLE_COMMENTS_COUNT ====================================================================-->
<script>
					init.push(function () {
						// Easy Pie Charts
						var easyPieChartDefaults = {
							animate: 2000,
							scaleColor: false,
							lineWidth: 6,
							lineCap: 'square',
							size: 90,
							trackColor: '#e5e5e5'
						}
						$('#easy-pie-chart-1').easyPieChart($.extend({}, easyPieChartDefaults, {
							barColor: PixelAdmin.settings.consts.COLORS[1]
						}));
						$('#easy-pie-chart-2').easyPieChart($.extend({}, easyPieChartDefaults, {
							barColor: PixelAdmin.settings.consts.COLORS[1]
						}));
						$('#easy-pie-chart-3').easyPieChart($.extend({}, easyPieChartDefaults, {
							barColor: PixelAdmin.settings.consts.COLORS[1]
						}));
						$('#easy-pie-chart-4').easyPieChart($.extend({}, easyPieChartDefaults, {
							barColor: PixelAdmin.settings.consts.COLORS[1]
						}));
					});
				</script>
				<!-- / Javascript -->

				<!--Comments count example-->				
				<div class='col-md-5'>	
				<h2 class='panel panel-primary'>Les commentaires</h2>

					<div class="stat-panel">
						<!-- Success background. vertically centered text -->
						<div class="stat-cell bg-danger valign-middle" style='text-align: center;'>
							<!-- Stat panel bg icon -->
							<i class="fa fa-comments bg-icon"></i>
							<!-- Extra large text -->
							<span class="text-xlg" ><strong><?php echo $allcomments->nbcomments ?></strong></span><br>
							<!-- Big text -->
							<span class="text-bg">Comments</span><br>
							<!-- Small text -->
							<span class="text-sm">New comments today</span>
						</div> <!-- /.stat-cell -->
					</div> <!-- /.stat-panel -->

<!-- 					Taux de commentaires actifs-->				
					<div class="stat-panel text-center">		


						<div class="stat-row">
							<!-- Dark gray background, small padding, extra small text, semibold text -->
							<div class="stat-cell bg-dark-gray padding-sm text-xs text-semibold">
								<i class="fa fa-flash"></i>&nbsp;&nbsp; Taux de commentaires actifs
							</div>
						</div> <!-- /.stat-row -->
						<div class="stat-row">
							<!-- Bordered, without top border, without horizontal padding -->
							<div class="stat-cell bordered no-border-t no-padding-hr">
								<div class="pie-chart" data-percent="59" id="easy-pie-chart-2">
									<div class="pie-chart-label"><?php echo FLOOR($nbcommentact->commentsactifs/$allcomments->nbcomments*100);?>%</div>
								</div>
							</div>
						</div> <!-- /.stat-row -->
					</div>		

					<div class="stat-panel">
						<!-- Success background, bordered, without top and bottom borders, without left border, without padding, vertically and horizontally centered text, large text -->
						<a href="#" class="stat-cell col-xs-5 bg-success bordered no-border-vr no-border-l no-padding valign-middle text-center text-lg">
							<i class="fa fa-comments"></i>&nbsp;&nbsp;
							<strong>
							
							<p><?php echo $allcomments->nbcomments ?> commentaires
							</p></strong>
						</a> <!-- /.stat-cell -->
						<!-- Without padding, extra small text -->
						<div class="stat-cell col-xs-7 no-padding valign-middle">
							<!-- Add parent div.stat-rows if you want build nested rows -->
							<div class="stat-rows">
								<div class="stat-row">
									<!-- Success background, small padding, vertically aligned text -->
									<a href="#" class="stat-cell bg-success padding-sm valign-middle">
										
										<p><?php echo $nbcommentact->commentsactifs ?> actifs
										
										<i class="fa fa-comment pull-right"></i></p>
									</a>
								</div>
								<div class="stat-row">
									<!-- Success darken background, small padding, vertically aligned text -->
									<a href="#" class="stat-cell bg-success darken padding-sm valign-middle">
										
										<p><?php echo $nbcommentencours->commentsencours ?> en cours
										
										<i class="fa fa-comment-o pull-right"></i></p>
									</a>
								</div>
								<div class="stat-row">
									<!-- Success darker background, small padding, vertically aligned text -->
									<a href="#" class="stat-cell bg-success darker padding-sm valign-middle">
										
										<p><?php echo $nbcommentinact->commentsinactifs ?> inactifs
										
										<i class="fa fa-archive pull-right"></i></p>
									</a>
								</div>
							</div> <!-- /.stat-rows -->
						</div> <!-- /.stat-cell -->
					</div>	


				</div><!-- FIN DE col-md-5-->
<!-- /6. $EXAMPLE_COMMENTS_COUNT -->		
		</div><!-- FIN DE ROW -->

		<h2 class='panel panel-primary'>Des chiffres et des films</h2>
		<div class='row'>
			<div class='col-md-2'><!-- Taux de film en favoris-->
				<div class="stat-panel text-center">
					<div class="stat-row">
						<!-- Dark gray background, small padding, extra small text, semibold text -->
						<div class="stat-cell bg-dark-gray padding-sm text-xs text-semibold">
							<i class="fa fa-flash"></i>&nbsp;&nbsp; Taux de films en favoris
						</div>
					</div> <!-- /.stat-row -->
					<div class="stat-row">
						<!-- Bordered, without top border, without horizontal padding -->
						<div class="stat-cell bordered no-border-t no-padding-hr">
							<div class="pie-chart" data-percent="27" id="easy-pie-chart-3">
								<div class="pie-chart-label"><?php echo round($filmfavori->favori / $statsfilm->movie * 100); ?>%</div>
							</div>
						</div>
					</div> <!-- /.stat-row -->
				</div>	
			</div><!-- Fin de col-md-2 -->

			<div class='col-md-2'><!-- Taux de film diffusés-->
				<div class="stat-panel text-center">
					<div class="stat-row">
						<!-- Dark gray background, small padding, extra small text, semibold text -->
						<div class="stat-cell bg-dark-gray padding-sm text-xs text-semibold">
							<i class="fa fa-flash"></i>&nbsp;&nbsp; Taux de films diffusés
						</div>
					</div> <!-- /.stat-row -->
					<div class="stat-row">
						<!-- Bordered, without top border, without horizontal padding -->
						<div class="stat-cell bordered no-border-t no-padding-hr">
							<div class="pie-chart" data-percent="<?php echo round($filmdiffuses->diffuse / $statsfilm->movie * 100); ?>" id="easy-pie-chart-4">
								<div class="pie-chart-label"><?php echo round($filmdiffuses->diffuse / $statsfilm->movie * 100); ?>%</div>
							</div>
						</div>
					</div> <!-- /.stat-row -->
				</div>	
			</div><!-- Fin de col-md-2 -->

			<div class='col-md-2'><!-- Budget total des films-->
				<div class="stat-panel" >
					<!-- Success background. vertically centered text -->
					<div class="stat-cell bg-danger valign-middle" style='text-align: center; height:170px'>
						<!-- Stat panel bg icon -->
						<i class="fa fa-film bg-icon"></i>
						<!-- Extra large text -->
						<span class="text-xlg" ><strong><?php echo $totalbudget->totalbudget ?>&euro;</strong></span><br>
						<!-- Big text -->
						<span class="text-bg">Budget total</span><br>
						<!-- Small text -->
						<span class="text-sm">De tous les films</span>
					</div> <!-- /.stat-cell -->
				</div> <!-- /.stat-panel -->
			</div><!-- Fin de col-md-2 -->

			<div class='col-md-6'>
				<div class="stat-panel">
						<!-- Success background, bordered, without top and bottom borders, without left border, without padding, vertically and horizontally centered text, large text -->
						
						<a href="#" class="stat-cell col-xs-5 bg-success bordered no-border-vr no-border-l no-padding valign-middle text-center text-lg">
							<i class="fa fa-group"></i>&nbsp;&nbsp;
							<p style='font-size: 70%;'>Moyenne d'age des acteurs :</p>
							<strong>
							
							<p><?php echo $moyenneage->moyenne ?> ans
							</p></strong>
						</a> <!-- /.stat-cell -->
						<!-- Without padding, extra small text -->
						<div class="stat-cell col-xs-7 no-padding valign-middle">
							<!-- Add parent div.stat-rows if you want build nested rows -->
							<div class="stat-rows">
								<div class="stat-row">
									<!-- Success background, small padding, vertically aligned text -->
									<a href="#" class="stat-cell bg-success padding-sm valign-middle">
										
										<p><?php echo $actorlyon->actlyon ?> <?php echo $actorlyon->city ?>
										
										<i class="fa fa-car pull-right"></i></p>
									</a>
								</div>
								<div class="stat-row">
									<!-- Success darken background, small padding, vertically aligned text -->
									<a href="#" class="stat-cell bg-success darken padding-sm valign-middle">
										
										<p><?php echo $actorparis->actparis ?> <?php echo $actorparis->city ?>
										
										<i class="fa fa-car pull-right"></i></p>
									</a>
								</div>
								<div class="stat-row">
									<!-- Success darker background, small padding, vertically aligned text -->
									<a href="#" class="stat-cell bg-success darker padding-sm valign-middle">
										
										<p><?php echo $actorbirmin->actbirmin ?> <?php echo $actorbirmin->city ?>
										
										<i class="fa fa-car pull-right"></i></p>
									</a>
								</div>
							</div> <!-- /.stat-rows -->
						</div> <!-- /.stat-cell -->
					</div>	
			</div><!-- Fin de col-md-6-->
		</div> <!--FIN DE 'row'	 -->
		<div class='row'>
			<div class='col-md-6'>
				<!-- 8. $MORRISJS_DONUT ============================================================================

				Morris.js Donut
-->
				<!-- Javascript -->
				<script>
					init.push(function () {
						Morris.Donut({
							element: 'hero-donut',
							
							data: [
							<?php foreach ($film_categories as $film_categorie){?>
								{ label: '<?php echo $film_categorie->title?>', value: '<?php echo round($film_categorie->nbcategorie / $stat1->cats * 100); ?>'},
							<?php } ?>
							],
							
							colors: PixelAdmin.settings.consts.COLORS,
							resize: true,
							labelColor: '#888',
							formatter: function (y) { return y + "%" }
						});
					});
				</script>
				<!-- / Javascript -->

				<div class="panel">
					<div class="panel-heading">
						<span class="panel-title"><b>Repartition des films par categories</b></span>
					</div>
					<div class="panel-body">
						

						<div class="graph-container">
							<div id="hero-donut" class="graph"></div>
						</div>
					</div>
				</div>


<!-- /8. $MORRISJS_DONUT -->
			</div><!-- fin de col-md-6-->
			<div class='col-md-6'>
				<!-- 7. $MORRISJS_BARS =============================================================================

				Morris.js Bars
-->
				<!-- Javascript -->
				<script>
					init.push(function () {
						Morris.Bar({
							element: 'hero-bar',
							
							data: [
							<?php foreach ($film_sorties as $film_sortie){ ?>
								{ device: '<?php echo $film_sortie->mois?>', geekbench: '<?php echo $film_sortie->nb ?>' },
							<?php } ?>
							],
							
							xkey: 'device',
							ykeys: ['geekbench'],
							labels: ['Nombres'],
							barRatio: 0.4,
							xLabelAngle: 35,
							hideHover: 'auto',
							barColors: ["#4CA14C"],
							gridLineColor: '#cfcfcf',
							resize: true
						});
					});
				</script>
				<!-- / Javascript -->
				
				<div class="panel">
					<div class="panel-heading">
						<span class="panel-title"><b>Repartition des films par mois de sortie </b></span>
					</div>
					<div class="panel-body">
						<div class="graph-container">
							<div id="hero-bar" class="graph"></div>
						</div>
					</div>
				</div>
<!-- /7. $MORRISJS_BARS -->

			</div><!-- Fin de col-md-6-->

		</div><!-- Fin de row -->


		<!-- <div  class='row'>
				<h2 class='panel panel-primary'>Les 5 derniers utilisateurs connectés :</h2>
				<?php foreach($lastusers as $lastuser){?>
					<img src='<?php echo $lastuser->image ?>' width='100' height='150'/>
					<p><?php echo $lastuser->username ?></p>
					<p><?php echo $lastuser->lastlogin ?></p>
				<?php } ?>
		</div> -->
	</div> <!-- End Content-wrapper -->

		<!-- Vue footer incluse -->
		<?php $this->load->view('partials/footer'); ?>
