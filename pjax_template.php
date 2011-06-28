<?php
/**
 * A Template for displaying pjax-loaded content.
 */
?>

<div id="primary">
	<div id="content" role="main" class="blablabl">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php comments_template( '', true ); ?>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->
</div><!-- #primary -->
