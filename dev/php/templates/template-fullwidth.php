<?php
/*
Template Name: Page w/o sidebar
*/
?>

<?php get_header(); ?>
	<div class="page-title">
		<h2><?php the_title(); ?></h2>
	</div>
	<div class="u-gridContainer">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth" id="post-<?php the_ID(); ?>">
			<div class="Content-entry">
				<?php the_content(); ?>
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>

