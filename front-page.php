<?php
/*
Template Name: Front Page

*/


get_header(); ?>
<div class="home-background">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		a place to work
            without distraction
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>


			<?php endwhile; // end of the loop. ?>
		
		</main><!-- #main -->
	</div><!-- #primary -->
</div>

<?php get_sidebar(); ?>
