<?php 
	get_header();
?>

<h3>Page d'accueil</h3>

<h4>Article a la Une</h4>

<?php 
	$post= get_post(9);// Article dont l'id est égal a 9

	echo $post->post_title;
?>

<div class='row'>
	<?php if (have_posts()) : ?> 
		<p class="title"> 
			Hey ! Il y a des Posts ! 
		</p> <?php while (have_posts()) : the_post(); ?> 
		<div class="post col-md-6"> 
			<?php the_post_thumbnail('thumbnail'); ?>
			<h3 class="post-title"> 
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 
			</h3> 
			<p class="post-info"> 
				Posté le <?php the_date(); ?> dans <?php the_category(', '); ?> par <?php the_author(); ?>. 
			</p> 
			<div class="post-content"> 
				<?php the_excerpt(); ?> 
			</div> 
		</div> 
	<?php endwhile; ?> 
	<?php else : ?> 
		<p class="nothing"> 
			Il n'y a pas de Post à afficher ! 
		</p> 
	<?php endif; ?>
</div>

<hr />

<hr />
<h1>Recettes de toutes mes cuisines</h1>

<div class='row'>
	<?php query_posts('post_type=recettes'); ?>
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<div class='col-md-4'>
		<h3 class='project-name'><?php the_title(); ?></h3>
		<p class='project-description'><?php the_excerpt(); ?></p>
		<p class='project-description'><?php the_content(); ?></p>
		<?php the_post_thumbnail(); ?>
	</div>

	<?php the_terms($post->ID,'Types','Type : '); ?><br>
	<?php the_terms($post->ID,'Origines','Origines : '); ?><br>
<?php endwhile; ?>
<?php endif; ?>
</div>


<?php 
	get_footer();
?>