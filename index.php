<?php
/**
 * The main template file
 *
 * Render generic pages.
 *
 * @package WP OS Theme
 *
 * @since 1.0.0
 */

get_header(); ?>

<div class="wrap">
<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/post/content', get_post_format() );

				endwhile;

				the_posts_pagination( array(
					'prev_text' => __( 'prev.', 'cac-wp-os' ),
					'next_text' => __( 'next.', 'cac-wp-os' ),
					'before_page_number' =>  __( 'Page', 'cac-wp-os' )
				) );

			else :

				get_template_part( 'template-parts/post/content', 'none' );

			endif;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>

<?php get_footer();
