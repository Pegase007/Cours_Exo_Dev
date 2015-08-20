<?php
get_header();
?>

<div class='row'>
	<h3>Les articles du tag</h3>

	<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

	<div class='post col-md-4'>
		<?php the_post_thumbnail('thumbnail'); ?>
		<h3 class='post-title'> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

		<?php the_tags() ?>
	</div>

<?php endwhile; ?>

<?php endif; ?>




</div>

<?php
get_footer();
?>