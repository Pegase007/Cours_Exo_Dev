<?php 
get_header();
?>

<?php if(have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>
	<h1><?php the_title(); ?></h1>
	<?php the_post_thumbnail('thumbnail'); ?>

	<i><?php the_excerpt(); ?></i>
	<div> <?php the_content(); ?> </div>

	<p>Posté le <?php the_date(); ?> dans <?php the_category(','); ?> par <?php the_author(); ?></p>
<?php endwhile; ?>

<?php endif; ?>

<?php 
get_footer();
?>
