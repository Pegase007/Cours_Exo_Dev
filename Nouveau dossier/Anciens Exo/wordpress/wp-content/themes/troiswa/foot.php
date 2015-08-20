<?php 
/* Template name: foot */
?>

<?php get_header(); ?>

<h1>Template de page foot: <?php the_title('<h1 class="entry-title">', '</h1>'); ?></h1>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<div class='project'>
		<h3 class='project-name'><?php the_title(); ?></h3>
		<p class='project-description'><?php the_content(); ?></p>
	</div>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>