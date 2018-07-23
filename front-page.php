<?php get_header(); ?>

<div class="container mt-5 mb-5">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>

</div> <!-- /container -->

<?php get_footer(); ?>

